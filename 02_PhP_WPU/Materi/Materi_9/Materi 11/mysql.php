<?php
session_start();
if ( !isset($_SESSION["login"])){
    header("location:login.php");
    exit;
}

require 'Function.php';

$jumlahdataperhalaman = 5;
$jumlahdata = count(query("SELECT * FROM mahasiswa"));

$mahasigma = query("SELECT * FROM mahasiswa LIMIT 0, $jumlahdataperhalaman");

if( isset($_POST["cari"])){
    $mahasigma = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman atmin</title>
</head>
<body>

<a href="logout.php">logout</a>


<h1>Daftar mahasiswa</h1>

<a href="nambah.php">tambah data mahasiswa</a>
<br><br>

<form action="" method="post">

    <input type="text" name="keyword" autofocus placeholder="search.." autocomplete="off">
    <button type="submit" name="cari">search</button>

</form>
<br>

<table border="1" cellpading="10" cellspacing="0">

<tr>
    <th>no.</th>
    <th>aksi</th>
    <th>gambar</th>
    <th>nisn</th>
    <th>nama</th>
    <th>email</th>
    <th>jurusan</th>

</tr>
<?php $i = 1; ?>
<?php foreach( $mahasigma as $row ) :?>
<tr>
    <td><?= $i; ?></td>
    <td>
        <a href ="update.php?id=<?= $row["id"]; ?>">ubah</a> |
        <a href ="delete.php?id=<?=  $row["id"];?>" onclick="return confirm('cius?');">hapus</a>
    </td>
    <td><img src="img/<?= $row["gambar"];?>" 
    width="50"></td>
    <td><?= $row["nisn"];?></td>
    <td><?= $row["nama"];?></td>
    <td><?= $row["email"];?></td>
    <td><?= $row["jurusan"];?></td>
</tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>

</body>
</html>