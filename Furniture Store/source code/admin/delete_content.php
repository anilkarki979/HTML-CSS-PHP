<?php
$content_id = @$_GET['id'];
if (!isset($content_id)) {
	header('Location: list_content.php');
}
 
require_once('DBConnect.php');
$sql = "DELETE FROM `content` WHERE id='$content_id';";

if (mysqli_query($conn, $sql)) {
    // echo "Record deleted successfully";
    header('Location: list_content.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}