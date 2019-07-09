<?php
require('inc/db.php');
?>

<?php include('inc/_header.php') ?>

<div class="container-fluid carousel">
    <div id="carouselExampleIndicators" class="carousel slide justify-content-center" data-ride="carousel">
        <div class="carousel-inner">
            <?php include('carousel/load_carousel.php') ?>
        </div>
    </div>
</div>



<div class="container mt-5" id="best-seller">
    <div class="card-header text-white rounded bg-dark">
        <strong class="font-weight-bold text-white lead">Best - Seller</strong>
    </div>
    <?php include('carousel/load_video.php') ?>
</div>
<div class="container mt-5" id="top-choice">
    <div class="card-header text-white rounded bg-dark">
        <strong class="font-weight-bold text-white lead">Top Choice</strong>
    </div>
    <div class="row">
        <?php include('top_choice/top_choice.php') ?>
    </div>
</div>

<div class="container">
    <!-- <h1 class="my-4 font-weight-bold">TiDi ◎ Store</h1> -->
</div>
<?php include('inc/_footer.php') ?>