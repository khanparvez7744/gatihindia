<?php require_once("conn.php"); ?>
<?php $conn = new dbconn();
$pdo= $conn->connect();
?>
<footer>
    <section class="footer-top">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-6 menuCol">
                <ul>
                    <li><a href="contact.php">CONTACT US</a></li>
                    <li><a href="privacy.php">PRIVACY POLICY</a></li>
                    <li><a href="terms.php">TERMS & CONDITIONS</a></li>
                    <li><a href="sitemap.php">SITEMAP</a></li>
                </ul>
            </div>
            <div class="col-lg-5 col-md-3 col-sm-6 text-center">
                <img src="images/gathiLogoCircle.png" alt="Logo" class="img-fluid gathiLogoCircle">
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h3 class="BebasKai mt-0 mt-sm-4 mt-xl-2 mt-md-0">Stay Connected</h3>
                <p class="my-3">We aim to become your best buddies, feel free to connect and fill us with your queries,
                    suggestion or love!
                </p>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="d-flex">
                    <input type="email" placeholder="E-MAIL ADDRESS" class="form-control" required
                        name="email">
                    <button type="submit" name="submit" class="btn">SUBSCRIBE</button>
                </form>
                <?php
                     if(isset($_POST['submit'])){
                        $email= htmlspecialchars($_POST['email']);
                        $sql="INSERT INTO subscribers(emails,created_at) values('$email',NOW())";
                    if($pdo->query($sql)){
                ?>
                <div class="btn btn-info">Thank you for subscribing our Newslatter!</div>
                <?php
                } }
                ?>
                <ul class="socialUl">
                    <li>
                        <a href="#">
                            <img src="images/facebook.png" alt="facebook" class="img-fluid">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/instagram.png" alt="instagram" class="img-fluid">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/twitter.png" alt="twitter" class="img-fluid">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="images/whatsapp.png" alt="whatsapp" class="img-fluid">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="footer-bottom text-center py-2">
        <h6>© 2022 Gatih Foods Pvt. Ltd. All Rights Reserved. Developed by <a href="https://www.sociapa.com/"
                target="_blank" class="text-decoration-none text-white">Sociapa.</a></h6>
    </section>
</footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="js/script.js"></script>
<script>
    AOS.init();
</script>
</body>

</html>