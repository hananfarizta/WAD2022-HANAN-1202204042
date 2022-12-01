    <?php
    require './connector.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM showroom_hanan_table WHERE id_mobil = $id";

    if (mysqli_query($koneksi, $sql)) {
      header("location: ../pages/List-Hanan.php?message=delete");
    } else {
      echo "Error";
    }
