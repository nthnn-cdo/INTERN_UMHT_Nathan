<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "pengaduan";

function connectDB() {
    global $host, $user, $pass, $db;
    $conn = new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
    return $conn;
}

function savePengaduan($nama, $pengaduan, $file_path) {
    $conn = connectDB();
    $sql = "INSERT INTO pengaduan (nama, pengaduan, file_path) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nama, $pengaduan, $file_path);
    $result = $stmt->execute();
    $stmt->close();
    $conn->close();
    return $result;
}

function getPengaduan() {
    $conn = connectDB();
    $sql = "SELECT * FROM pengaduan ORDER BY id DESC";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $id = $_POST['id'];
    $conn = connectDB();
    
    $sql = "SELECT file_path FROM pengaduan WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($row = $result->fetch_assoc()) {
        $file_path = $row['file_path'];
        if (file_exists($file_path)) {
            unlink($file_path);
        }
    }
    
    $sql = "DELETE FROM pengaduan WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    $conn->close();
    
    header("Location: proyekpengaduan.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $pengaduan = $_POST['pengaduan'];
    
    $file_path = "";
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $uploadDir = "uploads/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $file_path = $uploadDir . basename($_FILES['file']['name']);
        move_uploaded_file($_FILES['file']['tmp_name'], $file_path);
    }

    if (savePengaduan($nama, $pengaduan, $file_path)) {
        header("Location: proyekpengaduan.php");
        exit();
    } else {
        echo "<script>alert('Gagal menyimpan pengaduan.');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Pengaduan</title>
    <script>
        function confirmDelete(formId) {
            if (confirm('jangan diapus bang pls ')) {
                document.getElementById(formId).submit();
            }
        }
    </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f4f4f4;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 50%;
            margin-top: 20px;
        }
        input, textarea {
            width: 100%;
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #218838;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #ddd;
        }
        .delete-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }
        .delete-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="container">
        <center><h2>Form Pengaduan</h2></center>
        <form method="post" enctype="multipart/form-data">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" required>
            
            <label for="pengaduan">Pengaduan:</label>
            <textarea name="pengaduan" id="pengaduan" required></textarea>
            
            <label for="file">Upload File:</label>
            <input type="file" name="file" id="file" required>
            
            <input type="submit" name="submit" value="Kirim">
        </form>

        <h2>Daftar Pengaduan</h2>
        <table>
            <tr>
                <th>Nama</th>
                <th>Pengaduan</th>
                <th>File</th>
                <th>Aksi</th>
            </tr>
            <?php
            $pengaduanList = getPengaduan();
            while ($row = $pengaduanList->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
                echo "<td>" . htmlspecialchars($row['pengaduan']) . "</td>";
                echo "<td><a href='" . htmlspecialchars($row['file_path']) . "' target='_blank'>Lihat File</a></td>";
                echo "<td><form method='post' id='deleteForm" . $row['id'] . "'>";
                echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
                echo "<input type='submit' name='delete' class='delete-btn' value='Hapus' onclick='confirmDelete(\"deleteForm" . $row['id'] . "\")'>";
                echo "</form></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
