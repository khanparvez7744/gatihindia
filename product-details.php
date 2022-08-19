<?php require_once("conn.php"); ?>
<?php $conn = new dbconn();
$pdo= $conn->connect();
?>
<?php
$getid = $_GET["id"];
$sql="SELECT * FROM products where id=$getid";
$result = $pdo->query($sql);
$data = $result->fetch();
?>
<?php require('header.php')?>
<section class="prodBnrSec">
    <img src="images/<?php echo $data['banner']; ?>" alt="product" class="img-fluid w-100">
</section>
<section class="prodChildSec">
    <div class="row">
        <div class="col-sm-12 mb-sm-5">
            <h1 class="Helvetica-Bold mb-3 text-center"><?php echo $data['title']; ?></h1>
            <p class="text-center"><?php echo $data['description']; ?></p>
        </div>
        <div class="col-sm-5 text-center">
            <img src="images/<?php echo $data['image']; ?>" alt="product" class="img-fluid ruhtabDat">
        </div>
        <div class="col-sm-7">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Nutritional information per 100g</th>
                        <th scope="col">Quantity</th>
                    </tr>
                </thead>
                <tbody>
                <?php echo $data['nutri_info']; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-1 mt-sm-5">
        <div class="col sm-12 text-center">
            <h2 class="hdngGatih">BENEFITS</h2>
            <img src="images/headingLine.png" alt="Heading" class="img-fluid headingLine">
        </div>
    </div>
    <?php
        $sql1="SELECT * FROM benefits where product_id=$getid";
        $result = $pdo->query($sql1);
        $data1 = $result->fetchAll();
    ?>
    <div class="row beneRow">
        <?php
        foreach($data1 as $benefit) { ?>
        <div class="col-sm-3 text-center">
            <img src="images/<?php echo $benefit['image']; ?>" alt="nutritious" class="img-fluid my-3">
            <h5 class="Helvetica-Bold"><?php echo $benefit['title']; ?></h5>
            <p class="mt-2"><?php echo $benefit['description']; ?></p>
        </div>
        <?php } ?>
        <!-- <div class="col-sm-3 text-center">
            <img src="images/fiber.png" alt="fiber" class="img-fluid my-3">
            <h5 class="Helvetica-Bold">High in fiber</h5>
            <p class="mt-2">Getting enough fiber is important for your overall health. With almost 7 grams of fiber in a 3.5-ounce serving, including dates in your diet is a great way to increase your fiber intake. </p>
        </div>
        <div class="col-sm-3 text-center">
            <img src="images/brainHealth.png" alt="brain health" class="img-fluid my-3">
            <h5 class="Helvetica-Bold">May promote brain health </h5>
            <p class="mt-2">Eating dates may help improve brain function. Laboratory studies have found dates to be helpful for lowering inflammatory markers, in the brain. </p>
        </div>
        <div class="col-sm-3 text-center">
            <img src="images/naturalSweetener.png" alt="naturalSweetener" class="img-fluid my-3">
            <h5 class="Helvetica-Bold">Excellent Natural Sweetener</h5>
            <p class="mt-2">Dates are a source of fructose, which is a natural type of sugar found in fruit. For this reason, dates are very sweet and also have a subtle </p>
        </div> -->
    </div>
</section>
<section class="homechefSec">
    <div class="row">
        <div class="col sm-12 text-center" data-aos="fade-up">
            <h2 class="hdngGatih">Our Recipes</h2>
            <img src="images/headingLine.png" alt="Heading" class="img-fluid headingLine">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="owl-carousel recipe-carousel" id="recipe-carouselI">
                <div class="item">
                    <div class="card">
                        <div class="overflow-hidden">
                            <img src="images/datesBarfi.jpg" alt="dates barfi" class="img-fluid">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title Helvetica-Bold">Dates Halwa Burfi</h5>
                            <p class="card-text mb-4">Kesar Pista Rasmalai is one of the yummiest dairy based sweets.
                                Probably,one of the best eggless recipes you can make at home...</p>
                            <a href="#" class="btnGatih">Show More</a>
                        </div>

                    </div>
                </div>
                <div class="item">
                    <div class="card">

                        <div class="overflow-hidden">
                            <img src="images/datesCake.jpg" alt="dates Cake" class="img-fluid">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title Helvetica-Bold">Dates Cake</h5>
                            <p class="card-text mb-4">Dates halwa recipe - rich, delicious halwa made with mawa and
                                dates. Quick and easy sweet recipe to make for celebrations...</p>
                            <a href="#" class="btnGatih">Show More</a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <div class="overflow-hidden">

                            <img src="images/datesSmoothie.jpg" alt="dates smoothie" class="img-fluid">
                        </div>

                        <div class="card-body">
                            <h5 class="card-title Helvetica-Bold">Dates Smoothie</h5>
                            <p class="card-text mb-4">A pancake is a flat cake, often thin and round, prepared from a
                                starch-based batter that may contain eggs, milk ...</p>
                            <a href="#" class="btnGatih">Show More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require('footer.php')?>