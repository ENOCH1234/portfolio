<!-- Set active for header color -->
<?php
$state3 = "active";
$state5 = "active";
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="Olayode Enoch">
    <!-- Meta Description -->
    <meta name="description" content="Reach out to Enoch Olayode and know about his passion, mission, or contact him for a job, contract, or church media setup, webinar, workshop or just talk with him about the gospel.">
    <!-- Meta Keyword -->
    <meta name="keywords" content="Olayode Enoch, Enoch Olayode, Website Design, Website Building, Website Development, Olayode Enoch Website, Olayode Enoch's Website, Olayode Enoch Oladapo, Oladapo Enoch Olayode, Who is Enoch Olayode, Olayode Enoch Promo Sale, Olayode Enoch Portfolio, Contact Olayode Enoch, Contact Enoch Olayode">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Contact Me | Olayode Enoch Oladapo</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900" rel="stylesheet">
    <!--
			CSS
			============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>

    <!-- Start Header Area -->
    <?php include("includes/header.php"); ?>
    <!-- End Header Area -->

    <!-- start banner Area -->
    <section class="banner-area relative">
        <div class="container">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Contact Me
                    </h1>
                    <p class="link-nav">
                        <span class="box">
                            <a href="./">Home </a>
                            <a href="#">Contact</a>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End banner Area -->

    <!-- Start contact-page Area -->
    <section class="contact-page-area section-gap-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 d-flex flex-column address-wrap">
                    <div class="single-contact-address d-flex flex-row">
                        <a href="#map1">
                            <div class="icon">
                                <span class="lnr lnr-home"></span>
                            </div>
                            <div class="contact-details">
                                <h5>King's Villa, Adefarati Street,</h5>
                        </a>
                        <p>
                            Adekunle Ajasin University, Akungba Akoko, Ondo State, Nigeria.
                        </p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <a href="tel:+23408074303908"><span class="lnr lnr-phone-handset"></span></a>
                    </div>
                    <div class="contact-details">
                        <a href="tel:+23408074303908">
                            <h5>+234 (0)80 743 039 08</h5>
                        </a>
                        <p>Mon to Fri 8am to 5pm</p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <a href="mailto:olayodeenoch@gmail.com"><span class="lnr lnr-envelope"></span></a>
                    </div>
                    <div class="contact-details">
                        <a href="mailto:support@olayodeenoch.com">
                            <h5>olayodeenoch@gmail.com</h5>
                        </a>
                        <p>Send me your query anytime!</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <form class="form-area " id="myForm" action="functions/mail.php" method="post" class="contact-form text-right">
                    <div class="row">
                        <div class="col-lg-6 form-group form-group-top">
                            <input name="fname" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

                            <input name="phone" placeholder="Enter your phone number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your phone number'" class="common-input mb-20 form-control" required="" type="text">

                            <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                            <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
                        </div>
                        <div class="col-lg-6 form-group">
                            <textarea class="common-textarea form-control" name="message" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required=""></textarea>
                        </div>
                        <div class="col-lg-12">
                            <div class="alert-msg" style="text-align: left;"></div>

                            <button class="primary-btn" style="float: right;" data-text="Send Message">
                                <span>S</span>
                                <span>e</span>
                                <span>n</span>
                                <span>d</span>
                                <span> </span>
                                <span>M</span>
                                <span>e</span>
                                <span>s</span>
                                <span>s</span>
                                <span>a</span>
                                <span>g</span>
                                <span>e</span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-12" id="map1">
                <div class="map-wrap" style="width:100%; height: 445px;"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3337.744638337483!2d5.747772714249778!3d7.482307194602661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104634a88357e003%3A0xa221e25abad811a0!2sAdekunle%20Ajasin%20University!5e1!3m2!1sen!2sng!4v1638870366553!5m2!1sen!2sng" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
            </div>
        </div>
        </div>
    </section>
    <!-- End contact-page Area -->
    <br><br><br><br><br><br><br><br>
    <!-- start footer Area -->
    <?php include("includes/footer.php"); ?>
    <!-- End footer Area -->

    <!-- ####################### Start Scroll to Top Area ####################### -->
    <div id="back-top">
        <a title="Go to Top" href="#">
            <i class="lnr lnr-arrow-up"></i>
        </a>
    </div>
    <!-- ####################### End Scroll to Top Area ####################### -->

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/hoverIntent.js"></script>
    <script src="js/superfish.min.js"></script>
    <script src="js/mn-accordion.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/jquery.circlechart.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
