<?php
session_start();
if(isset($_SESSION['playername']))
{
?>
<div class="panel panel-warning" style="padding-left:10px;padding-right:10px">
	<h3 class='panel-header panel shadow'><?php echo $_SESSION['playername'] ?> UCP</h3>
	<div class="panel panel-body">
		<table>
			<tr><td><h4><a href="signature.php?user=<?php echo $_SESSION['playername'] ?>">My Signature</a></h4></td></tr>
			<tr><td><h4><a href="profile.php?user=<?php echo $_SESSION['playername'] ?>">My Profile</a></h4></td></tr>
			<tr><td><h4><a href="account/change.php">Change My Password</a></h4></td></tr>
			<tr><td><h4><a href="logout.php">Logout</a></h4></td></tr>
		</table>
	</div>
</div>
<?php
}
else
{
	header("location:index.php");
}
?>