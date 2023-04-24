<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCar</title>
</head>
<body>
    <header>

    </header>

    <main>
    <form class="form" action="../controller/register.php" method="post">
    <div class="username">
        <label for="username">username</label>
        <input type="username" name="username" id="username">
        </div>
        <div class="email">
        <label for="email">email</label>
        <input type="email" name="email" id="email">
        </div>
        <div class="pwd">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        </div>
        <div class="confirm_pwd">
        <label for="confirm_password">Confirm Password</label>
        <input type="password" name="confirm_password">
        </div>
        <button type="submit">Register</button>
    </form>
    </main>
</body>
</html>