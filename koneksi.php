<?php
	$koneksi = new PDO("mysql:host=localhost;dbname=samp", "root", "samp");
	function go($location, $alert)
	{
		echo "<script>window.alert('".$alert."')</script>";
		echo "<meta http-equiv=\"refresh\" content=\"0;URL=".$location."\"><center>";
		return 1;
	}