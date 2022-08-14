<?php
$content_id = @$_GET['id'];
if (!isset($content_id)) {
	header('Location: list_content.php');
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
$sql = "SELECT * FROM `content` WHERE `id`='$content_id' Limit 0, 10";
$result = mysqli_query($conn, $sql);
$prev_data = mysqli_fetch_assoc($result);
// echo "<pre>"; print_r($prev_data);exit;


if (isset($_POST['add_user'])) {
	$user_id = $_GET['id'];
	// echo "$user_id";exit();
	$t = $_POST['title'];
	$d = $_POST['description'];
	// $p = $_POST['password'];
	// $re_p = $_POST['password-re'];
	// // echo 'U: '.$u.', E: '.$e.', P: '.$p;exit;
	// if ($p != $re_p) {
	// 	echo '<script type="text/javascript">alert("Password & Confirm Password don\'t match.");</script>';
	// }

	$sql = "UPDATE `content` SET `title`='$t',`description`='$d' WHERE `id`='$content_id';";
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
    header('Location: list_content.php');
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
				<h1>Update Content #<?= $prev_data['id'];?></h1>
<form action="" method="POST" name="user">
<table>
		<tr>
		<td>Title:</td>
		<td><input type="text" name="title" required="required" value="<?= $prev_data['title'];?>"></td>
	</tr>
	<tr>
		<td>Description:</td>
		<td>
			<!-- creating a text area for my editor in the form -->
			<textarea name="description" id="editor"  required="required" value="<?= $prev_data['description'];?>" rows="12" cols="80"></textarea>
		</td>
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