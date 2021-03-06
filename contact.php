<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>InFamous Photography</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Quantico:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    
    
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
   

    <!-- Header Section Begin -->
    <header class="header-section header-normal">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo">
                        <a href="./index.php">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                    <nav class="nav-menu mobile-menu">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li><a href="./services.php">Services</a></li>
                            <li><a href="./blog.php">Blog</a></li>
                            <li><a href="./gallery.php">Gallery</a></li>
                            <li class="active"><a href="./contact.php">Contact</a></li>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bo-links">
                        <a href="./index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Section Begin -->
    
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact-text">
                        <h3>GET IN TOUCH WITH US!</h3>
                        <p>Contact us for professional guidance and support</p>
                        <div class="ct-item">
                            <div class="ct-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="ct-text">
                                <h5>ADDRESS</h5>
                                <p>221B Bakers Street, London</p>
                            </div>
                        </div>
                        <div class="ct-item">
                            <div class="ct-icon">
                                <i class="fa fa-mobile"></i>
                            </div>
                            <div class="ct-text">
                                <h5>PHONE</h5>
                                <ul>
                                    <li>9167404044</li>
                                </ul>
                            </div>
                        </div>
                        <div class="ct-item">
                            <div class="ct-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="ct-text">
                                <h5>EMAIL-ID</h5>
                                <p>divyeshrmistry@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact-form">
                        <h3>WANNA WORK WITH OUR ESTEEMED ORG.</h3>
                        <form method="post">
                            <input type="text" placeholder="Name" name="name" id="name">
                            <input type="text" placeholder="Email" name="email" id="email">
                            <input type="text" placeholder="Website" name="website" id="wesite">
                            <textarea placeholder="Message" name="msg" id="msg"></textarea>
                            <button type="submit" class="site-btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
        <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="fs-about">
                        <div class="logo">
                                <img src="img/logo.png">
                            </a>
                        </div>
                        <p>Follow me on social media</p>
                        <div class="fa-social">
                            <a href="https://www.facebook.com/divyesh.mistry.3576" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="https://twitter.com/explore" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.linkedin.com/in/divyesh-mistry0406/" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                            <a href="https://www.instagram.com/divyesh0406/" target="_blank"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>    
    </footer>
    <!-- Footer Section End -->
   
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    
    <!-- PHP DATABASE LINKING -->
<?php

$con = mysqli_connect('127.0.0.1', 'root', '', 'infamous');

$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$website = isset($_POST['website']) ? $_POST['website'] : '';
$msg = isset($_POST['msg']) ? $_POST['msg'] : '';

$sql = "INSERT INTO photography(name, email, website, msg) 
         VALUES ('$name', '$email','$website','$msg')";

if(mysqli_query($con, $sql))
{
    echo "Records added successfully.";
}
 else
 {
    echo "ERROR";
 }
mysqli_close($con);
?>

</body>
</html>