<?php
$regex_email = '/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/';
$regex_password = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';
if (!empty($_POST)) {
    $user = $_POST;
    $user['id'] = uniqid();
    if (preg_match($regex_email, $_POST['email']) && preg_match($regex_password, $_POST['password']) && $_POST['password'] == $_POST['confirm_password']) {
        unset($user['confirm_password']);
        $user["password"] = password_hash($user["password"], PASSWORD_DEFAULT);
        $array_users = json_decode(file_get_contents("../database/users.json"));
        array_push($array_users, $user);
        $array_users = json_encode($array_users);
        file_put_contents("../database/users.json", $array_users);
        header("Location: ../pages/login.php");
    }
    else{
        echo 'error';
    }
}
?>
