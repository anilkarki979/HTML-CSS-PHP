<?php
$user_id = @$_GET['id'];
if (!isset($user_id)) {
	header('Location: manage_user.php');
}
$server = "localhost";
$username = "root";
$pwd = "";
$db = "project_db";

// Create connection
$conn = mysqli_connect($server, $username, $pwd, $db);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM `user` WHERE `id`='$user_id' Limit 0, 10";
$result = mysqli_query($conn, $sql);
$prev_data = mysqli_fetch_assoc($result);
// echo "<pre>"; print_r($prev_data);exit;


if (isset($_POST['add_user'])) {
	$user_id = $_GET['id'];
	// echo "$user_id";exit();
	$f = $_POST['firstname'];
	$l = $_POST['lastname'];
	$u = $_POST['username'];
	$e = $_POST['email'];
	// $p = $_POST['password'];
	// $re_p = $_POST['password-re'];
	// // echo 'U: '.$u.', E: '.$e.', P: '.$p;exit;
	// if ($p != $re_p) {
	// 	echo '<script type="text/javascript">alert("Password & Confirm Password don\'t match.");</script>';
	// }

	$sql = "UPDATE `user` SET `first_name`='$f',`last_name`='$l',`username`='$u', `email`='$e' WHERE `id`='$user_id';";
	// echo $sql;exit;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (mysqli_query($conn, $sql)) {
    // echo "Record updated successfully";
    header('Location: manage_user.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<div class="grid">
	<div><?php include 'navbar.php'  ?></div>
	

		<div class="content">
			<div id="box">
				<h1>Update User #<?= $prev_data['id'];?></h1>
<form action="" method="POST" name="user">
<table>
		<tr>
		<td>First Name:</td>
		<td><input type="text" name="firstname" required="required" value="<?= $prev_data['first_name'];?>"></td>
	</tr>
		<tr>
		<td>Last Name:</td>
		<td><input type="text" name="lastname" required="required" value="<?= $prev_data['last_name'];?>"></td>
	</tr>
	<tr>
		<td>Username:</td>
		<td><input type="text" name="username" placeholder="Enter Username" required="required" value="<?= $prev_data['username'];?>"></td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><input type="email" name="email" required="required" value="<?= $prev_data['email'];?>"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="add_user" value="UPDATE"></td>
	</tr>
</table>
</form>
			</div>


			
		</div>
		</div>