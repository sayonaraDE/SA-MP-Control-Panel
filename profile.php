<?php
session_start();
if(isset($_GET['user']))
{
include "koneksi.php";
$query = $koneksi->prepare("SELECT * from `player` where `name` = ?");
$query->execute(array($_GET['user']));
if($query->rowCount() > 0)
{
	$data = $query->fetch();
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

    <title><?php echo $data['name'] ?> Profile | CZ California Cops and Robbers</title>

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
                    <li class="active"><a href="#">UCP</a></li>
                    <li><a href="banlist.php">Banned List</a></li>
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
				<?php
				if($data['kill'] > 5000 && $data['xp'] > 50000 && $data['score'] > 20000)
					$title_rank = "General of CCNR";
				else if($data['kill'] > 2400 && $data['xp'] > 45000 && $data['score'] > 20000)
					$title_rank = "General";
				else if($data['kill'] > 2300 && $data['xp'] > 40000 && $data['score'] > 18000)
					$title_rank = "Lieutenant General";
				else if($data['kill'] > 2200 && $data['xp'] > 38000 && $data['score'] > 17000)
					$title_rank = "Major General";
				else if($data['kill'] > 2100 && $data['xp'] > 37000 && $data['score'] > 16000)
					$title_rank = "Brigadier General";
				else if($data['kill'] > 2000 && $data['xp'] > 36000 && $data['score'] > 15000)
					$title_rank = "Colonel";
				else if($data['kill'] > 1900 && $data['xp'] > 30000 && $data['score'] > 10000)
					$title_rank = "Lieutenant Colonel";
				else if($data['kill'] > 1500 && $data['xp'] > 15000 && $data['score'] > 5000)
					$title_rank = "Major";
				else if($data['kill'] > 1300 && $data['xp'] > 14000 && $data['score'] > 4500)
					$title_rank = "Captain";
				else if($data['kill'] > 1000 && $data['xp'] > 10000 && $data['score'] > 3000)
					$title_rank = "Lieutenant";
				else if($data['kill'] > 900 && $data['xp'] > 9000 && $data['score'] > 2000)
					$title_rank = "Master Sergeant";
				else if($data['kill'] > 800 && $data['xp'] > 8000 && $data['score'] > 1000)
					$title_rank = "Staff Sergeant";
				else if($data['kill'] > 700 && $data['xp'] > 7000 && $data['score'] > 900)
					$title_rank = "Sergeant";
				else if($data['kill'] > 500 && $data['xp'] > 5000 && $data['score'] > 500)
					$title_rank = "Corporal";
				else if($data['kill'] > 200 && $data['xp'] > 4000 && $data['score'] > 400)
					$title_rank = "Specialist";
				else if($data['kill'] > 100 && $data['xp'] > 3000 && $data['score'] > 300)
					$title_rank = "Private";
				else
					$title_rank = "Newbie";
				switch($data['level'])
				{
					case 0:
					{
						$title = "Player"; break;
					}
					case 1:
					{
						$title = "Trial Administrator"; break;
					}
					case 2:
					{
						$title = "Junior Administrator"; break;
					}
					case 3:
					{
						$title = "Administrator"; break;
					}
					case 4:
					{
						$title = "Senior Administrator"; break;
					}
					case 5:
					{
						$title = "Head Administrator"; break;
					}
					case 6:
					{
						$title = "Management Team"; break;
					}
				}
				?>
					<h2 style="color:white"><?php echo $data['name'] ?> Profile Page (<?php echo $title_rank ?>)</h2>
                    <p class="directions-icon"><i class="fa fa-user"></i></p>
                    <p>CZ California Cops and Robbers <?php echo $title ?></p>
                    <p class='text-alert'>Kill Death Ratio : <?php 
						$kd = $data['kill'] / $data['death'];
						echo round($kd, 2);
					?></p>
                    <p>
					<?php
					if($data['gang'] != -1)
					{
						$query = $koneksi->prepare("select * from `gang` where `id` = '%d'");
						$query->execute(array($data['gang']));
						$gang = $query->fetch();
					}
					else
					{
						$gang['name'] = 'No';
					}
					echo $gang['name']." Gang";
					?>
					</p>
					<?php
					switch($data['job'])
					{
						case 1:
							$job = "Mechanic"; break;
						case 2:
							$job = "Rapist"; break;
						case 3:
							$job = "Terrorist"; break;
						case 4:
							$job = "Weapon Dealer"; break;
						case 5:
							$job = "Weed Dealer"; break;
						case 6:
							$job = "Kidnapper"; break;
						case 7:
							$job = "Hitman"; break;
						case 8:
							$job = "Trucker"; break;
						default:
							$job = "No Job";
					}
					?>
					<p><?php echo "My Job is ".$job ?></p>
					<?php
					switch($data['vip'])
					{
						case 1:
							$title = "CZ California Cops and Robbers VIP"; break;
						case 2:
							$title = "CZ California Cops and Robbers Silver VIP"; break;
						case 3:
							$title = "CZ California Cops and Robbers Golden VIP"; break;				
					}
					if($data['vip'] > 0)
					{
						echo '<p class="directions-mailto">'.$title.'</p>';
					}
					?>
                    <p><a class="btn btn-theme btn-theme-white" href="samp://91.121.164.164:7917">Play With Me!</a></p>

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
<?php
}
else
{
	go('index.php', 'Username not found!!!');
}
}
else
{
	header("Location:index.php");
}
?>