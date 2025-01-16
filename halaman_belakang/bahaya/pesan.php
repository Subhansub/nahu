<?php
        $host='localhost';
        $user='root';
        $pass='';
        $db  ='magang';

        $koneksi = mysqli_connect($host, $user, $pass, $db);
        mysqli_select_db($koneksi, $db);





        // koneksi ke database
$nama = "nama";
$alamat_email = "alamat email";
$no_telp = "no telp";
$pesan = "pesan";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ambil data dari formulir
$nama = $_POST['nama'];
$email = $_POST['almat email'];
$no_telp = $_POST['no Telp'];
$pesan = $_POST['pesan'];


// siapkan query SQL
$sql = "INSERT INTO pesan (nama, email, no_telp, pesan) VALUES ('$nama', '$email', '$no_telp', '$pesan')";

// eksekusi query
if ($conn->query($sql) === TRUE) {
    echo "Pesan berhasil dikirim!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>