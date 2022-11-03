    <!doctype html>
    <html lang="en">

    <head>
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
        <?php
            $booking = $_POST["booking"] . " " . $_POST["time"];
            $start_book = date("d-m-Y H:i:s", strtotime($booking));
            $end_book= date("d-m-Y H:i:s", (strtotime($booking) + 60 * 60 * 24 * $_POST["day"]));
            $car_type = $_POST["car_type"];
            $phone = $_POST["phone"];

            $serviceprice = 0;
            if (is_iterable($_POST["service"])) {
                foreach ($_POST["service"] as $service) {
                    if ($service == "Health protocol") {
                        $serviceprice += 25000;
                    }
                    if ($service == "Driver") {
                        $serviceprice += 100000;
                    }
                    if ($service == "Fuel Filled") {
                        $serviceprice += 250000;
                    }
                }
            } else {
                $serviceprice += 0;
            }
            ?>

            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container-fluid">
                <div class="collapse navbar-collapse justify-content-md-center">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="hanan_home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="hanan_booking.php">Booking</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
            <!-- End Navbar -->

            <!-- Title -->
            <div class="container" style="text-align: center;">
            <div class="m-2">
                <p class="m-0" style="font-size:30px">Thank you <?php echo $name; ?> for Reserving</p>
                <p class="m-0" style="font-size:25px">Please double check your reservation detail</p>
            </div>
        </div>
            <!-- End Title -->

        <!-- Content -->
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Booking Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Check-in</th>
                        <th scope="col">Check-out</th>
                        <th scope="col">Car Type</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Service(s)</th>
                        <th scope="col">Total Price</th>
                    </tr>
                </thead>
                <tbody class="bg-light">
                    <tr>
                        <td><strong><?php echo rand(1, 100000); ?></strong></td>
                        <td><?php echo $name; ?></td>
                        <td><?php echo $start_book ?></td>
                        <td><?php echo $end_book ?></td>
                        <td><?php echo $car_type ?></td>
                        <td><?php echo $phone ?></td>
                        <td>
                            <?php
                            if (is_iterable($_POST["service"])) {
                                foreach ($_POST["service"] as $service) {
                                    echo "<li>$service</li>";
                                }
                            } else {
                                echo "no service";
                            }
                            ?>
                        </td>
                        <td> Rp.
                            <?php
                            if ($_POST["car_type"] == $carlist[0]["car"]) {
                                echo ($_POST["day"] * $carlist[0]["price"]) + $serviceprice;
                            } else if ($_POST["car_type"] == $carlist[1]["car"]) {
                                echo ($_POST["day"] * $carlist[1]["price"]) + $serviceprice;
                            } else if ($_POST["car_type"] == $carlist[2]["car"]) {
                                echo ($_POST["day"] * $carlist[2]["price"]) + $serviceprice;
                            } else {
                                echo "0";
                            }
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- End Content -->

        <!-- Footer -->
        <footer class="fixed-bottom text-center pt-3 bg-light">
            <p style="text-align: center; color: lightslategray;">
                Created by <?php echo $name; ?>
            </p>
        </footer>
        <!-- End Footer -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

    </html>