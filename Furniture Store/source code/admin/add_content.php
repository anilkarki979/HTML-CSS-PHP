<!-- <script src="https://cdn.ckeditor.com/ckeditor5/12.3.1/classic/ckeditor.js"></script> -->
<?php

if (isset($_POST['add_content'])) {
	// echo "Nepal";exit();
	$t = $_POST['title'];
	$d = $_POST['description'];

	$sql = "INSERT INTO `content` (`title`, `description`) VALUES 
	('$t', '$d')";
	//echo $sql;
	$server = "localhost";
$username = "root";
$pwd = "";
$db = "Furniture";

// Create connection
$conn = mysqli_connect($server, $username, $pwd, $db);
// Check connection
if (!$conn) 
{
    die("Connection failed: " . mysqli_connect_error());
}

if (mysqli_query($conn, $sql)) {
    // echo "New record created successfully.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<div class="grid">
    <div><?php include 'navbar.php' ?></div>
		<div class="content">
<div id="box"><h1>Add Content</h1>
<form action="" method="POST" name="content">
<table>
	<tr>
		<td>Title:</td>
		<td><input type="text" name="title" required="required"></td>
	</tr>
	<tr>
		<td>Description:</td>
		<td>
			<!-- creating a text area for my editor in the form -->
			<textarea name="description" id="editor" required="required" rows="12" cols="80"></textarea>
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
</form></div>

			
		</div>
	</div>