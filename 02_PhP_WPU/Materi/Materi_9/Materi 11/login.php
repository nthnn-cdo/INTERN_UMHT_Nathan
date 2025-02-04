<?php
session_start();

if( isset($_COOKIE['id']) && isset($_COOKIE['key'])){
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];


    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    if( $key === hash('sha256', $row['username']) ){
        $_SESSION['login'] = true;
    }


    if( isset($_SESSION["login"])){
        header("location: mysql.php");
        exit;
    }
}
require 'Function.php';

if( isset($_POST["login"])){
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if( mysqli_num_rows($result) === 1){
        
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"]));{

            $_SESSION["login"] = true;

            if( isset($_POST['remember'])){

                setcookie('id', $row['id'], time() + 30);
                setcookie('key', hash('sha256', $row['username']), time()+30 );
            }
            header("location: mysql.php");
            exit;
        }
    }

    $error = true;

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Halaman login</h1>

    <?php if( isset($error)) :?>
        <p style="color: red; font-style: italic;">Username atau password salah</p>
        <?php endif;?>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">username:</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">password:</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>

    </form>
</body>
</html>