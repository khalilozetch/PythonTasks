<?php ?>
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Mirrored from myticket_h1.kenzap.com/homepage-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 May 2019 15:45:15 GMT -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>myticket</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <link rel="stylesheet" href="../../css/bootstrap-select.min.css">
        <link rel="stylesheet" href="../../css/bootstrap-slider.min.css">
        <link rel="stylesheet" href="../../css/jquery.scrolling-tabs.min.css">
        <link rel="stylesheet" href="../../css/bootstrap-checkbox.css">
        <link rel="stylesheet" href="../../css/flexslider.css">
        <link rel="stylesheet" href="../../css/featherlight.min.css">
        <link rel="stylesheet" href="../../css/font-awesome.min.css">
        <link rel="stylesheet" href="../../css/bootstrap.offcanvas.min.css">
        <link rel="stylesheet" href="../../css/core.css">


        <!-- Custom styles for this template -->
        <link rel="stylesheet" href="../../css/style.css" >
        <link rel="stylesheet" href="../../css/responsive.css" >
        <link rel="stylesheet" href="../../"

              <!--[if lt IE 9]>
                      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
                      <script src="http://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
                      <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
              <![endif]-->
    </head>

    <body>
        <header id="masthead" class="site-header fix-header header-1">
            <div class="top-header top-header-bg">
                <div class="container">
                    <div class="row">

                        <div class="top-right">
                            <ul>
                                <?php
                                if (!isset($_SESSION['username'])) {
                                    echo "<li>
							<a href='login.php'>Sign In</a>
						    </li>
						     <li>
						         <a href='signup.php'>Sign Up</a>
						     </li>";
                                } else {
                                    echo "<li>
								 welcome  " . $_SESSION['username'];
                                    echo "</li>
								<li>
									<a href='login.php'>logout</a>
								</li>";
                                }
                                ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-header">
                <div class="container">
                    <div class="row">
                        <div class="site-branding col-md-3">
                            <h1 class="site-title"><a href="homepage-1.html" title="myticket" rel="home"><img src="../../images/logo.png" alt="logo"></a></h1>
                        </div>

                        <div class="col-md-9">
                            <nav id="site-navigation" class="navbar">

                                <div class="navbar-offcanvas navbar-offcanvas-touch navbar-offcanvas-right" id="js-bootstrap-offcanvas">
                                    <button type="button" class="offcanvas-toggle closecanvas" data-toggle="offcanvas" data-target="#js-bootstrap-offcanvas">
                                        <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                                    </button>
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="active"><a href="../../homepage.php">Home</a></li>
                                        <li><a href="../hall.php">Halles</a></li>
                                        <li><a href="../ticket.php">Ticekts</a></li>

                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="section-artist-featured-header">
            <div class="container">
                <div class="section-content">
                    <h1>cinema site</h1>
                    <p>Admin page</p>
                </div>
            </div>
        </section>

        <section class="section-artist-page-header">
            <div class="container">
                <h1 class="entry-title">Welcome To Admine Page</h1>
            </div>
        </section>

        <section class="section-artist-content">
            <div class="container">
                <div class="artist-event-item">
                    <h1 class="entry-title">Employee Table</h1>

                    <div class="artist-event-item-price col-sm-3">

                        <a href="insertemp.php">Insert Now</a>
                    </div>

                    <div class="artist-event-item-price col-sm-3">

                        <a href="editemp.php">Show Data</a>
                    </div>
                </div>
            </div>

                <div class="container">
                    <div class="artist-event-item">
                        <h1 class="entry-title">customer Table</h1>

                        <div class="artist-event-item-price col-sm-3">

                            <a href="#">Insert Now</a>
                        </div>

                        <div class="artist-event-item-price col-sm-3">

                            <a href="editcustomer.php">Show Data</a>
                        </div>
                    </div>
                    <div class="container">
                        <div class="artist-event-item">
                            <h1 class="entry-title">Employee Table</h1>

                            <div class="artist-event-item-price col-sm-3">

                                <a href="insertemp.php">Insert Now</a>
                            </div>

                            <div class="artist-event-item-price col-sm-3">

                                <a href="updateemp.php">Show Data</a>
                            </div>
                        </div>
                        </div>
                        <div class="container">
                            <div class="artist-event-item">
                                <h1 class="entry-title">Employee Table</h1>

                                <div class="artist-event-item-price col-sm-3">

                                    <a href="insertemp.php">Insert Now</a>
                                </div>

                                <div class="artist-event-item-price col-sm-3">

                                    <a href="updateemp.php">Show Data</a>
                                </div>
                            </div>

                            <div class="container">
                                <div class="artist-event-item">
                                    <h1 class="entry-title">Employee Table</h1>

                                    <div class="artist-event-item-price col-sm-3">

                                        <a href="insertemp.php">Insert Now</a>
                                    </div>

                                    <div class="artist-event-item-price col-sm-3">

                                        <a href="updateemp.php">Show Data</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>
        <footer id="colophon" class="site-footer">
            <div class="top-footer">
                <div class="container">
                    <div class="row">

                        <div class="col-md-8">
                            <a href="#"><img src="images/logo.png" alt="logo"></a>
                        </div>
                        <div class="col-md-4">

                            <p>&copy; khaliklozetch ALL RIGHTS RESEVED</p>
                        </div>
                    </div>

                </div>
            </div>

        </footer>

        <script src="../../js/jquery-3.2.0.min.js"></script>
        <script src="../../js/bootstrap-slider.min.js"></script>
        <script src="../../js/bootstrap-select.min.js"></script>
        <script src="../../js/jquery.scrolling-tabs.min.js"></script>
        <script src="../../js/jquery.countdown.min.js"></script>
        <script src="../../js/jquery.flexslider-min.js"></script>
        <script src="../../js/jquery.imagemapster.min.js"></script>
        <script src="../../js/tooltip.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        <script src="../../js/featherlight.min.js"></script>
        <script src="../../js/featherlight.gallery.min.js"></script>
        <script src="../../js/bootstrap.offcanvas.min.js"></script>
        <script src="../../js/main.js"></script>


    </body>

    <!-- Mirrored from myticket_h1.kenzap.com/homepage-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 May 2019 15:45:44 GMT -->
</html>