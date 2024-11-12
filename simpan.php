<?php
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $dbname = "db_unj";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $wa = $_POST['wa'];
    $kode = $_POST['kode'];
    $nwa = '('.$kode.')'.$wa;
    $instansi = $_POST['instansi'];
    $asal = $_POST['asal'];
    date_default_timezone_set('Asia/Jakarta');
    $date = new DateTime();
    $ctdi = $date->format('Y-m-d H:i:s');
    $sql = "INSERT INTO form (nama, email, wa, instansi, asal, tdi)
    VALUES ('$nama', '$email', '$nwa', '$instansi', '$asal', '$ctdi')";
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>