<?php
// koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdeepweb");


function query($query) {
    global $conn;
    $result = mysqli_query($conn,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data){
    global $conn;

    $nisn = htmlspecialchars($data["nisn"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan =htmlspecialchars($data["jurusan"]);

    $gambar = upload();
    if( !$gambar ){
        return false;
    }
    $query = "INSERT INTO mahasiswa
                VALUES 
                ('','$nama','$jurusan','$email','$nisn','$gambar')";
    mysqli_query($conn, $query);
    
    return mysqli_affected_rows($conn);


}


function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if( $error === 4){
        echo "<script>
        alert('Pilih gambar terlebih dahulu');
        </script>";
        return false;
    }

    $ekstensigambarvalid = ['jpg','jpeg','png'];
    $ekstensigambar = explode('.', $namaFile);
    $ekstensigambar = strtolower(end($ekstensigambar));
    if( !in_array($ekstensigambar, $ekstensigambarvalid)){
        echo "<script>
        alert('bukan gambar njir');
        </script>";
        return false;
    }


    if( $ukuranFile > 100000000000){
        echo "<script>
        alert('itu gambar atau data daleman gensin? gede amat');
        </script>";
        return false;
    }


    $namaFileBaru = uniqid();
    $namaFileBaru .= '.'. $ekstensigambar;
    move_uploaded_file( $tmpName, 'img/'.$namaFileBaru );

    move_uploaded_file($tmpName, 'img/'. $namaFileBaru);
    return $namaFileBaru;



}




function hapus($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}


function update($data){
    global $conn;

    $id = $data['id'];
    $nama = htmlspecialchars($data["nama"]);
    $jurusan =  htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);
    $nisn = htmlspecialchars($data["nisn"]);
    $gambarlama = htmlspecialchars($data["gambarlama"]);

    if( $_FILES['gambar']['error'] === 4){
        $gambar = $gambarlama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE mahasiswa SET 
                nisn = '$nisn',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
                WHERE id = $id
                ";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);


}

function cari($keyword){
    $query = "SELECT * FROM mahasiswa
        WHERE
        nama LIKE '%$keyword%' OR
        nisn LIKE '%$keyword%' OR
        jurusan LIKE '%$keyword%'
        ";

        return query($query);
}


function register($data){
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);


    $result = mysqli_query($conn, "SELECT username FROM user WHERE username ='$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('username sudah ada')</script>";
        return false;
    }


    if( $password !== $password2){
        echo "<script>
        alert ('confirm password tidak sesuai');
        </script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}



?>