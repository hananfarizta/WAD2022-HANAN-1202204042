<!doctype html>
<html lang="en">

<?php
    require "database/hanan_database.php";
?>
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EAD RENT | HANAN_1202204042</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  </head>

  <body>

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse justify-content-md-center">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="hanan_home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hanan_booking.php">Booking</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
      <!-- End Navbar -->
    
      <!-- Title -->
      <div>
        <p class="m-2" style="text-align: center; font-size: 25px">WELCOME TO EAD RENT</p>
        <p class="p-1" style="text-align: center;">Find your best deal, here!</p>
    </div>
      <!-- End Title -->

      <!-- Content -->
      <div class="container">
        <div class="d-flex justify-content-around">
            <div class="col-3 m-1">
                <div class="card shadow-sm rounded">
                    <img src="<?php echo $carlist[0]["images"]; ?>" alt="">
                    <div class="m-3">
                        <p class="m-0" style="font-size: 25px"><?php echo $carlist[0]["car"]; ?></p>
                        <p class="m-0" style="color: grey">Rp. <?php echo $carlist[0]["price"]; ?> / Day</p>
                    </div>
                    <hr class="m-0">
                    <p class="m-2" style="text-align: center; color: blue; font-weight: bold;">7 Kursi</p>
                    <hr class="m-0">
                    <p class="m-2" style="text-align: center; color: blue; font-weight: bold;">2755 CC</p>
                    <hr class="m-0">
                    <p class="m-2" style="text-align: center; color: blue; font-weight: bold;">Manual</p>
                    <hr class="m-0">
                    <div class="text-center bg-light">
                        <button class="m-2 btn btn-primary" type="submit"><a href="hanan_booking.php?images=<?= $carlist[0]["images"]; ?>&car=<?= $carlist[0]["car"]; ?>" style="color: white; text-decoration: none;">Book Now</a></button>
                    </div>
                </div>
            </div>
            <div class="col-3 m-1 ms-2 me-2">
                <div class="card shadow-sm rounded">
                    <img src="<?php echo $carlist[1]["images"]; ?>" alt="">
                    <div class="m-3">
                        <p class="m-0" style="font-size: 25px"><?php echo $carlist[1]["car"]; ?></p>
                        <p class="m-0" style="color: grey">Rp. <?php echo $carlist[1]["price"]; ?> / Day</p>
                    </div>
                    <hr class="m-0">
                    <p class="m-2" style="text-align: center; color: blue; font-weight: bold;">7 Kursi</p>
                    <hr class="m-0">
                    <p class="m-2" style="text-align: center; color: blue; font-weight: bold;">1500 CC</p>
                    <hr class="m-0">
                    <p class="m-2" style="text-align: center; color: blue; font-weight: bold;">Manual</p>
                    <hr class="m-0">
                    <div class="text-center bg-light">
                        <button class="m-2 btn btn-primary" type="submit"><a href="hanan_booking.php?images=<?= $carlist[1]["images"]; ?>&car=<?= $carlist[1]["car"]; ?>" style="color: white; text-decoration: none;">Book Now</a></button>
                    </div>
                </div>
            </div>
            <div class="col-3 m-1">
                <div class="card shadow-sm rounded">
                    <img src="<?php echo $carlist[2]["images"]; ?>" alt="">
                    <div class="m-3">
                        <p class="m-0" style="font-size: 25px"><?php echo $carlist[2]["car"]; ?></p>
                        <p class="m-0" style="color: grey">Rp. <?php echo $carlist[2]["price"]; ?> / Day</p>
                    </div>
                    <hr class="m-0">
                    <p class="m-2" style="text-align: center; color: blue; font-weight: bold;">7 Kursi</p>
                    <hr class="m-0">
                    <p class="m-2" style="text-align: center; color: blue; font-weight: bold;">1496 CC</p>
                    <hr class="m-0">
                    <p class="m-2" style="text-align: center; color: blue; font-weight: bold;">Automatic</p>
                    <hr class="m-0">
                    <div class="text-center bg-light">
                        <button class="m-2 btn btn-primary" type="submit"><a href="hanan_booking.php?images=<?= $carlist[2]["images"]; ?>&car=<?= $carlist[2]["car"]; ?>" style="color: white; text-decoration: none;">Book Now</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <!-- End Content -->

      <!-- Footer -->
      <footer class="fixed-bottom text-center pt-3 bg-light">
        <p style="text-align: center; color: lightslategray;">
            Created by HANAN_1202204042
        </p>
    </footer>
      <!-- End Footer -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>