<?php
session_start(); // Mulai sesi

// Koneksi ke database
$name     = 'localhost';
$username = 'root';
$password = '';
$db       = 'magang';

$conn = mysqli_connect($name, $username, $password, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan data POST ada
    if (isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['no_telp']) && isset($_POST['pesan'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $no_telp = $_POST['no_telp'];
        $pesan = $_POST['pesan'];
    }
}

// Menyimpan data ke database
$sql = "INSERT INTO magang3 (nama, email, no_telp, pesan)
        VALUES ('$nama', '$email', '$no_telp', '$pesan')";

if ($conn->query($sql) === TRUE) {
    echo "Pesan terkirim!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>