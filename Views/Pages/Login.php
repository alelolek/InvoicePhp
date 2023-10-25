<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/login.css">
    <title>Login</title>
</head>

<body>
    <div class="form-body">
        <img src="../src/images/img.jpg" alt="user-login">
        <form method="POST" action="../../Controllers/LoginController.php" class="login-form">
            <input type="text" name="username" placeholder="Username" autocomplete="off">
            <input type="password" name="password" placeholder="Password" autocomplete="off">
            <button type="submit" name="login" >LOGIN</button>
        </form>
    </div>
</body>
</html>