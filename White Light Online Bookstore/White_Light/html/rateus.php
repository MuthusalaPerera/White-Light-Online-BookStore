
<?php


require_once('../includes/config.php');
include('../includes/header.php');


if ($_SERVER['REQUEST_METHOD'] =='POST') {
  $feedback = $_POST['feedback'];
  $rate = $_POST['rate'];

  $sql = "INSERT INTO ratings (feedback, rate) ";
  $sql .= " VALUES ('{$feedback}', $rate)";



  if (!mysqli_query($conn, $sql)) {
    die("Error: " . mysqli_error($conn));
  }else{
    header("Location: ./feedback.html");
    exit;
  }

}

 ?>


<body id="bodypadding" style="    background-image: url(../images/G/new1.jpg);background-size: 100% 80%;"><br><br>



<form action="<?=$_SERVER['PHP_SELF']?>"  method="post">
	<center>
	<h1 style="font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', 'sans-serif';">Send Us Your Feedback!</h1><br>
	<label style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'">Tell us what you think:</label> <br><br>
	<textarea id="address" name="feedback" rows="10" cols="30" style="width:30%"  required > </textarea><br><br>
	<label style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'">Rate US</label><br><br>
	<input type="radio"  id="step1" value="1" name="rate">
	<input type="radio" id="step2" value="2" name="rate">
	<input type="radio" id="step3" value="3" name="rate">
	<input type="radio" id="step4" value="4" name="rate">
	<input type="radio" id="step5" value="5" name="rate"><br>
	<!-- <a href="Feedback.html"></a><br> -->
  <button type="submit" style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, 'sans-serif'"><h2>Submit</h2></button>
	<p style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, 'sans-serif'">Feedback is anonymously shared with us</p><br>
	</p></center><br>
</form>

<?php
   include('../includes/footer.php');

   ?>
