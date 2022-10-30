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
    <div class="mt-2 mb-2 container">
        <h1 class="p-1" style="text-align: center;">Rent your car now!</h1>
    </div>
    <!-- End Title -->

    <div class="container card shadow-sm">
        <div class="d-flex justify-content-around">
            <div class="col-6 ps-5 pe-5 d-flex align-items-center">
                <?php
                if (isset($_GET["images"])) {
                ?><img class="" width="100%" src="<?= $_GET["images"]; ?>" alt="">
                <?php
                } else {
                ?><img width="100%" src="images/img-fortuner.png" alt="">
                <?php }?>
            </div>
            <div class="col-6 ps-5 pe-5">
                <ul type="none">
                    <form action="hanan_my_booking.php" method="post">
                        <li class="m-1">
                            <label for="name">Name</label><br>
                            <input class="form-control bg-light" type="text" name="name" id="name" placeholder="<?= $name;?>" readonly>
                        </li>
                        <li class="m-1">
                            <label for="booking">Book Date</label><br>
                            <input class="form-control" type="date" name="booking" id="booking">
                        </li>
                        <li class="m-1">
                            <label for="time">Start Time</label><br>
                            <input class="form-control" type="time" name="time" id="time">
                        </li>
                        <li class="m-1">
                            <label for="day">Duration (Days)</label><br>
                            <input class="form-control" type="number" name="day" id="day" min="1">
                        </li>
                        <li class="m-1">
                            <label for="car_type">Car Type</label>
                            <select class="form-select" name="car_type" id="car_type">
                                <option selected>Choose...</option>
                                <?php foreach ($carlist as $car_list) : ?>
                                    <?php
                                    if ($car_list["car"] == $_GET["car"]) {
                                    ?><option selected="selected" value="<?= $car_list["car"]; ?>"><?= $car_list["car"]; ?></option>
                                    <?php
                                    } else {
                                    ?><option value="<?= $car_list["car"]; ?>"><?= $car_list["car"]; ?></option>
                                    <?php } ?>
                                <?php endforeach; ?>
                            </select>
                        </li>
                        <li class="m-1">
                            <label for="phone">Phone Number</label><br>
                            <input class="form-control" type="number" name="phone" id="phone" min="0">
                        </li>
                        <li class="m-1">
                            <label for="service">Add Service(s)</label><br>
                            <input class="form-check-input m-1" type="checkbox" name="service[]" value="Health protocol" id="health"><label class="form-check-label" for="health">Health protocol / Rp25.000</label><br>
                            <input class="form-check-input m-1" type="checkbox" name="service[]" value="Driver" id="driver"><label class="form-check-label" for="driver">Driver / Rp100.000</label><br>
                            <input class="form-check-input m-1" type="checkbox" name="service[]" value="Fuel Filled" id="fuel"><label class="form-check-label" for="fuel">Fuel Filled / Rp.250.000</label><br>
                        </li>
                        <li class="text-center">
                            <button class="btn btn-success justify-content-around mt-3" style="width: 100%;" type="submit">Book</button>
                        </li>
                    </form>
                </ul>
            </div>
        </div>
    </div>

    <footer class="fixed-bottom text-center pt-3 bg-light">
        <p style="text-align: center; color: lightslategray;">
            Created by <?php echo $name; ?>
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>