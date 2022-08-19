<?php require_once("conn.php"); ?>
<?php $conn = new dbconn();
$pdo= $conn->connect();
?>
<?php
$sql="SELECT * FROM products";
$result = $pdo->query($sql);
$data = $result->fetchAll();
?>
<?php require('header.php')?>
<section class="prodBnrSec">
    <img src="images/productBanner0.jpg" alt="product" class="img-fluid w-100">
</section>

<section class="popularSec">
    <div class="row">
        <div class="col sm-12 text-center" data-aos="fade-up">
            <h2 class="hdngGatih">Our Products</h2>
            <img src="images/headingLine.png" alt="Heading" class="img-fluid headingLine">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 pt-sm-2">
            <div class="owl-carousel popuProd-carousel" id="popuProd-carousel">
                <?php
                foreach($data as $product) { ?>
            <div class="item">
                    <a href="product-details.php?id=<?php echo $product['id']; ?>" class="text-dark">
                        <img src="images/<?php echo $product['image']; ?>" alt="date" class="img-fluid">
                        <div class="">
                            <div class="float-start">
                                <p class="text-green Helvetica-Bold">NEW</p>
                                <h4 class="Helvetica-Bold"><?php echo $product['title']; ?></h4>
                            </div>

                        </div>
                    </a>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<section class="bestSellSec">
    <div class="row mt-sm-5">
        <div class="col sm-12 text-center">
            <h2 class="hdngGatih">BEST SELLER</h2>
            <img src="images/headingLine.png" alt="Heading" class="img-fluid headingLine">
        </div>
    </div>
    <div class="row mt-sm-3">
        <img src="images/bestSeller.png" alt="dates" class="img-fluid">
    </div>
</section>
<?php require('footer.php')?>