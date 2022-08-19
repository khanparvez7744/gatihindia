<?php require_once("conn.php"); ?>
<?php $conn = new dbconn();
$pdo= $conn->connect();
?>
<?php require('header.php')?>
<section class="contactSec">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <h1 class="Helvetica-Bold mb-3">Contact US</h1>
            <p class="DropMsg mb-3">Drop A Message</p>
            <form class="row" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="col-sm-12 form-floating mt-3">
                    <input type="text" class="form-control" name="name" id="fname" placeholder="a" required>
                    <label for="fname">Name</label>
                </div>
                <div class="col-sm-6 form-floating mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Please enter email address"
                        required>
                    <label for="email">Email Address</label>
                </div>
                <div class="col-sm-6 form-floating mt-3">
                    <input type="text" class="form-control numberonly" name="phone" id="phone" required
                        placeholder="Please enter phone number" maxlength="10">
                    <label for="phone">Phone Number</label>
                </div>
                <div class="col-sm-12 form-floating mt-3">
                    <textarea class="form-control" name="message" placeholder="Please enter message" id="message"></textarea>
                    <label for="message">Message</label>
                </div>
                <div class="mt-2 mb-4">
                    <button type="submit" name="submit" class="btnGatih">Submit</button>
                </div>
            </form>
            <?php
                if(isset($_POST['submit'])){
                    $name= htmlspecialchars($_POST['name']);
                    $email= htmlspecialchars($_POST['email']);
                    $mobile= htmlspecialchars($_POST['phone']);
                    $msg = htmlspecialchars($_POST['message']);
                    $sql="INSERT INTO contact(name,email,phone,message,created_at) values('$name','$email','$mobile','$msg',NOW())";
                    if($pdo->query($sql)){
                        // Recipient
                        $to = 'care@gatihindia.com, web@sociapa.com';
                        // Sender
                        $from = 'Gatih Foods <no-reply@sociapainfluencer.com>';
                        $fromName = 'Gatihfoods Contact';
                        // Email subject
                        $subject = "New Query From $name";
                        // Email body content
                        $message = "
                            <table style='max-width:600px;width: 100%;'>\r\n\n
                                <tr><td>Name</td><td>:</td><td>".$name."</td></tr>\r\n\n
                                <tr><td>Email Address</td><td>:</td><td>".$email."</td></tr>\r\n\n
                                 <tr><td>Mobile</td><td>:</td><td>".$mobile."</td></tr>\r\n\n
                                 <tr><td>Message</td><td>:</td><td>".$msg."</td></tr>\r\n\n
                                 </table>
                        ";
                        // Header for sender info
                        $headers = "From: $fromName"." <".$from.">";
                        //$headers   .= "Reply-To: ". $email . "\r\n";
                        $headers   .= "MIME-Version: 1.0\r\n";
                        $headers   .= "Content-type: text/html; charset=utf-8\r\n";
                        // $headers   .= "X-Mailer: PHP". phpversion() ."\r\n" ;
                        // Send email
                        $mail = @mail($to, $subject, $message, $headers);
                        if($mail){
            ?>
                        <div class="btn btn-success">Thank You, We will get back you soon...</div>
            <?php  }
                }
            }
            ?>
        </div>
        <div class="col-md-6 col-sm-12">
            <img src="images/phone.jpg" alt="phone" class="img-fluid">
            <div class="d-flex">
                <i class="fa fa-phone fa-2x text-green"></i>
                <p> &nbsp;&nbsp;+91 7838617181, +91 8826007695</p>
            </div>
            <br>
            <div class="d-flex">
                <i class="fa fa-envelope fa-2x text-green"></i>
                <p> &nbsp;&nbsp;care@gatihindia.com</p>
            </div>
            <br>
            <div class="d-flex">
                <i class="fa fa-map-marker fa-2x text-green"></i>
                <p> &nbsp;&nbsp;24th Floor, Alphathum, Tower-B, Sector 90, Noida, UP, 201301</p>
            </div>
        </div>

        <div class="col-sm-12">
            <p class="mt-3 text-justify">You are just a click away from getting all your queries or questions answered!
                Free feel to connect with us and become a part of our family!</p>
        </div>
    </div>
</section>
<section class="mapConSec">
    <div class="row">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d7011.8242344782175!2d77.40697493662516!3d28.512291699043207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sBhutani%20Alphathum%2C%201%20Alphathum%20Towers%2C%20Blossom%20County%2C%20Logix%20Blossom%20County%2C%20Noida%2C%20Uttar%20Pradesh%20201305!5e0!3m2!1sen!2sin!4v1654506855489!5m2!1sen!2sin"
            width="100%" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</section>
<?php require('footer.php')?>