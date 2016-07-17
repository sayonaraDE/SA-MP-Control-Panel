<?php
session_start();
include "koneksi.php";
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

    <title>Banned List | CZ California Cops and Robbers</title>

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
    <!-- Header -->
    <header class="header">
        <div class="container">

            <!-- Logo -->
            <div class="logo">
                <a href="#home" class="scroll-to"><img src="assets/img/logo-eventme.png" alt="CZ Cops And Robbers"/></a>
            </div>
            <!-- /Logo -->

            <!-- Navigation -->
            <div id="mobile-menu"></div>
            <nav class="navigation clearfix">
                <ul class="sf-menu nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Forum</a></li>
                    <li><a href="index.php">UCP</a></li>
                    <li class="active"><a href="#">Banned List</a></li>
					<li><a href="playerlist.php">Online Players</a></li>
                </ul>
            </nav>
            <!-- /Navigation -->

        </div>
    </header>
    <!-- /Header -->

		<section class="page-section parallax directions" id="location" style="padding-top:15%">
            <div class="container div-table">

                <div class="parallax-bg" data-stellar-background-ratio="0.5" data-stellar-vertical-offset="-150"></div>
                <div class="parallax-overlay"></div>
                <div class="parallax-inner text-center">
					<table class="table table-bordered">
						<thead>
							<td>Username</td>
							<td>IP</td>
							<td>Banner</td>
							<td>Reason</td>
							<td>Banned From</td>
							<td>Unbanned</td>
						</thead>
						<?php
						$query = $koneksi->prepare("SELECT user_banned, user_banned_ip, ban_reason, ban_time, (ban_timestamp + (ban_time * 60) - strftime('%%s', 'now')) as banTimeLeft, strftime('%%d-%%m-%%Y %%H:%%M', datetime(ban_timestamp + (ban_time * 60), 'unixepoch')) as banExpired, strftime('%%d-%%m-%%Y %%H:%%M', datetime(ban_timestamp, 'unixepoch')) as bannedFrom, user_banner FROM `bans`");
						$query->execute();
						if($query->rowCount() == 0)
						{
							echo "<tr><td colspan='6'><small>There's no player on ban list</small></td></tr>";
						}
						while($data = $query->fetch())
						{
							if($data['ban_time'] == 0)
							{
								$data['banExpired'] = "Never";
							}
							echo "<tr><td>".$data['user_banned']."</td>";
							echo "<td>".$data['user_banned_ip']."</td>";
							echo "<td>".$data['user_banner']."</td>";
							echo "<td>".$data['ban_reason']."</td>";
							echo "<td>".$data['bannedFrom']."</td>";
							echo "<td>".$data['banExpired']."</td></tr>";
						}
						?>
					</table>
                </div>
            </div>
        </section>
        <!-- /Directions -->
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