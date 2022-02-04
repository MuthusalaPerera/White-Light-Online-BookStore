<?php

require_once('../includes/config.php');
include('../includes/header.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	
  $err = '';
  $name = $_POST['name'];
  $catergory = $_POST['catergory'];
  $books = json_encode($_POST['book']);

  

   $sql = "INSERT INTO favourites (name, catergory, books) ";
  $sql .= " VALUES ('{$name}', '{$catergory}', '{$books}')";



  if (!mysqli_query($conn, $sql)) {
    die("Error: " . mysqli_error($conn));
  }else{
    // header("Location: ./feedback.html");
    // exit;
  }

}
 ?>


<body id="bodypadding" style="background-image: url(../images/P/bk9.gif);background-size: 100% 80%;"><br>	
<! favourites page>
<h2 id="mpfont"> Add your favourites here </h2><br>

	<form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
	<label id="fontx"> Full Name</label> <br>
	<input type="text" id="fname" name="name" style="width:30%;" placeholder="Enter your full name here" required ><br><br>
	<label id="fontx"> Choose your Category</label> <br>
	<select name="catergory">
	<option value="5 to 12 years - children">5 to 12 years - children</option>
	 <option value="13 to 19 years - teenage">13 to 19 years - teenage</option> 
	 <option value="20 to 35 years - young-adult">20 to 35 years - young-adult</option> 
	 <option value="36 to 55 years - middle-aged adults">36 to 55 years - middle-aged adults</option>
	  <option value="older than 56 years - older-adults">older than 56 years - older-adults</option>
	</select ><br><br>
	
	<h2 id="fontx"> Select your favourites </h2><br>
	<div id="data3">
	<input type="checkbox" id="book1" value="Antiques & Categories" name="book[]" > Antiques & Categories <br>
	<input type="checkbox" id="book2" value="Architecture Books" name="book[]" > Architecture Books<br>
	<input type="checkbox" id="book3" value="Art Books" name="book[]" > Art Books<br>
	<input type="checkbox" id="book4" value="Biographies"  name="book[]" > Biographies<br>
	<input type="checkbox" id="book5" value="Children's Books"  name="book[]" > Children's Books<br>
	<input type="checkbox" id="book6" value="Computer & Technology"  name="book[]" > Computer & Technology<br>
	<input type="checkbox" id="book7" value="Comic Books"  name="book[]" > Comic Books<br>
	<input type="checkbox" id="book8" value="Crime Books"  name="book[]" > Crime Books<br>
	<input type="checkbox" id="book9" value="Design Books"  name="book[]" > Design Books<br>
	<input type="checkbox" id="book10" value="Education Books" accept=" " name="book[]" > Education Books<br>
	<input type="checkbox" id="book11" value="Fictions"  name="book[]" > Fictions<br>
	<input type="checkbox" id="book12" value="Health & Fitness Books" name="book[]" > Health & Fitness Books <br>
	<input type="checkbox" id="book13" value="History Books"  name="book[]" > History Books<br>
	<input type="checkbox" id="book14"  value="Horror Books" name="book[]" > Horror Books<br><br>
	
	
	I decide to submit this form.
	
	<input type="checkbox" id="policy" name="policy" required onclick ="enableButton()"><br><br>
	</div>
	<input type="submit" id="btn1" name="btn1"  value="Submit Form"  disabled ><br>
	</form>
	
	

<!-- <! end>	
 -->

  <?php
    include('../includes/footer.php');

    ?>
