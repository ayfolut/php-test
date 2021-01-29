<?php  include('header.php'); ?>
<?php  include('session.php'); ?>


<?php $query= mysqli_query($con, "select * from users where user_id = '$session_id'")or die(mysqli_error());
								$row = mysqli_fetch_array($query);
						?>
			<?php echo $user_mail; ?><br>
			<?php echo $row['phone']; ?><br>
<a href="add.php"><button>Add mail and Contact</button></a>
	<a href="logout.php"><button>Logout</button></a>


