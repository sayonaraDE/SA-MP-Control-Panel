<?php
	include "../koneksi.php";
	header('Content-type: application/json');
	if(isset($_POST['username'], $_POST['password'], $_POST['password2'], $_POST['o_password']))
	{
		if($_POST['username'] !== '' && $_POST['password'] !== '' && $_POST['password2'] !== '' && $_POST['o_password'] !== '')
		{
			$query = $koneksi->prepare("select `name`,`password` from `player` where `name` = ? and `password` = ?");
			$query->execute(array($_POST['username'], strtoupper(hash("whirlpool", $_POST['o_password']))));
			if($query->rowCount() > 0)
			{
				if($_POST['password'] != $_POST['password2'])
					echo json_encode(array('status' => 'Your password entered didn\'t match.'));
				else
				{
					$query = $koneksi->prepare("update `player` set `password` = ? where `name` = ? and `password` = ?");
					$query->execute(array(strtoupper(hash("whirlpool", $_POST['password'])), $_POST['username'], strtoupper(hash("whirlpool", $_POST['o_password']))));
					echo json_encode(array('status' => 'OK', 'message' => 'You\'ve changed your password to '.$_POST['password'].'.'));
				}
				
			}
			else
				echo json_encode(array('status' => 'Wrong password.'));
		}
		else
			echo json_encode(array('status' => 'Please insert all fields.'));
	}
	else
		echo json_encode(array('status' => 'Please insert all fields.'));
?>