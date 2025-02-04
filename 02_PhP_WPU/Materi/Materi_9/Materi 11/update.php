<?php

session_start();
if ( !isset($_SESSION["login"])){
    header("location:login.php");
    exit;
}

require 'Function.php';

$id = $_GET["id"];
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if( isset($_POST["sumbit"])){

    if( update($_POST)> 0 ){
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href='mysql.php';
        </script>
        ";
    } else{
        echo "
        <script>
            alert('data gagal diubah');
            document.location.href='mysql.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update data mahasiswa</title>
</head>
<body>
    <h1>update data mahasiswa</h1>    


    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="gambarlama" value="<?= $mhs["gambar"];?>">
        <ul>
            <li>
            <input type="hidden" name="id" id="id" requied value="<?= $mhs["id"]?>">
            </li>
            <li>
                <label for="nama">NAMA :</label>
                <input type="text" name="nama" id="nama" requied value="<?= $mhs["nama"]?>">
            </li>
            <li>
            <label for="jurusan">JURUSAN :</label>
            <input type="text" name="jurusan" id="jurusan"id="nama" requied value="<?= $mhs["nama"]?>">
            </li>
            <li>
            <label for="email">EMAIL:</label>
            <input type="text" name="email" id="email"id="nama" requied value="<?= $mhs["email"]?>">
            </li>
            <li>
                <label for="nisn">NISN :</label>
                <input type="text" name="nisn" id="nisn"id="nama" requied value="<?= $mhs["nisn"]?>">
            </li>
            <li>
            <label for="gambar">GAMBAR :</label>
            <img src="img/<?= $mhs['gambar'];?>" width="85"><br>
            <input type="file" name="gambar" id="gambar"id="nama">
            </li>
            <li>
                <button type="sumbit" name="sumbit">update data</button>
            </li>
        </ul>

    </form>







</body>
</html>