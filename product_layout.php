<?php
require('inc/db.php');
?>

<?php include('inc/_header.php') ?>


<div class="container-fluid mt-5 pt-5">
    <div class="row">
        <div class="col-2">
            <div class="list-group" id="list-tab" role="tablist">
                <?php include('load_product/load_menu.php') ?>
            </div>
        </div>
        <div class="col-10">
            <div class="tab-content" id="nav-tabContent">
                <?php include('load_product/load_product.php') ?>
                
            </div>
        </div>
    </div>
</div>

<?php include('inc/_footer.php') ?>