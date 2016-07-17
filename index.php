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
                <button type="button" class="btn btn-theme-sm btn-theme" data-dismiss="modal">Schließen</button>
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
                    <li><a href="news.php">News</a></li>
                    <li><a href="#UCP">UCP</a></li>
                    <li><a href="firststep.php">Erste Schritte</a></li>
                    <li><a href="help.php">Hilfe</a></li>
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
                                    <h1 class="slide-title">HAGAKURE's Reallife Server</h1>
                                    <h3 class="slide-subtitle">Herzlich Willkommen!</small></h3>
									<?php
									if(!isset($_SESSION['playername']))
									{
									?>
                                    <a class="btn btn-theme btn-theme-primary slide-btn" data-toggle="modal" data-target="#myModal" id="UCP" href="#">Jetzt einloggen!</a>
									<?php
									}
									else
									{
									?>
									<a class="btn btn-theme btn-theme-primary slide-btn" data-toggle="modal" data-target="#myModal" id="UCP" href="ucp.php">Ins Control Panel</a>
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
                                        <h1 class="slide-title">Wir spielen echt!</h1>
                                        </a><h3 class="slide-subtitle">Führe deine Firma, besitze super schnelle Autos!</h3>
                                        <a class="btn btn-theme btn-theme-primary slide-btn" id="UCP" href="samp://127.0.0.1:777">Trete kostenlos bei!</a>
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
                        <div class="media" data-animation="fadeInUp" data-animation-delay="250">
                            <div class="media-object fa fa-heart"></div>
                            <div class="media-body">
                                <h4 class="media-heading">Mit Liebe erstellt</h4>
                                <p>Das System ist Userfreundlich und bietet Spielern eine perfekte Spielwelt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 feature">
                        <div class="media" data-animation="fadeInUp" data-animation-delay="500">
                            <div class="media-object fa fa-map-marker"></div>
                            <div class="media-body">
                                <h4 class="media-heading">Wähle deinen Standort</h4>
                                <p>Schon am Anfang wählst du aus, in welcher der 3 Städten Du leben möchtest.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 feature">
                        <div class="media" data-animation="fadeInUp" data-animation-delay="750">
                            <div class="media-object fa fa-question-circle"></div>
                            <div class="media-body">
                                <h4 class="media-heading">Hilfe benötigt?</h4>
                                <p>Unsere Supporter helfen dir gerne in Sachen, die dir Probleme bereiten. Benutze /support im Spiel.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 feature">
                        <div class="media" data-animation="fadeInUp" data-animation-delay="1000">
                            <div class="media-object fa fa-sitemap"></div>
                            <div class="media-body">
                                <h4 class="media-heading">Interesse an Franktionen?</h4>
                                <p>Wir haben genug, wo du dich immer bewerben kannst! Versuche es doch gleich aus!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center" data-animation="fadeInUp" data-animation-delay="1250">
                    <a class="btn btn-theme" href="samp://127.0.0.1:7777">Tritt uns noch heute bei!</a>
                </div>
            </div>

        </section>
        <!-- /Feature -->

        <!-- Our Team -->
        <section class="page-section speackers" id="speackers">
            <div class="container">
                <h3 class="section-title text-center" data-animation="fadeInUp" data-animation-delay="0">Unser Team<small></small></h3>
                <div class="row">

                    <div class="col-sm-6 col-md-3" data-animation="fadeInUp" data-animation-delay="700">
                        <div class="thumbnail do-up no-border">
                            <img src="assets/img/preview/team.png" class="img-responsive" alt="">
                            <div class="caption">
                                <div class="caption-wrapper div-table">
                                    <div class="caption-inner div-cell">
                                        <h4 class="caption-title">HAGAKURE</h4>
                                        <p class="caption-category"><a href="#">Besitzer</a></p>
										<p class="caption-category"><a href="#">Programmierer</a></p>
										<p class="caption-category"><a href="#">Supporter</a></p>
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
                                        <h4 class="caption-title">Sayonara</h4>
                                        <p class="caption-category"><a href="#">Supporter</a></p>
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

                    <!-- <div class="col-sm-6 col-md-3" data-animation="fadeInUp" data-animation-delay="700">
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
                    </div> -->

                </div>
            </div>
        </section>
        <!-- /Our Team -->

        <!-- Price Table -->
        <section class="page-section" id="price">
            <div class="container">
                <h3 class="section-title text-center">Demnächst gibt es Premium, Schaue bald vorbei! <small>VIP will get more of features, and more lots of fun.</small></h3> </div></section>
                <!-- <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="price-table">
                            <div class="price-table-header">
                                <div class="price-label">
                                    <h3 class="price-label-title"></h3>
                                </div>
                                <div class="price-value">
                                    <span class="price-unit">$</span><span class="price-number"></span><span class="price-per"></span>
                                    <small></small>
                                </div>
                            </div>
                            <div class="price-table-rows">
                                <div class="price-table-row"></div>
                                <div class="price-table-row"></div>
                                <div class="price-table-row"></div>
                                <div class="price-table-row"></div>
                                <div class="price-table-row"><small></small></div>
                                <div class="price-table-row-bottom">
                                    <a class="btn btn-theme btn-theme-invert" href="#"></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="price-table">
                            <div class="price-table-header">
                                <div class="price-label">
                                    <h3 class="price-label-title"></h3>
                                </div>
                                <div class="price-value">
                                    <span class="price-unit">$</span><span class="price-number"></span><span class="price-per"></span>
                                    <small>You'll get VIP status in-game and forums</small>
                                </div>
                            </div>
                            <div class="price-table-rows">
                                <div class="price-table-row"></div>
                                <div class="price-table-row"></div>
                                <div class="price-table-row"></div>
                                <div class="price-table-row"></div>
                                <div class="price-table-row"></div>
								<div class="price-table-row"><small></small></div>
                                <div class="price-table-row-bottom">
                                    <a class="btn btn-theme btn-theme-invert" href="#"></a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-3">
                        <div class="price-table">
                            <div class="price-table-header">
                                <div class="price-label">
                                    <h3 class="price-label-title"></h3>
                                </div>
                                <div class="price-value">
                                    <span class="price-unit">$</span><span class="price-number"></span><span class="price-per"></span>
                                    <small></small>
                                </div>
                            </div>
                            <div class="price-table-rows">
                                <div class="price-table-row"></div>
                                <div class="price-table-row"></div>
                                <div class="price-table-row"></div>
                                <div class="price-table-row"></div>
                                <div class="price-table-row"></div>
								<div class="price-table-row"><small></small></div>
                                <div class="price-table-row-bottom">
                                    <a class="btn btn-theme btn-theme-invert" href="#"></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section> -->
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
                <div class="col-sm-12 text-center">&copy; 2016 H:RL — Control Panel V1.0.0 | Developed by HAGAKURE</div>
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
