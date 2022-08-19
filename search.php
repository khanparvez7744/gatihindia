<?php require_once("conn.php"); ?>
<?php $conn = new dbconn();
$pdo= $conn->connect();
?>
<?php
$getid =1;
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
    </div>
</section>
<?php require('footer.php')?>