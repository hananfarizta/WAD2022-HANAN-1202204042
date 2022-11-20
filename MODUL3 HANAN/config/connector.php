<?php
$koneksi = new mysqli("localhost", "root", "root", "modul3", 8889);

if (!$koneksi) {
  die("Error Connection: " . $koneksi->connect_error);
}
