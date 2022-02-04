
<?php


require_once('../includes/config.php');
include('../includes/header.php');


if ($_SERVER['REQUEST_METHOD'] =='POST') {
  $username = $_POST['username'];
  $uni_name = $_POST['uni_name'];
  $uni_id = $_POST['uni_id'];

  $sql = "INSERT INTO uni_students (username, uni_name, uni_id) ";
  $sql .= " VALUES ('{$username}', '{$uni_name}', '{$uni_id}')";



  if (!mysqli_query($conn, $sql)) {
    die("Error: " . mysqli_error($conn));
  }else{
    header("Location: ./home.html");
    exit;
  }

}

 ?>




<style>
	body{
	background-image:url("../images/M/p1.jpg");
	background-size: 100% 100%;
	color:white;
	margin-top:40px;
	}
</style>
<body>
	<center>
	<br><br><br><br><br><br><br><br><br><br>
	<h1 style="font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'">FILL THE BELOW FORM TO VERIFY AS A UNIVERSITY STUDENT</h1>
<form id="myForm" action="<?=$_SERVER['REQUEST_URI']?>" method="post">
<table style="font-size: 35px; font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'">
  <tr><td>UserName  :</td> 	  <td><input type="text" name="username"></td></tr><br><br>
  <tr><td>University name:</td><td> <input type="textarea" name="uni_name"></td></tr>
  <tr><td>University ID No:</td>   <td><input type="text" name="uni_id"></td></tr>
</table> 
 <br>
  <input type="button" onclick="myFunction()" value="Cancel">
  <input type="submit" onclick="myFunction()" value="Confirm">
 <br><br><br><br>
</form>


<script>
function myFunction() {
  document.getElementById("myForm").Confirm();
}
</script>

	
 </body>	


 <?php
   include('../includes/footer.php');

   ?>
