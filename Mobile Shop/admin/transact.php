<style type="text/css">
    body{
    background-image: url(images/mh.png);
        background-size: cover;
    }
</style><?php
// echo "Nepal";exit();
require_once("DBConnect.php");

$sql = "SELECT * FROM `ticket` WHERE 1 Limit 0, 10";
$result = mysqli_query($conn, $sql);
// $data = mysqli_num_rows($result);
// echo "<pre>"; print_r($result); exit();
?>

<?php include 'header.php';?>
        <p id="breadcrumb"><a href="index.php" style="padding-left: 10px;">Home</a> &raquo; <a href="transact.php">Mobile</a> &raquo; List</p>
        <div class="content">
<h1>Details</h1>
<a href="add_mobile.php"><img src="images/add.png" height="30px"></a>
<table border="1" cellspacing="0" cellpadding="20">
    <tr>
        <th>S.N.</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Date</th>
    </tr>
<?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    //$user_list = mysqli_fetch_assoc($result);
    // echo "<pre>"; print_r($user_list);exit;
    $i=0;
    while($row = mysqli_fetch_assoc($result)) {
        // echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";

?>
    <tr>
        <td><?= ++$i;?></td>
        <td><?= $row["name"];?></td>
        <td><?= $row["mobile"];?></td>
        <td><?= $row["quantity"];?></td>
        <td><?= $row["price"];?></td>
        <td><?= $row["date"];?></td>
        
    </tr>
<?php
    }   
} else {
    ?>
    <tr>
        <td colspan="5">No Record(s) found.</td>
    </tr>
    <?php
}
?>
<?php 
mysqli_close($conn);
?>
</table>
            
        </div>
    <?php include 'footer.php';?>