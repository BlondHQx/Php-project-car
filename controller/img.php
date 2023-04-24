<?php
session_start();
//verifie si l'image a ete importer
if(!empty($_FILES["file"])){
    $tmpname = $_FILES['file']['tmp_name'];
    $uniqueName = uniqid('', true);
    $arrayImg = json_decode(file_get_contents('../database/img.json'));

    array_push($arrayImg,["userId" => $_SESSION['userId'], "name" => $uniqueName]);
    $arrayImg = json_encode($arrayImg);
    file_put_contents("../database/img.json",$arrayImg);

    move_uploaded_file($tmpname, '../assets/img/uploads/'. $uniqueName );
    header('Location:../index.php');
}
?>