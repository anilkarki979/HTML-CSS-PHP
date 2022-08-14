<style type="text/css">
	body{
	background-image: url(images/mh.png);
		background-size: cover;
	}
</style><?php

if (isset($_POST['add_user'])) {
	// echo "Nepal";exit();
	$u = $_POST['username'];
	$e = $_POST['email'];
	$p = $_POST['password'];
	$re_p = $_POST['password-re'];
	// echo 'U: '.$u.', E: '.$e.', P: '.$p;exit;
	if ($p != $re_p) {
		echo '<script type="text/javascript">alert("Password & Confirm Password don\'t match.");</script>';
	}

	$sql = "INSERT INTO `user` (`username`, `email`,`password`)
VALUES ('$u', '$e', md5('$p'))";
//echo $sql;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mobile_hdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully.";
    header('Location: list_user.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<?php include 'header1.php';?>
		<p id="breadcrumb"><a href="index.php" style="padding-left: 10px;">Home</a> &raquo; <a href="reg.php">Register</a></p>
		<div class="content">

<!-- <h1>Add User</h1> -->
<!-- <form action="" method="POST" name="user">
<table>
	<tr>
		<td>Username:</td>
		<td><input type="text" name="username" placeholder="Enter Username" required="required"></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><input type="email" name="email" value="ersks@khwopa.edu.np" required="required"></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type="password" value="Nepal" name="password" required="required"></td>
	</tr>
	<tr>
		<td>Confirm Password:</td>
		<td><input type="password" value="Nepal" name="password-re" required="required"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="add_user" value="ADD USER"></td>
	</tr>
</table>
</form> -->
		<h2>Register Form</h2>
						<form action="" method="POST" name="register">
				First Name :<span style="padding-left: 60px;"><input class="textField" type="text" placeholder="First Name" name="firstname"></span><br><br>
				Last Name :<span style="padding-left: 59px;">	<input class="textField" type="text" placeholder="Last Name" name="lastname"></span><br><br>
				Username :<span style="padding-left: 69px;"><input class="textField" type="text" placeholder="Username" name="username"></span><br><br>
				Your Email :<span style="padding-left: 60px;"><input class="textField" type="email" placeholder="Your Email" name="email"></span><br><br>
				Password :<span style="padding-left: 70px;"><input class="textField" type="password" placeholder="Password" name="password"></span><br><br>
				Confirm Password :<span style="padding-left: 12px;"><input class="textField" type="password" placeholder="Confirm Password" name="re_password"></span><br><br>
				<span style="padding-left: 180px;"><input class="submitBtn" type="submit" value="Register"></span>
						</form>	
		</div>
	<?php include 'footer.php';?>