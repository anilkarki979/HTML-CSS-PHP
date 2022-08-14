<?php
// echo $_COOKIE["member_login"];exit;
// if(empty($_SESSION)) // if the session not yet started
//    session_start();

// if(!isset($_SESSION['username'])) {
// 	echo "<script>window.location='login.php';</script>";
// 	exit;
// }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dash Board</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" type="image/png" href="images/1.png">
</head>
<body>
	<!-- <span style="float: right; margin-right: 10px;color: #fff;">Welcome <?= ucwords($_SESSION['username']);?>!</span></p><br>
	 --><div class="content">
<div id="im"><a href="add_user.php"><img src="images/user-add.png"  title="ADD USER"></a></div>
<div id="im"><a href="manage_user.php"><img src="images/manage_user.png"  title="MANAGE USER"></a></div>
<div id="im"><a href="add_content.php"><img src="images/add_content.png"  title="ADD CONTENT"></a></div>
<div id="im"><a href="list_content.php"><img src="images/manage_content.png" title="MANAGE CONTENT"></a></div>
<div id="im"><a href="../index.php"><img src="images/home1.jpg"  title="HOMEPAGE"></a></div>
<div id="im"><a href="logout.php"><img src="images/logout.png"  title="LOG-OUT"></a></div>
</div>
</body>
</html>
