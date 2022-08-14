<?php
// echo $_COOKIE["member_login"];exit;
if(empty($_SESSION)) // if the session not yet started
   session_start();

// if(!isset($_SESSION['username'])) {
//   echo "<script>window.location='login.php';</script>";
//   exit;
// }
?>
<style>
  *{box-sizing: border-box;}
ul {
  list-style-type: none;
  margin: -8px 0 0 -8px;
  padding: 0;
  width: 200px;
  background-color: #333;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  /*padding: 8px 16px;*/
  text-decoration: none;
  margin-top: 10px;
  color: #a6a6a6;
  /*font-weight: bold;*/
}

li a:hover{
  background-color: purple;
  color: white;
} 
body
{ font-family:  arial; 
background:#a6a6a6}
hr
{
  border: 1px solid #eee;
  margin-top: 30px;
} 
.grid
    {
        display: grid;
        grid-template-columns: 200px 1fr;
        background: #201F1E;

    }
th,td
{
    color: #979A9A;
}
i
{
    color: #C5CAE9;
}
i:hover
{
    color: #FFAB91;
}
.content{
    margin-left: 50px; 
}
h1
{
    color: #fff;
}
textarea
{
  color: #e8dada;
  background: none;
  outline: none; 
  display: block;
  border:2px solid #006B38ff;
}
#box td
  {color:#006B38ff;}
  #box
  { 
    width: 700px;
    position: absolute;
   top: 50%;
   left: 60%;
   transform: translate(-50%,-55%);
  }
  #box input[type=text],input[type=email],input[type=password]
  {
    width: 100%;
    display: block;
    background: none;
      padding: 8px;

      margin-top: 3px;
      margin-bottom: 8px;
      resize: vertical;
      border:2px solid #006B38ff;
      color: #fff;
      outline: none;
      resize: vertical;

  }
  #box input[type=submit]
    { width: 50%;
      background-color: #006B38ff;
      color: white;padding: 10px;
      cursor: pointer;
      display: block;
      border-color: #58D68D;
      color: #fff;
      float: right;
      outline: none;
  }
</style>
<ul>
 <!--  <span style="float: left; margin-left: 10px; color: #fff;font-size:35px;padding: 12px;"><?= ucwords($_SESSION['username']);?></span><br><br>
  --> <hr>
  <li><a href="index.php">DASH</a></li>
  <li><a href="add_user.php">ADD USER</a></li>
  <li><a href="manage_user.php">MANAGE USER</a></li>
  <li><a href="add_content.php">ADD CONTENT</a></li>
  <li><a href="list_content.php">MANAGE CONTENT</a></li>
  <li><a href="index.php">HOME PAGE</a></li>
  <li><a href="logout.php">LOG-OUT</a></li>
</ul>