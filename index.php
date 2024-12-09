<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome | PG Junction</title>

    <?php
    include "includes/head_links.php";
    ?>
    <link href="css/home.css" rel="stylesheet" />
</head>

<body>
    <?php
    include "includes/header.php";
    ?>

    <div class="banner-container">

        <div id="carouselExampleSlidesOnly" class="carousel slide banner-container" data-ride="carousel">
            <div class="carousel-inner">
                <h2 class="white pb-3">Your Comfort, Our Priority</h2>
                <div class="carousel-item active" data-bs-interval="10">
                    <img src="img/img1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="10">
                    <img src="img/img2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="10">
                    <img src="img/img3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="10">
                    <img src="img/img4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="10">
                    <img src="img/img5.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>


        <form id="search-form" action="property_list.php" method="GET">
            <div class="input-group city-search">
                <input type="text" class="form-control input-city" id='city' name='city'
                    placeholder="Enter your city to search for PG's" />
                <div class="input-group-append">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="page-container">
        <h1 class="city-heading">
            Major Cities
        </h1>

        <?php
         include "includes/cities.php"; 
        ?>
        <div class="row">
        </div>


        <!-- <section>
            <div class="container">
            </div>
        </section> -->
    </div>

    <?php
    include "includes/signup_modal.php";
    include "includes/login_modal.php";
    include "includes/footer.php";
    ?>

</body>

</html>