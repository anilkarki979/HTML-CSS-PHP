<?php
if(isset($_COOKIE["member_login"])){	
	if(empty($_SESSION)) // if the session not yet started
   			session_start();
		$_SESSION['username'] = $_COOKIE["member_login"];
	echo "<script>window.location='index.php';</script>";
	exit;
}

if(isset($_POST['submit'])){
	// echo "Nepal";exit;
	$u = $_POST['username'];
	$p = md5($_POST['password']);

	$sql = "SELECT * FROM `user` WHERE (`username`='$u' OR `email`='$u') AND `password`='$p' AND `status`=1 AND `is_verified`=1;";
	//echo $sql;
	require_once('DBConnect.php');
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) > 0) {
		// echo "Login Successful";exit;
		if(empty($_SESSION)) // if the session not yet started
   			session_start();
		$_SESSION['username'] = $u;
		$row = mysqli_fetch_assoc($result);
		//echo "<pre>"; print_r($row);exit;
		$_SESSION['u_id'] = $row['id'];
		if(!empty($_POST["remember_me"])) {
				setcookie ("member_login",$_POST["username"],time()+(60 * 60)); /* expire in 1 hour */
			} else {
				if(isset($_COOKIE["member_login"])) {
					setcookie ("member_login","");
				}
			}
		echo "<script>window.location='index.php';</script>";		
        exit; 
	}else{
		echo "<script>alert('Username or Password Incorrect!');</script>";
		echo "<script>window.location='login.php';</script>";
		exit;
	}
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Mobile - Dashboard</title>
	<link rel="stylesheet" type="text/css" href="css/asd.css">
	<link rel="shortcut icon" href="images/logo.png">
	<style type="text/css">
		body{
			background-image: url(ac.jpg);
		background-size: cover;
		}
	</style>
</head>
<body>
	<div class="body_wrapper">
		<div class="header">
			<h1 style=" text-align: center;">Mobile Sign Up</h1>            
		</div>
		<hr>
		<p><a href="index.php" style="text-decoration: none; padding-left: 10px;">Mobile</a> &raquo; Sign Up</p>
		<div class="content" style="text-align: center;">
			<form action="" method="POST">
				<input type="text" name="username" value="ersks" id="lf" required="required" autofocus="true"><br>
				<input type="password" name="password" value="Nepal" id="lf" required="required"><br>
				<input type="checkbox" name="remember_me" id="lf" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> />
				<label for="lf-me">Remember me</label><br>
				<input type="submit" name="submit" value="Sign Up" id="lf">
			</form>
		</div>
	</div>
<style type="text/css">
	#lf{
		margin-top: 10px;
	}
</style>
</body>
</html>