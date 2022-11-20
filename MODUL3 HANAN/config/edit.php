<?php
require './connector.php';

$target = "../asset/images/";

$id = $_GET['id'];
$car_name = $_POST['nama'];
$owner = $_POST['pemilik'];
$car_merk = $_POST['merk'];
$buy_date = $_POST['tanggalbeli'];
$description = $_POST['desc'];
$status = $_POST['status'];
$images = $_FILES['gambar']['name'];


if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $images)) {
  $sql = "UPDATE showroom_hanan_table SET nama_mobil = '$car_name', pemilik_mobil = '$owner', merk_mobil = '$car_merk', tanggal_beli = '$buy_date', deskripsi = '$description', foto_mobil = '$gambar', status_pembayaran = '$status' WHERE id_mobil = $id";
  if (mysqli_query($koneksi, $sql)) {
    header("location: ../pages/List-Hanan.php?message=edit");
  } else {
    echo "Error";
  }
} else {
  echo "Error";
}
