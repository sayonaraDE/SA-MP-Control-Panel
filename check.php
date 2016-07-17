<?php
	session_start();
	include "koneksi.php";
	if(isset($_SESSION['playername']))
	{
		go('index.php', 'You already logged in.');
	}
	if(!isset($_POST['username'], $_POST['password']))
	{
		go('index.php', 'Please fillout all required forms.');
	}
	else
	{
		$query = $koneksi->prepare("SELECT `level`,`name` from `player` where `name` = ? and `password` = ?");
		$query->execute(array($_POST['username'], strtoupper(hash("whirlpool", $_POST['password']))));
		if($query->rowCount() > 0)
		{
			$data = $query->fetch();
			go('index.php', 'Succesfully logged in.');
			$_SESSION['playername'] = $data['name'];
			$_SESSION['playerlevel'] = $data['level'];
		}
		else
		{
			go('index.php', 'Wrong username or password.');
		}
	}