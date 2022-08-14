<?php
$content_id = @$_GET['id'];
if (!isset($content_id)) {
	header('Location: list_content.php');
}
require_once("DBConnect.php");
$sql = "SELECT * FROM `content` WHERE `id`='$content_id' Limit 0, 10";
$result = mysqli_query($conn, $sql);
$prev_data = mysqli_fetch_assoc($result);
// echo "<pre>"; print_r($prev_data);exit;


if (isset($_POST['edit_content'])) {
	$user_id = $_GET['id'];
	// echo "$user_id";exit();
	$t = $_POST['title'];
	$d = $_POST['description'];

	$sql = "UPDATE `content` SET `title`='$t', `description`='$d' WHERE `id`='$content_id';";
	// echo $sql;exit;

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
    // echo "Record updated successfully";
    header('Location: list_content.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<?php include 'header.php';?>
		<p id="breadcrumb"><a href="index.php" style="padding-left: 10px;">Home</a> &raquo; <a href="list_content.php">Content</a> &raquo; Update</p>
		<div class="content">

<h1>Update Content#<?= $prev_data['id'];?></h1>
<form action="" method="POST" name="content">
<table>
	<tr>
		<td>Title:</td>
		<td><input type="text" name="title" required="required" value="<?= $prev_data['title'];?>"></td>
	</tr>
	<tr>
		<td>Description:</td>
		<td><textarea name="description" id="editor" required="required" rows="15" cols="50"><?= $prev_data['description'];?></textarea></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="edit_content" value="UPDATE"></td>
	</tr>
</table>
</form>
			
		</div>
	<?php include 'footer.php';?>