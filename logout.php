<?php
session_start();
include "koneksi.php";
if(isset($_SESSION['playername']))
{
	unset($_SESSION['playername']);
	unset($_SESSION['playerlevel']);
	go('index.php', 'Succesfully logged out.');
}
else
{
	header("location:index.php");
}