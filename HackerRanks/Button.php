<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Username:<input type="text" name="name">
    Password:<input type="password" name = "pass">
    <input type="submit" value="log in" name="login">
    <input type="submit" value="register" name="register">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $pass = $_POST["pass"];

    if (isset($_POST["login"])){
        echo "dang nhap thanh cong";
    } elseif (isset($_POST["register"])){
        echo "dang ky";
    }
}
?>
</body>
</html>