<?php
$id = @$_GET['id'];
if (!isset($id)) {
	header('Location: upload_file.php');
}
 
require_once('DBConnect.php');
//get file name
$sql = "SELECT title as filename FROM `files` WHERE `id` = '$id';";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
	// echo $row['filename']; echo "<pre>"; print_r($row);exit;
	$sql = "DELETE FROM `files` WHERE id='$id';";

	if (mysqli_query($conn, $sql)) {
	    // echo "Record deleted successfully";
	    $myFile = "files/".$row['filename'];
		unlink($myFile) or die("Couldn't delete file");
	    echo "<script>alert('File deleted successfully!');</script>";
        echo "<script>window.location='upload_file.php';</script>";
	} else {
	    echo "Error deleting record: " . mysqli_error($conn);
	}
}
