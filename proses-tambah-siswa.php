<?php
require_once "./library/koneksi.php";

// Ambil data dari form
$nisn = mysqli_real_escape_string($koneksi, $_POST['nisn']);
$nama_lengkap = mysqli_real_escape_string($koneksi, $_POST['nama_lengkap']);
$jenis_kelamin = mysqli_real_escape_string($koneksi, $_POST['jenis_kelamin']);
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
$no_hp = mysqli_real_escape_string($koneksi, $_POST['no_hp']);
$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$id_kelas = $_POST['id_kelas'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$status = $_POST['status'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // hash password

// Cek apakah NISN sudah ada
$cek = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nisn='$nisn'");
if(mysqli_num_rows($cek) > 0){
    echo "<script>alert('NISN sudah terdaftar!'); window.location='tambah-siswa.php';</script>";
    exit;
}

// Insert ke database
$sql = "INSERT INTO siswa (nisn, nama_lengkap, jenis_kelamin, tanggal_lahir, alamat, no_hp, email, id_kelas, tanggal_masuk, status, password) 
        VALUES ('$nisn', '$nama_lengkap', '$jenis_kelamin', '$tanggal_lahir', '$alamat', '$no_hp', '$email', '$id_kelas', '$tanggal_masuk', '$status', '$password')";

if(mysqli_query($koneksi, $sql)){
    echo header('Location: biodata-siswa.php?status=added');
} else {
    echo "Error: " . mysqli_error($koneksi);
}
?>
