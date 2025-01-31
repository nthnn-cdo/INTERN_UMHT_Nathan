<?php
require 'Function.php';

if( isset($_POST["sumbit"])){

    if( tambah($_POST)> 0 ){
        echo "
        <script>
            alert('data berhasil ditambahkan');
            document.location.href='mysql.php';
        </script>
        ";
    } else{
        echo "
        <script>
            alert('data gagal ditambahkan');
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
    <title>Add data mahasiswa</title>
</head>
<body>
    <h1>add data mahasiswa</h1>    


    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">NAMA :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
            <label for="jurusan">JURUSAN :</label>
            <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
            <label for="email">EMAIL:</label>
            <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="nisn">NISN :</label>
                <input type="text" name="nisn" id="nisn">
            </li>
            <li>
            <label for="gambar">GAMBAR :</label>
            <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="sumbit" name="sumbit">add data</button>
            </li>
        </ul>

    </form>







</body>
</html>