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
	<title>PLank-Furniture</title>
	<link rel="shortcut icon" type="image/png" href="images/1.png">
<style type="text/css">
	*{box-sizing: border-box;}
	body
	{
		background: #a5a3c4;
	}
	h1
	{
		font-family: arial;
		text-align: center;
		line-height: 200px;
		margin-bottom: -220px;
		color: #fff;
	}
	.content
	{background: #abceee;
		padding: 30px;
		margin: 150px -8px;
		font-family: arial;
		color: white;
		font-size: 12px;
		 }
		 input[type=text],input[type=password]
		 { width: 20%;
		 	padding: 10px;
		 	text-align: center;
		 	margin-top: 6px;
			margin-bottom: 15px;
			resize: vertical;
			outline: none;
		 }
		input[type=submit]
		{ width: 20%;
			background-color: #d9534f;
			color: white;padding: 10px 20px;
			cursor: pointer;
			outline: none;
		}

		{background: #eeeeee;
			width: 8%;
			position: absolute;
			left: 390px;
			padding: 15px 17px;}
</style>
</head>
<body>
	
<h1>ADMIN</h1>
		<div class="content" style="text-align: center;">
			<form action="" method="POST">
				USERNAME<br><input type="text" name="username" id="lf" required="required" autofocus="true" placeholder="USERNAME"><br>
				PASSWORD<br>
				<input type="password" name="password" id="lf" required="required" placeholder="PASSWORD"><br>
				<input type="checkbox" name="remember_me" id="lf" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> />
				<label for="lf-me">Remember me</label><br>
				<input type="submit" name="submit" value="Login" id="lf">
			</form>
	</div>
<style type="text/css">
	#lf{
		margin-top: 10px;
	}
</style>
</body>
</html>