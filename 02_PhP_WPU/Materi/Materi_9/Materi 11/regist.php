<?php
require 'Function.php';

if( isset($_POST["register"])){

    if(register($_POST) > 0){
        echo "<script>
            alert('new user complete to add');
        </script>";
    } else {
        echo mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
    

    <h1>Halaman registrasi</h1>

    <form action="" method="post">

    <ul>
        <li>
            <label for="username">username:</label>
            <input type="text" name="username" id="username">
        </li>
    </ul>
        <li>
            <label for="password">password:</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <label for="password2">Confirm password:</label>
            <input type="password" name="password2" id="password2">
        </li>
        <li>
            <button type="submit" name="register"> Register</button>
        </li>

    </form>

</body>
</html>