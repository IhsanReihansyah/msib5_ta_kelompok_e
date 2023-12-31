<?php
session_start();

if (isset($_SESSION['isUserLogin']) != true) {
    header("Location: awal.php");
    exit();
}
include 'koneksi.php';

$id = $_GET["id"]; //mendapatkan id
$query = mysqli_query($conn, "SELECT f.id,f.judul_film,f.tahun_rilis,f.sinopsis,f.id_kategori,f.id_sutradara,f.genre,f.genre,f.nama_pemain,f.gambar,u.ulasan,u.ulasan_rating,u.tanggal_ulasan,k.kategori,s.nama_sutradara, AVG(ulasan_rating) AS avg_rating
                              FROM `film` as f
                              JOIN kategori as k on f.id_kategori=k.id_kategori
                              JOIN sutradara as s on s.id_sutradara=f.id_sutradara
                              JOIN ulasan as u on u.ulasan_id=f.id
                              WHERE f.id = '$id'");
$data = mysqli_fetch_array($query);

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dream Movie</title>

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
    <style>
        .anime__details__btn {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            /* Menggunakan flex-start untuk tetap dekat satu sama lain */
        }

        #likeForm {
            display: flex;
            align-items: center;
        }

        #likeButton {
            margin-right: 30px;
            background: none;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        #likeButton i {
            font-size: 24px;
            color: red;
            margin-right: 5px;
            /* Jarak antara ikon hati dan teks */
        }

        #facebookBtn {
            display: inline-block;
            background-color: #3b5998;
            /* Warna biru Facebook */
            color: #ffffff;
            /* Warna teks putih */
            text-decoration: none;
            padding: 10px 20px;
            /* Sesuaikan padding sesuai kebutuhan */
            border-radius: 5px;
            /* Untuk sudut yang melengkung */
            font-size: 19px;
            margin-left: 25px;
            /* Sesuaikan propertinya sesuai kebutuhan */
        }

        #facebookBtn i {
            margin-right: 8px;
            /* Jarak antara ikon dan teks */
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Header Section Begin -->
    <?php include "template/navbar.php" ?>
    <!-- Header End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                        <a href="./kategori.php">Movie</a>
                        <span>
                            <?php echo $data["judul_film"] ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="anime__details__pic set-bg"
                            data-setbg="../dashboard/admin/<?php echo $data["gambar"] ?>">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3>
                                    <?php echo $data["judul_film"] ?>
                                </h3>
                            </div>
                            <div class="anime__details__rating">
                                <span> Rate
                                    <?php $averagerating = floatval(str_replace(',', '', $data["avg_rating"]));
                                    $formattedRating = number_format($averagerating, 1);
                                    echo $formattedRating ?> / 10
                                </span>
                            </div>
                            <p>
                                <?php echo $data["sinopsis"] ?>
                            </p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Genre:</span>
                                                <?php echo $data["genre"] ?>
                                            </li>
                                            <li><span>Negara:</span>
                                                <?php echo $data["kategori"] ?>
                                            </li>
                                            <li><span>Tahun:</span>
                                                <?php echo $data["tahun_rilis"] ?>
                                            </li>
                                            <li><span>Sutradara:</span>
                                                <?php echo $data["nama_sutradara"] ?>
                                            </li>
                                            <li><span>Pemain:</span>
                                                <?php echo $data["nama_pemain"] ?>
                                            </li>
                                            <li><span>Like:</span>
                                                <?php
                                                $filmId = $data["id"];
                                                $countLikesQuery = mysqli_query($conn, "SELECT COUNT(*) as totalLikes FROM film_like WHERE film_id = '$filmId'");
                                                $likesData = mysqli_fetch_assoc($countLikesQuery);

                                                if ($likesData && isset($likesData['totalLikes'])) {
                                                    echo $likesData['totalLikes'];
                                                } else {
                                                    echo 'Belum ada like.';
                                                }
                                                ?>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <?php
                            // Mengambil judul_film dari tabel film
                            $judul_films = $data["judul_film"];

                            // Mengolah judul_film agar menjadi URL
                            $url = strtolower(str_replace(' ', '-', $judul_films));


                            $idUser = $_SESSION['userId'];
                            $check_like_query = mysqli_query($conn, "SELECT * FROM film_like WHERE film_id = '$id' AND user_id = '$idUser'");
                            $user_has_liked = mysqli_num_rows($check_like_query) > 0;
                            ?>

                            <div class="anime__details__btn">
                                <form action="proses_like.php" method="post" id="likeForm">
                                    <input type="hidden" name="filmId" value="<?php echo $data['id']; ?>">
                                    <input type="hidden" name="userId" value="<?php echo $user_id; ?>">
                                    <button type="submit" name="likeAction" id="likeButton">
                                        <?php if ($user_has_liked): ?>
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        <?php else: ?>
                                            <i class="fa fa-heart-o" aria-hidden="true"></i>
                                        <?php endif; ?>
                                        <?php echo ($user_has_liked) ? '' : ''; ?>
                                    </button>
                                </form>
                                <a href="anime-watching.php?id=<?php echo $data["id"] ?>" class="watch-btn">
                                    <span>Watch Now</span>
                                </a>

                                <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2FDreamMovie.com%2F<?= $url ?>"
                                    target="_blank" rel="noopener noreferrer" id="facebookBtn" class="facebook">
                                    <i class="fa fa-facebook-square"></i> Facebook
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <div class="trending__product">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8"><br>
                                    <div class="section-title">
                                        <h4>Lihat Film dari negara yang sama</h4>
                                    </div>
                                </div>
                            </div>
                            <?php
                            $kategori_id = $data["id_kategori"];
                            $related_query = mysqli_query($conn, "SELECT id, judul_film, gambar, genre FROM `film` WHERE id_kategori = '$kategori_id' AND id != '$id' LIMIT 3");
                            ?>
                            <div class="row">
                                <?php
                                if (mysqli_num_rows($related_query) > 0) {
                                    while ($related_data = mysqli_fetch_array($related_query)) {
                                        ?>
                                        <div class="col-lg-4 col-md-6 col-sm-6">
                                            <div class="product__item">
                                                <div class="product__item__pic set-bg"
                                                    data-setbg="../dashboard/admin/<?php echo $related_data["gambar"] ?>">
                                                    <div class="comment">
                                                        <?php echo $related_data["genre"] ?>
                                                    </div>
                                                </div>
                                                <div class="product__item__text">
                                                    <h5><a href="anime-details.php?id=<?php echo $related_data["id"] ?>">
                                                            <?php echo $related_data["judul_film"] ?>
                                                        </a></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>

                        <?php
                        include "template/review.php";
                        ?>

                        <div class="anime__details__form">
                            <div class="section-title">
                                <h5>write your review</h5>
                            </div>
                            <form action="template/proses_review.php" method="post">
                                <input type="hidden" value="<?php echo $id ?>" name="ulasan_id">
                                <select name="ulasan_rating">
                                    <option value="1">1/10</option>
                                    <option value="2">2/10</option>
                                    <option value="3">3/10</option>
                                    <option value="4">4/10</option>
                                    <option value="5">5/10</option>
                                    <option value="6">6/10</option>
                                    <option value="7">7/10</option>
                                    <option value="8">8/10</option>
                                    <option value="9">9/10</option>
                                    <option value="10">10/10</option>
                                </select><br><br><br>
                                <textarea placeholder="Your Comment" name="ulasan"></textarea>


                                <button type="submit" name="simpan"><i class="fa fa-location-arrow"></i> Review</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Anime Section End -->

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