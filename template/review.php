<?php
$id = $_GET["id"]; //mendapatkan id
$query = mysqli_query($conn, "SELECT * FROM `ulasan` as u join film as f on f.id=u.ulasan_id where f.id = '$id' ");
?>
<div class="col-lg-12 col-md-12">
    <div class="anime__details__review">
        <div class="section-title">
            <h5>Reviews</h5>
        </div>
                <?php
                if (mysqli_num_rows($query) > 0) {
                    while ($data = mysqli_fetch_array($query)) {
                        ?>
                        <div class="anime__review__item">
                            <div class="anime__review__item__pic">
                                <img src="img/anime/review-1.jpg" alt="">
                            </div>
                            <div class="anime__review__item__text">
                                <h6>
                                    <?php echo $data["nama_ulasan"] ?> <span>
                                        <?php echo $data["tanggal_ulasan"] ?>
                                    </span>
                                </h6>
                                <p>
                                    <?php echo $data["ulasan"] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    }
                ?>
    <div class="anime__details__form">
        <div class="section-title">
            <h5>Your Comment</h5>
        </div>
        <form action="#">
            <input type="text" placeholder=" Your Name"><br><br>
            <textarea placeholder="Your Comment"></textarea>
            <button type="submit"><i class="fa fa-location-arrow"></i> Review</button>
        </form>
    </div>
</div>