<?php
session_start();
if (!isset($_SESSION['username'])) {
    include './login.php';
    die();
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from myticket_h1.kenzap.com/upcoming-events.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 May 2019 15:47:36 GMT -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Cinema</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/bootstrap-select.min.css">
        <link rel="stylesheet" href="../css/bootstrap-slider.min.css">
        <link rel="stylesheet" href="../css/jquery.scrolling-tabs.min.css">
        <link rel="stylesheet" href="../css/bootstrap-checkbox.css">
        <link rel="stylesheet" href="../css/flexslider.css">
        <link rel="stylesheet" href="../css/featherlight.min.css">
        <link rel="stylesheet" href="../css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/bootstrap.offcanvas.min.css">
        <link rel="stylesheet" href="../css/core.css">
        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="../css/style.css" >
        <link rel="stylesheet" href="../css/responsive.css" >
        <link rel="stylesheet" href="../css/login.css" >


        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                <script src="http://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
                <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <header id="masthead" class="site-header">
            <div class="top-header top-header-bg">
                <div class="container">
                    <div class="row">


                        <div class="top-right">
                            <ul>

                                <li>
                                    <a href="signup.php">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header main-header-bg">
                <div class="container">
                    <div class="row">
                        <div class="site-branding col-md-3">
                            <h1 class="site-title"><a href="#" title="myticket" rel="home"><img src="../images/logo.png" alt="logo"></a></h1>
                        </div>

                        <div class="col-md-9">
                            <nav id="site-navigation" class="navbar">
                                <!-- toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <div class="mobile-cart" ><a href="#">0</a></div>
                                    <button type="button" class="navbar-toggle offcanvas-toggle pull-right" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-offcanvas navbar-offcanvas-touch navbar-offcanvas-right" id="js-bootstrap-offcanvas">
                                    <button type="button" class="offcanvas-toggle closecanvas" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">
                                        <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                                    </button>

                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a href="../homepage.php">Home</a></li>
                                        <li><a href="hall.php">Hall</a></li>
                                        <li><a href="ticket.php">Ticekts</a></li>
                                    </ul>
                                </div>
                            </nav><!-- #site-navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- #masthead -->

        <section class="section-gallery">
            <div class="container">
                <div class="row">
                    <h1> select Your video Here</h1>
                    <div class="gallery-list row">
                        <div class="gallery-img col-xs-6 col-sm-3">
                            <a href="#" data-featherlight="#content-1">
                                <img src="images/gallery-1.jpg" alt="image">
                            </a>
                            <div id="content-1" class="gallery-lightbox">
                                <img src="images/gallery-1.jpg" alt="image">
                                <div class="gallery-lightbox-content">
                                    <h3>WORLD CUP 2014 FINAL: BRAZIL V CHILE</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    <form action="/ticket.php" method="get">
                                        <button type="submit">Submit</button><br>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-img col-xs-6 col-sm-3">
                            <a href="#" data-featherlight="#content-2">
                                <img src="images/gallery-2.jpg" alt="image">
                            </a>
                            <div id="content-2" class="gallery-lightbox">
                                <img src="images/gallery-2.jpg" alt="image">
                                <div class="gallery-lightbox-content">
                                    <h3>WORLD CUP 2014 FINAL: BRAZIL V CHILE</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    <form action="/ticket.php" method="get">
                                        <button type="submit">Submit</button><br>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="gallery-img col-xs-6 col-sm-3">
                            <a href="#" data-featherlight="#content-3">
                                <img src="images/gallery-3.jpg" alt="image">
                            </a>
                            <div id="content-3" class="gallery-lightbox">
                                <img src="images/gallery-3.jpg" alt="image">
                                <div class="gallery-lightbox-content">
                                    <h3>WORLD CUP 2014 FINAL: BRAZIL V CHILE</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    <form action="/ticket.php" method="get">
                                        <button type="submit">Submit</button><br>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="gallery-img col-xs-6 col-sm-3">
                            <a href="#" data-featherlight="#content-4">
                                <img src="images/gallery-4.jpg" alt="image">
                            </a>
                            <div id="content-4" class="gallery-lightbox">
                                <img src="images/gallery-4.jpg" alt="image">
                                <div class="gallery-lightbox-content">
                                    <h3>WORLD CUP 2014 FINAL: BRAZIL V CHILE</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    <form action="/ticket.php" method="get">
                                        <button type="submit">Submit</button><br>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="gallery-img col-xs-6 col-sm-3">
                            <a href="#" data-featherlight="#content-5">
                                <img src="images/gallery-5.jpg" alt="image">
                            </a>
                            <div id="content-5" class="gallery-lightbox">
                                <img src="images/gallery-5.jpg" alt="image">
                                <div class="gallery-lightbox-content">
                                    <h3>WORLD CUP 2014 FINAL: BRAZIL V CHILE</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    <form action="/ticket.php" method="get">
                                        <button type="submit">Submit</button><br>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="gallery-img col-xs-6 col-sm-3">
                            <a href="#" data-featherlight="#content-6">
                                <img src="images/gallery-6.jpg" alt="image">
                            </a>
                            <div id="content-6" class="gallery-lightbox">
                                <img src="images/gallery-6.jpg" alt="image">
                                <div class="gallery-lightbox-content">
                                    <h3>WORLD CUP 2014 FINAL: BRAZIL V CHILE</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    <form action="/ticket.php" method="get">
                                        <button type="submit">Submit</button><br>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-img col-xs-6 col-sm-3">
                            <a href="#" data-featherlight="#content-7">
                                <img src="images/gallery-7.jpg" alt="image">
                            </a>
                            <div id="content-7" class="gallery-lightbox">
                                <img src="images/gallery-7.jpg" alt="image">
                                <div class="gallery-lightbox-content">
                                    <h3>WORLD CUP 2014 FINAL: BRAZIL V CHILE</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    <form action="/ticket.php" method="get">
                                        <button type="submit">Submit</button><br>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="gallery-img col-xs-6 col-sm-3">
                            <a href="#" data-featherlight="#content-8">
                                <img src="images/gallery-8.jpg" alt="image">
                            </a>
                            <div id="content-8" class="gallery-lightbox">
                                <img src="images/gallery-8.jpg" alt="image">
                                <div class="gallery-lightbox-content">
                                    <h3>WORLD CUP 2014 FINAL: BRAZIL V CHILE</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    <form action="/ticket.php" method="get">
                                        <button type="submit">Submit</button><br>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-img col-xs-6 col-sm-3">
                            <a href="#" data-featherlight="#content-9">
                                <img src="images/gallery-9.jpg" alt="image">
                            </a>
                            <div id="content-9" class="gallery-lightbox">
                                <img src="images/gallery-9.jpg" alt="image">
                                <div class="gallery-lightbox-content">
                                    <h3>WORLD CUP 2014 FINAL: BRAZIL V CHILE</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    <form action="/ticket.php" method="get">
                                        <button type="submit">Submit</button><br>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="gallery-img col-xs-6 col-sm-3">
                            <a href="#" data-featherlight="#content-10">
                                <img src="images/gallery-10.jpg" alt="image">
                            </a>
                            <div id="content-10" class="gallery-lightbox">
                                <img src="images/gallery-10.jpg" alt="image">
                                <div class="gallery-lightbox-content">
                                    <h3>WORLD CUP 2014 FINAL: BRAZIL V CHILE</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    <form action="/ticket.php" method="get">
                                        <button type="submit">Book Now</button><br>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="gallery-img col-xs-6 col-sm-3">
                            <a href="#" data-featherlight="#content-11">
                                <img src="images/gallery-11.jpg" alt="image">
                            </a>
                            <div id="content-11" class="gallery-lightbox">
                                <img src="images/gallery-11.jpg" alt="image">
                                <div class="gallery-lightbox-content">
                                    <h3>WORLD CUP 2014 FINAL: BRAZIL V CHILE</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    <button type="button" value="Book" name="book">Book Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-img col-xs-6 col-sm-3">
                            <a href="#" data-featherlight="#content-12">
                                <img src="images/gallery-12.jpg" alt="image">
                            </a>
                            <div id="content-12" class="gallery-lightbox">
                                <img src="images/gallery-12.jpg" alt="image">
                                <div class="gallery-lightbox-content">
                                    <h3>WORLD CUP 2014 FINAL: BRAZIL V CHILE</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    <form action="/ticket.php" method="get">
                                        <button type="submit">Book Now</button><br>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-img col-xs-6 col-sm-3">
                            <a href="#" data-featherlight="#content-13">
                                <img src="images/gallery-13.jpg" alt="image">
                            </a>
                            <div id="content-13" class="gallery-lightbox">
                                <img src="images/gallery-13.jpg" alt="image">
                                <div class="gallery-lightbox-content">
                                    <h3>WORLD CUP 2014 FINAL: BRAZIL V CHILE</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    <form action="/ticket.php" method="get">
                                        <button type="submit">Book Now</button><br>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="gallery-img col-xs-6 col-sm-3">
                            <a href="#" data-featherlight="#content-14">
                                <img src="images/gallery-14.jpg" alt="image">
                            </a>
                            <div id="content-14" class="gallery-lightbox">
                                <img src="images/gallery-14.jpg" alt="image">
                                <div class="gallery-lightbox-content">
                                    <h3>WORLD CUP 2014 FINAL: BRAZIL V CHILE</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    <form action="/ticket.php" method="get">
                                        <button type="submit">Book Now</button><br>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-img col-xs-6 col-sm-3">
                            <a href="#" data-featherlight="#content-15">
                                <img src="images/gallery-15.jpg" alt="image">
                            </a>
                            <div id="content-15" class="gallery-lightbox">
                                <img src="images/gallery-15.jpg" alt="image">
                                <div class="gallery-lightbox-content">
                                    <h3>WORLD CUP 2014 FINAL: BRAZIL V CHILE</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    <form action="/ticket.php" method="get">
                                        <button type="submit">Book Now</button><br>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="gallery-img col-xs-6 col-sm-3">
                            <a href="#" data-featherlight="#content-16">
                                <img src="images/gallery-16.jpg" alt="image">
                            </a>
                            <div id="content-16" class="gallery-lightbox">
                                <img src="images/gallery-16.jpg" alt="image">
                                <div class="gallery-lightbox-content">
                                    <h3>WORLD CUP 2014 FINAL: BRAZIL V CHILE</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    <form action="/ticket.php" method="get">
                                        <button type="submit">Book Now</button><br>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-pagination">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Previous</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li class="active"><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">Next <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <footer id="colophon" class="site-footer">
            <div class="top-footer">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-8 col-md-8">
                            <a href="#"><img src="../images/logo.png" alt="logo"></a>
                        </div>
                        <div class="col-sm-4 col-md-4">

                            <p>lhalilpzetch ALL RIGHTS RESEVED</p>
                        </div>
                    </div>

                </div>
            </div>

        </footer>

        <script src="../js/jquery-3.2.0.min.js"></script>
        <script src="../js/bootstrap-slider.min.js"></script>
        <script src="../js/bootstrap-select.min.js"></script>
        <script src="../js/jquery.scrolling-tabs.min.js"></script>
        <script src="../js/jquery.countdown.min.js"></script>
        <script src="../js/jquery.flexslider-min.js"></script>
        <script src="../js/jquery.imagemapster.min.js"></script>
        <script src="../js/tooltip.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/featherlight.min.js"></script>
        <script src="../js/featherlight.gallery.min.js"></script>
        <script src="../js/bootstrap.offcanvas.min.js"></script>
        <script src="../js/main.js"></script>

    </body>

</html>