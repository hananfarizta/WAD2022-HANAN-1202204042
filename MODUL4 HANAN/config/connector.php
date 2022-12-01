  <?php
  $koneksi = new mysqli("localhost", "root", "root", "modul3", 8889);
  $koneksiuser = new mysqli("localhost", "root", "root", "wad_modul4_hanan", 8889);

  if (!$koneksi) {
    die("Error Connection: " . $koneksi->connect_error);
  }