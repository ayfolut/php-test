<?php
include('dbcon.php');
include('session.php');
if (isset($_POST['save'])){
$email = $_POST['mail'];
$phonec = $_POST['phone'];

$query = mysqli_query($con, "SELECT * FROM users WHERE email  =  '$email' ")or die(mysqli_error());
$count = mysqli_num_rows($query);

if ($count > 0){ 
echo "true";
}else{
mysqli_query($con, "UPDATE users SET email = '$email',  phone = '$phonec'")or die(mysqli_error());

}
}
?>