<?php 
if($_SERVER['REQUEST_METHOD']=="POST"){
    include 'dbconfig/config.php';
    $name=$_POST['name'];
    $email=$_POST['email'];
    $newsql = "INSERT INTO `newsletter` (`Name`, `Email`, `timestamp`) VALUES ('$name', '$email', current_timestamp());";
    $res=mysqli_query($con,$newsql);

    header('location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bootstrap Footer Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Stylesheet -->
    <link href="footer-4.css" rel="stylesheet">
</head>

<body>
    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="footer-about">
                        <h3>About Us</h3>
                        <p>
                            Our Clinic has grown to provide a world class facility for the clinic advanced restorative.
<br>
                            We are among the most qualified implant providers in the AUS with over 30 years of quality
                            training and experience.
                        </p>
                        <div class="footer-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-contact">
                        <h3>Get In Touch</h3>
                        <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                        <p><i class="fa fa-phone-alt"></i>+91 93104 88674</p>
                        <p><i class="fa fa-envelope"></i>vikas6103@gmail.com</p>
                        <p><i class="far fa-clock"></i>Mon - Fri, 9AM - 10PM</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-links">
                        <h3>Useful Links</h3>
                        <a href="#">ONCOLOGIST</a>
                        <a href="#">NEUROLOGIS</a>
                        <a href="#">ENT SPECIALIST</a>
                        <a href="#">CARDIOLOGIS</a>
                        <a href="#">PSYCHIATRISTS</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="footer-news">
                        <h3>Latest News</h3>
                        <div class="quick-news">
                            <a href=""><img src="images/img/img-1.jpg" alt="Image"></a>
                            <a href="" class="news-txt">
                                <p>Integrative Medicine & Cancer Treatment <br> <small style="opacity: 0.6;">April 4, 2021</small></p>
                            </a>
                        </div>
                        <div class="quick-news">
                            <a href=""><img src="images/img/img-1.jpg" alt="Image"></a>
                            <a href="" class="news-txt">
                                <p>Integrative Medicine & Cancer Treatment <br> <small style="opacity: 0.6;">April 4, 2021</small></p>
                            </a>
                        </div>
                        <div class="quick-news">
                            <a href=""><img src="images/img/img-1.jpg" alt="Image"></a>
                            <a href="" class="news-txt">
                                <p>Integrative Medicine & Cancer Treatment <br> <small style="opacity: 0.6;">April 4, 2021</small></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container footer-newsletter">
            <p>
                subscribe us for get updated and stay tuned with us.
            </p><form action="footer.php" method="post">
            <div class="row">
            <div class="col-sm-4">
                    <input class="form-control text-light" placeholder="Your Name" name="name">
                </div>
                <div class="col-sm-4">
                    <input class="form-control text-light" placeholder="Your Email" name="email">
                </div>
                <div class="col-sm-4">
                    <button class="btn btn-primary">Subscribe</button>
                </div>

           
               
            </div> </form>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="copy-text">
                            <p>&copy; <a href="#">Vikas Developer</a>. All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="copy-menu">
                            <a href="./about.php">About</a>
                            <a href="./terms.php">Terms</a>
                            <a href="./privacy.php">Privacy</a>
                            <a href="./contact.php">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
</body>

</html>