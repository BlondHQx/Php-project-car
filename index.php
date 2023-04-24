<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>bonjour <?= $_SESSION['userName']; ?></p>
    <h1>fosbf</h1>
    <form action="./controller/clear_session.php" method="POST">
        <input type="submit" value="Clear session" />
    </form>
    <a href="./pages/login.php">login</a>
    <a href="./pages/register.php">Register</a>
    <div>
        <form action="./controller/img.php" method="post" enctype="multipart/form-data">
            <label for="file">import</label>
            <input type="file" name='file'>
            <button type="submit">envoyer</button>
        </form>
    </div>
    <div>
        <?php
        $img_filter = array_filter(json_decode(file_get_contents('./database/img.json')), function ($img) {
            return $img->userId == $_SESSION['userId'];
        });
        foreach ($img_filter as $value) {
            echo "<img src='./assets/img/uploads/" . $value->name . "'alt='images'>";
        } ?>
    </div>


</body>

</html>