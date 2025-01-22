<?php
$mahahaha = [
    ["rapael", "099203", "PT kecap kecup", "jengki"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doksli rapael</title>
</head>
<body>
    <h1>ktp rapael</h1>

    <ul> 
        <?php foreach ($mahahaha as $mahohoho) : ?>
            <li>Nama: <?php echo $mahohoho[0]; ?></li>
            <li>NIM: <?php echo $mahohoho[1]; ?></li>
            <li>Jurusan: <?php echo $mahohoho[2]; ?></li>
            <li>Rumah: <?php echo $mahohoho[3]; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
