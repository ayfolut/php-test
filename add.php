<?php include ('header.php'); ?>
<?php include ('session.php'); ?>
<?php $query= mysqli_query($con, "select * from users where user_id = '$session_id'")or die(mysqli_error());
								$row = mysqli_fetch_array($query);
						?>
		<h1>Well-done, <?php echo $user_username;  ?></h1>

<form id="add-info" method="POST">
	<input type="text" name="mail" placeholder="mail">
	<input type="text" name="phone" placeholder="phone">
	<input type="submit" value="submit" name="save">
</form>

 <script>
			jQuery(document).ready(function($){
				$("#add-info").submit(function(e){
					e.preventDefault();
					var _this = $(e.target);
					var formData = $(this).serialize();
					$.ajax({
						type: "POST",
						url: "add_info_action.php",
						data: formData,
						success: function(html){
						if(html=="true")
						{
						$.jGrowl("Email Already Exist", { header: 'Failure' });
						}else{
							$.jGrowl("Email Successfully  updated", { header: 'Update Status' });
							var delay = 500;
							setTimeout(function(){ window.location = 'dashboard.php'  }, delay);  
						}
						}
					});
				});
			});
			</script>