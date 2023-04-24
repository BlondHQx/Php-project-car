<?php
session_start();
if (!empty($_POST)) {
    $array_users = json_decode(file_get_contents("../database/users.json"));
    $user_filter = array_filter($array_users, function ($user){
        return $user->email == $_POST['email'];
    });
    $user_filter = array_values($user_filter);
    if(!empty($user_filter)){
        $_SESSION['userId'] = $user_filter[0]->id;
        $_SESSION['userName'] = $user_filter[0]->username;
    }
    header('Location:../index.php');
}
?>