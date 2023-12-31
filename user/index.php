<?php
session_start();

if (isset($_SESSION['isUserLogin']) != true) {
    header("Location: awal.php");
    exit();
}
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dream Movie 2023</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../dashboard/assets/vendor/css/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../dashboard/assets/css/demo.css" />
    <link rel="stylesheet" href="../dashboard/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/plyr.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../dashboard/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->

    <link rel="icon" type="image/x-icon" href="../img/logo.png">


    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../dashboard/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../dashboard/assets/js/config.js"></script>
</head>

<body>

    <?php
    include 'koneksi.php';
    include "template/product.php";
    ?>

    <!-- Header Section Begin -->
    <?php include "template/navbar.php" ?>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="hero__slider owl-carousel">
                <?php
                $query = mysqli_query($conn, "SELECT * FROM `film` WHERE FIND_IN_SET('Slide', `tag`) > 0 ORDER BY id ASC");
                tampilkanProduktop($query);
                ?>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Most Likes</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            $query = mysqli_query($conn, "SELECT f.*, COUNT(fl.film_id) AS total_likes FROM `film_like` AS fl JOIN `film` AS f ON f.id = fl.film_id GROUP BY fl.film_id ORDER BY total_likes DESC LIMIT 3;");
                            tampilkantag($query);
                            ?>
                        </div>
                    </div>
                    <div class="trending__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Trending Now</h4>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            $query = mysqli_query($conn, "SELECT * FROM `film` WHERE FIND_IN_SET('Trending Now', `tag`) > 0 ORDER BY id ASC LIMIT 3");
                            tampilkantag($query);
                            ?>
                        </div>
                    </div>
                    <div class="popular__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Latest Film</h4>
                                </div>
                            </div>
                            <!-- <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="kategori.php" class="primary-btn">View All <span
                                            class="arrow_right"></span></a>
                                </div>
                            </div> -->
                        </div>
                        <div class="row">
                            <?php
                            $query = mysqli_query($conn, "SELECT * FROM `film` WHERE FIND_IN_SET('Latest Film', `tag`) > 0 ORDER BY id ASC LIMIT 3");
                            tampilkantag($query);
                            ?>
                        </div>
                    </div>
                    <div class="recent__product">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8">
                                <div class="section-title">
                                    <h4>Most Repeat</h4>
                                </div>
                            </div>
                            <!-- <div class="col-lg-4 col-md-4 col-sm-4">
                                <div class="btn__all">
                                    <a href="kategori.php" class="primary-btn">View All <span
                                            class="arrow_right"></span></a>
                                </div>
                            </div> -->
                        </div>
                        <div class="row">
                            <?php
                            $query = mysqli_query($conn, "SELECT * FROM `film` WHERE FIND_IN_SET('Most Repeat', `tag`) > 0 ORDER BY id ASC LIMIT 3");
                            tampilkantag($query);
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8">
                    <div class="product__sidebar">
                        <div class="product__sidebar__view">
                            <div class="section-title">
                                <h5>Top Views</h5>
                            </div>
                            <ul class="filter__controls">
                                <li class="active" data-filter=".day">Day</li>
                                <li data-filter=".week">Week</li>
                                <li data-filter=".month">Month</li>
                                <li data-filter=".years">Years</li>
                            </ul>
                            <div class="filter__gallery">
                                <?php
                                $query = mysqli_query($conn, "SELECT * FROM `film` WHERE FIND_IN_SET('Top Views Day', `tag`) > 0 ORDER BY id ASC LIMIT 3");
                                if (mysqli_num_rows($query) > 0) {
                                    while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                        <div class="product__sidebar__view__item set-bg mix day"
                                            data-setbg="../dashboard/admin/<?php echo $data["gambar"] ?>">
                                            <!-- <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div> -->
                                            <h5><a href="anime-details.php?id=<?php echo $data["id"] ?>">
                                                    <?php echo $data["judul_film"] ?>
                                                </a></h5>
                                        </div>
                                        <?php

                                    }
                                }
                                $query = mysqli_query($conn, "SELECT * FROM `film` WHERE FIND_IN_SET('Top Views Week', `tag`) > 0 ORDER BY id ASC LIMIT 2");
                                if (mysqli_num_rows($query) > 0) {
                                    while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                        <div class="product__sidebar__view__item set-bg mix week"
                                            data-setbg="../dashboard/admin/<?php echo $data["gambar"] ?>">
                                            <!-- <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div> -->
                                            <h5><a href="anime-details.php?id=<?php echo $data["id"] ?>">
                                                    <?php echo $data["judul_film"] ?>
                                                </a></h5>
                                        </div>
                                        <?php
                                    }
                                }
                                $query = mysqli_query($conn, "SELECT * FROM `film` WHERE FIND_IN_SET('Top Views Month', `tag`) > 0 ORDER BY id ASC LIMIT 3");
                                if (mysqli_num_rows($query) > 0) {
                                    while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                        <div class="product__sidebar__view__item set-bg mix month"
                                            data-setbg="../dashboard/admin/<?php echo $data["gambar"] ?>">
                                            <!-- <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div> -->
                                            <h5><a href="anime-details.php?id=<?php echo $data["id"] ?>">
                                                    <?php echo $data["judul_film"] ?>
                                                </a></h5>
                                        </div>
                                        <?php
                                    }
                                }
                                $query = mysqli_query($conn, "SELECT * FROM `film` WHERE FIND_IN_SET('Top Views Year', `tag`) > 0 ORDER BY id ASC LIMIT 2");
                                if (mysqli_num_rows($query) > 0) {
                                    while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                        <div class="product__sidebar__view__item set-bg mix years"
                                            data-setbg="../dashboard/admin/<?php echo $data["gambar"] ?>">
                                            <!-- <div class="ep">
                                <?php echo $data["rating_film"] ?>
                            </div> -->
                                            <h5><a href="anime-details.php?id=<?php echo $data["id"] ?>">
                                                    <?php echo $data["judul_film"] ?>
                                                </a></h5>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Footer Section Begin -->
    <?php include "template/footer.php" ?>
    <!-- Footer Section End -->

    <!-- Search model Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch"><i class="icon_close"></i></div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->

    <!-- Js Plugins -->
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/player.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/mixitup.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../dashboard/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../dashboard/assets/vendor/libs/popper/popper.js"></script>
    <script src="../dashboard/assets/vendor/js/bootstrap.js"></script>
    <script src="../dashboard/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../dashboard/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../dashboard/assets/js/main.js"></script>


</body>

</html>