<style type="text/css">
	body{
	background-image: url(mo.jpg);
		background-size: cover;
	}
</style><?php

if (isset($_POST['add_mobile'])) {
	// echo "Nepal";exit();
	$u = $_POST['name'];
	$e = $_POST['mobile'];
	$p = $_POST['quantity'];
	$r = $_POST['price'];
	// echo 'U: '.$u.', E: '.$e.', P: '.$p;exit;
	

	$sql = "INSERT INTO `book` (`name`, `mobile`,`quantity`,`price`)
VALUES ('$u', '$e','$p','$r'))";
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
    header('Location: list_movie.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<?php include 'header.php';?>
		<p id="breadcrumb"><a href="index.php" style="padding-left: 10px;">Home</a> &raquo; <a href="list_mobile.php">User</a> &raquo; Add</p>
		<div class="content">

<h1>Sell</h1>
<form action="" method="POST" name="user">
<table>
	<tr>
		<td>Name:</td>
		<td><input type="text" name="name" placeholder="Enter Name" required="required"></td>
	</tr>
	<tr>
		<td>Mobile:</td>
		<td><input type="text" name="mov"  required="required"></td>
	</tr>
	<tr>
		<td>Quantity:</td>
		<td><input type="number"  name="quan" required="required"></td>
	</tr>
	<tr>
		<td>Price:</td>
		<td><input type="number" name="pri" required="required"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="add_user" value="ADD MOBILE"></td>
	</tr>
</table>
</form>
			
		</div>
	<?php include 'footer.php';?>