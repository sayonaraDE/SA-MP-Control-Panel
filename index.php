<?php
session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"><![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"><![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"><![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>HAGAKURE's Reallife Server</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <!-- CSS Global -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/plugins/superfish/css/superfish.css" rel="stylesheet">
    <link href="assets/plugins/prettyPhoto/css/prettyPhoto.css" rel="stylesheet">
    <link href="assets/plugins/animate.css" rel="stylesheet">
    <link href="assets/plugins/countdown/jquery.countdown.css" rel="stylesheet">
    <link href="assets/plugins/isotope/jquery.isotope.css" rel="stylesheet">
    <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet">

    <link href="assets/css/theme.css" rel="stylesheet">
    <link href="assets/css/theme-blue.css" rel="stylesheet" id="css-switcher-link">

    <!--[if lt IE 9]>
    <script src="assets/plugins/html5shiv.js"></script>
    <script src="assets/plugins/respond.min.js"></script>
    <![endif]-->

</head>
<body id="home" class="wide">

<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-cog fa-spin"></i></div>
</div>

<!-- Wrap all content -->
<div class="wrapper">

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- form -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Login</h4>
            </div>
            <div class="modal-body">
				<h3>Logge dich mit deinem Account ein!</h3>
                <form name="regitration" method="POST" action="check.php" class="af-form" id="af-form-rf">

                    <div class="af-outer af-required">
                        <div class="form-group af-inner">
                            <input type="text" name="username" id="name-rf" size="30" value="" placeholder="Nickname" class="form-control placeholder" />
                            <label class="error" for="name-rf" id="name_error_rf">Benutzername benötigt!</label>
                        </div>
                    </div>

                    <div class="af-outer af-required">
                        <div class="form-group af-inner">
                            <input type="password" name="password" id="phone-rf" size="30" value="" placeholder="Password" class="form-control placeholder" />
                            <label class="error" for="phone-rf" id="phone_error_rf">Passwort benötigt!</label>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-theme-sm btn-theme" data-dismiss="modal">Close</button>
				<!-- <a class="btn btn-theme-sm btn-theme btn-theme-primary" href="account/">Old Member?</a> -->
                <button class="btn btn-theme-sm btn-theme btn-theme-primary">Login</button>
            </div>
			</form>
            <!-- /form -->
        </div>
    </div>
</div>

    <!-- Header -->
    <header class="header">
        <div class="container">

            <!-- Logo -->
            <div class="logo">
                <a href="#home" class="scroll-to"><img src="assets/img/logo-eventme.png" alt="HAGAKURE'S Reallife Server"/></a>
            </div>
            <!-- /Logo -->

            <!-- Navigation -->
            <div id="mobile-menu"></div>
            <nav class="navigation clearfix">
                <ul class="sf-menu nav">
                    <li class="active"><a href="#home">Home</a></li>
                    <li><a href="#">Forum</a></li>
                    <li><a href="#UCP">UCP</a></li>
                    <li><a href="banlist.php">Banned List</a></li>
                    <li><a href="playerlist.php">Online Players</a></li>
                </ul>
            </nav>
            <!-- /Navigation -->

        </div>
    </header>
    <!-- /Header -->

    <!-- Content area-->
    <div class="content-area content">

        <!-- Main Slider -->
        <section class="page-section slider">
            <div class="container">

                <div class="main-slider">

                    <div id="event-slider" class="clearfix">

                        <div class="item slide slide1 full-width-slide div-table">
                            <div class="slide-image"></div>
                            <div class="slide-caption div-cell">
                                <div class="slide-caption-inner">
                                    <h1 class="slide-title">Welcome</h1>
                                    <h3 class="slide-subtitle">CZ California Cops and Robbers</small></h3>
									<?php
									if(!isset($_SESSION['playername']))
									{
									?>
                                    <a class="btn btn-theme btn-theme-primary slide-btn" data-toggle="modal" data-target="#myModal" id="UCP" href="#">login to UCP now!</a>
									<?php
									}
									else
									{
									?>
									<a class="btn btn-theme btn-theme-primary slide-btn" data-toggle="modal" data-target="#myModal" id="UCP" href="ucp.php">My ucp</a>
									<?php
									}
									?>
                                </div>
                            </div>
                        </div>

                        <div class="item slide slide2 alternate div-table">
                            <div class="slide-image"></div>
                            <div class="slide-caption div-cell">
                                <div class="container">
                                    <div class="slide-caption-inner">
                                        <h1 class="slide-title">We Have Features</h1>
                                        </a><h3 class="slide-subtitle">Come and Join Now!</h3>
                                        <a class="btn btn-theme btn-theme-primary slide-btn" id="UCP" href="samp://91.121.164.164:7917">Join Server!</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- /Main Slider -->

        <!-- Feature -->
        <section class="page-section" id="about">
            <div class="container">
                <!-- <hr class="page-divider half"/> -->
                <div class="row">
                    <div class="col-sm-6 col-md-3 feature">
                        <div class="media" data-animation="fadeInUp" data-animation-delay="100">
                            <div class="media-object fa fa-calendar"></div>
                            <div class="media-body">
                                <h4 class="media-heading">Great Event System</h4>
                                <p>We have lots of event system, to make players much happier.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 feature">
                        <div class="media" data-animation="fadeInUp" data-animation-delay="300">
                            <div class="media-object fa fa-map-marker"></div>
                            <div class="media-body">
                                <h4 class="media-heading">San Fierro Upgraded</h4>
                                <p>Our server map is professionally mapped by professional mapper.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 feature">
                        <div class="media" data-animation="fadeInUp" data-animation-delay="500">
                            <div class="media-object fa fa-microphone"></div>
                            <div class="media-body">
                                <h4 class="media-heading">Professional Administrator</h4>
                                <p>We have professional administrators, that can help you with everything on server.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 feature">
                        <div class="media" data-animation="fadeInUp" data-animation-delay="500">
                            <div class="media-object fa fa-users"></div>
                            <div class="media-body">
                                <h4 class="media-heading">Big Playerbase</h4>
                                <p>Our server listed on hosted list, so don't worry to feel lonely.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center" data-animation="fadeInUp" data-animation-delay="200">
                    <a class="btn btn-theme" href="samp://91.121.164.164:7917">Come and Join Now!</a>
                </div>
            </div>

        </section>
        <!-- /Feature -->

        <!-- Our Team -->
        <section class="page-section speackers" id="speackers">
            <div class="container">
                <h3 class="section-title text-center" data-animation="fadeInUp" data-animation-delay="0">Our Team<small></small></h3>
                <div class="row">

                    <div class="col-sm-6 col-md-3" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="thumbnail do-up no-border">
                            <img src="assets/img/preview/team.png" class="img-responsive" alt="">
                            <div class="caption">
                                <div class="caption-wrapper div-table">
                                    <div class="caption-inner div-cell">
                                        <h4 class="caption-title">Shourya</h4>
                                        <p class="caption-category"><a href="#">Owner</a></p>
                                        <p class="caption-buttons">
                                            <a href="#" class="btn caption-social"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="btn caption-social"><i class="fa fa-google-plus"></i></a>
                                            <a href="#" class="btn caption-social"><i class="fa fa-facebook"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="thumbnail do-up no-border">
                            <img src="assets/img/preview/team.png" class="img-responsive" alt="">
                            <div class="caption">
                                <div class="caption-wrapper div-table">
                                    <div class="caption-inner div-cell">
                                        <h4 class="caption-title">X337</h4>
                                        <p class="caption-category"><a href="#">Programmer</a></p>
                                        <p class="caption-buttons">
                                            <a href="#" class="btn caption-social"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="btn caption-social"><i class="fa fa-google-plus"></i></a>
                                            <a href="#" class="btn caption-social"><i class="fa fa-facebook"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="thumbnail do-up no-border">
                            <img src="assets/img/preview/team.png" class="img-responsive" alt="">
                            <div class="caption">
                                <div class="caption-wrapper div-table">
                                    <div class="caption-inner div-cell">
                                        <h4 class="caption-title">ZAP</h4>
                                        <p class="caption-category"><a href="#">Forum Developer</a></p>
                                        <p class="caption-buttons">
                                            <a href="#" class="btn caption-social"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="btn caption-social"><i class="fa fa-google-plus"></i></a>
                                            <a href="#" class="btn caption-social"><i class="fa fa-facebook"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="thumbnail do-up no-border">
                            <img src="assets/img/preview/team.png" class="img-responsive" alt="">
                            <div class="caption">
                                <div class="caption-wrapper">
                                    <div class="caption-inner">
                                        <h4 class="caption-title">CZCNR Team</h4>
                                        <p class="caption-category"><a href="#">Management</a></p>
										<div class="post-excerpt">All CZCNR admin staff, especially Wolverine, XFlow, Tah.</div>
                                        <p class="caption-buttons">
                                            <a href="#" class="btn caption-social"><i class="fa fa-twitter"></i></a>
                                            <a href="#" class="btn caption-social"><i class="fa fa-google-plus"></i></a>
                                            <a href="#" class="btn caption-social"><i class="fa fa-facebook"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- /Our Team -->

        <!-- Price Table -->
        <section class="page-section" id="price">
            <div class="container">
                <h3 class="section-title text-center">Donate our server and get VIP <small>VIP will get more of features, and more lots of fun.</small></h3>
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="price-table">
                            <div class="price-table-header">
                                <div class="price-label">
                                    <h3 class="price-label-title">Basic VIP</h3>
                                </div>
                                <div class="price-value">
                                    <span class="price-unit">$</span><span class="price-number">5</span><span class="price-per"> / month</span>
                                    <small>You'll get VIP status in-game and forums</small>
                                </div>
                            </div>
                            <div class="price-table-rows">
                                <div class="price-table-row">One Free House</div>
                                <div class="price-table-row">Have access to VIP Lounge</div>
                                <div class="price-table-row">More Commands</div>
                                <div class="price-table-row">+3 Tokens & +$1,000,000 In-game money</div>
                                <div class="price-table-row"><small>Much More...</small></div>
                                <div class="price-table-row-bottom">
                                    <a class="btn btn-theme btn-theme-invert" href="#">Donate</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="price-table">
                            <div class="price-table-header">
                                <div class="price-label">
                                    <h3 class="price-label-title">Silver VIP</h3>
                                </div>
                                <div class="price-value">
                                    <span class="price-unit">$</span><span class="price-number">7</span><span class="price-per"> / month</span>
                                    <small>You'll get VIP status in-game and forums</small>
                                </div>
                            </div>
                            <div class="price-table-rows">
                                <div class="price-table-row">One Free House and Vehicle</div>
                                <div class="price-table-row">More slots for Vehicle & House</div>
                                <div class="price-table-row">One Free Garage</div>
                                <div class="price-table-row">Have Access to buy VIP Vehicle</div>
                                <div class="price-table-row">+5 Tokens & +$3,000,000 In-game money</div>
								<div class="price-table-row"><small>Much More...</small></div>
                                <div class="price-table-row-bottom">
                                    <a class="btn btn-theme btn-theme-invert" href="#">Donate</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="price-table">
                            <div class="price-table-header">
                                <div class="price-label">
                                    <h3 class="price-label-title">GOLD VIP</h3>
                                </div>
                                <div class="price-value">
                                    <span class="price-unit">$</span><span class="price-number">10</span><span class="price-per"> / month</span>
                                    <small>You'll get VIP status in-game and forums</small>
                                </div>
                            </div>
                            <div class="price-table-rows">
                                <div class="price-table-row">Two Free Houses, Garages, and Cars</div>
                                <div class="price-table-row">Free toys</div>
                                <div class="price-table-row">Lots of new commands</div>
                                <div class="price-table-row">Premium gang color</div>
                                <div class="price-table-row">Score Booster</div>
								<div class="price-table-row"><small>and much Much More...</small></div>
                                <div class="price-table-row-bottom">
                                    <a class="btn btn-theme btn-theme-invert" href="#">Donate</a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Price Table -->
    </div>
    <!-- /Content area -->

    <!-- Footer -->
    <footer class="footer">

        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center social-icons">
                    <a class="social-icon" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="social-icon" href="#"><i class="fa fa-twitter"></i></a>
                </div>
                <div class="col-sm-12 text-center">&copy; 2015 CZCNR — CZ California Cops and Robbers | Developed by <a href="http://facebook.com/bondowocopz">X337</a></div>
            </div>
        </div>

    </footer>
    <!-- /Footer -->

    <div class="totop"><i class="fa fa-angle-up"></i></div>

</div>
<!-- /wrapper -->

<!-- JS Global -->
<script src="assets/plugins/jquery.min.js"></script>
<script src="assets/plugins/jquery-migrate.min.js"></script>
<script src="assets/plugins/modernizr.custom.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/superfish/js/superfish.js"></script>
<script src="assets/plugins/prettyPhoto/js/jquery.prettyPhoto.js"></script>
<script src="assets/plugins/placeholdem.min.js"></script>
<script src="assets/plugins/ajax-mail.js"></script>
<script src="assets/plugins/countdown/jquery.plugin.min.js"></script>
<script src="assets/plugins/countdown/jquery.countdown.min.js"></script>
<script src="assets/plugins/isotope/jquery.isotope.min.js"></script>
<script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="assets/plugins/waypoints.min.js"></script>
<script src="assets/plugins/jquery.easing.min.js"></script>
<script src="assets/plugins/jquery.smoothscroll.min.js"></script>
<script src="assets/plugins/jquery.stellar.min.js"></script>

<script src="assets/js/theme.js"></script>

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/plugins/jquery.cookie.js"></script>
<script src="assets/plugins/style-switcher/style.switcher.js"></script>
<!--<![endif]-->

<script type="text/javascript">
    jQuery(document).ready(function () {
        theme.init();
        theme.initEventSlider();
        theme.initIsotope();
        theme.initTestimonials();
        theme.initPartnerSlider();
        theme.initLastTweet();
        theme.initAnimation();
    });
    jQuery(window).load(function () {
        jQuery('body').scrollspy({
            offset: 100,
            target: '.navigation'
        });
        jQuery(window).stellar({
            horizontalScrolling: false
        });
    });
</script>

</body>
</html>
