<style type="text/css">
	body{
	background-image: url(images/mh.png);
		background-size: cover;
	}
</style><?php

if (isset($_POST['add_content'])) {
	// echo "Nepal";exit();
	$t = $_POST['title'];
	$d = $_POST['description'];

	$sql = "INSERT INTO `content` (`title`, `description`) VALUES 
	('$t', '$d')";
	//echo $sql;
	require_once("DBConnect.php");

if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully.";
    header('Location: list_content.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<?php include 'header.php';?>
		<p id="breadcrumb"><a href="index.php" style="padding-left: 10px;">Home</a> &raquo; <a href="list_content.php">Content</a> &raquo; Add</p>
		<div class="content">

<h1>Add Content</h1>
<form action="" method="POST" name="content">
<table>
	<tr>
		<td>Title:</td>
		<td><input type="text" name="title" placeholder="Enter Title" required="required"></td>
	</tr>
	<tr>
		<td>Description:</td>
		<td>
			<!-- creating a text area for my editor in the form -->
			<textarea name="description" id="editor" required="required"></textarea>
		</td>
	</tr>

<!-- creating a CKEditor instance called myeditor -->
<!-- <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script> -->

	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="add_content" value="ADD CONTENT"></td>
	</tr>
</table>
</form>
			
		</div>
	<?php include 'footer.php';?>