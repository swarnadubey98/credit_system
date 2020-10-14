<?php 

$con = mysqli_connect('localhost','root');

mysqli_select_db($con,'credit management system');

$user = $_POST['user'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$comments = $_POST['comments'];

$insertquery = "insert into userinfodata(user, email, mobile, comments) values('$user','$email',
'$mobile','$comments')";

mysqli_query($con,$insertquery);

header('location:index.php');



 ?>
