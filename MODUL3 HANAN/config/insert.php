<?php
require './connector.php';

$target = "../asset/images/";

$car_name = $_POST['nama'];
$owner = $_POST['pemilik'];
$car_merk = $_POST['merk'];
$buy_date = $_POST['tanggalbeli'];
$description = $_POST['desc'];
$status = $_POST['status'];
$images = $_FILES['gambar']['name'];

if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $images)) {
  $sql = "INSERT INTO showroom_hanan_table (nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$car_name', '$owner', '$car_merk', '$buy_date', '$description', '$images', '$status')";
  if (mysqli_query($koneksi, $sql)) {
    header("location: ../pages/List-Hanan.php?message=succes");
  } else {
    echo "Error";
  }
} else {
  echo "Error";
}
