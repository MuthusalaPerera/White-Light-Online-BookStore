<?php
  ob_start();
  // Start Session
  if(!isset($_SESSION)){
    session_start();
  }


 ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="../css/style1.css">
  <link rel="stylesheet" type="text/css" href="../css/styleC1.css">
  <link rel="stylesheet" type="text/css" href="../css/styleG1.css">
	<link rel="stylesheet" type="text/css" href="../css/styleD.css">
	<link rel="stylesheet" type="text/css" href="../css/style1M.css">
	<link rel="stylesheet" type="text/css" href="../css/style-favourites.css">
	<link rel="stylesheet" type="text/css" href="../css/styleC.css">
	<link rel="stylesheet" type="text/css" href="../css/styleC1.css">

<?php if (strpos($_SERVER['REQUEST_URI'], 'login') !== false): ?>
  <link rel="stylesheet" type="text/css" href="../css/styleC.css">
<?php endif; ?>

	<script src="../js/D.js"></script>
		 <script src="../js/favourite.js"> </script>
	<link rel="icon" type="image/png" sizes="16*16" href="../images/icon.png">



  <title>White Light Online Bookstore</title>

</head>
	<div class="headerx" style="z-index: 999;">
	<div id="logo">
	<img src="../images/logo.png" height="100" width="200" align="left" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<h1 id="title">White Light Online Bookstore</h1>
	<h3 id="title2">Want to get the best? Come with us....Best books available at the best price</h3>
	</div>
	<br>
    <div class="navbar" style="z-index: 999;">
    <a href="../html/Home.html">Home</a>
    <li class="menuA"> <a class="menuB" href="Trending.html">
				<div class="wavy">

			  <span style="--i:1;">T</span>

			  <span style="--i:2;">R</span>

			  <span style="--i:3;">E</span>

			  <span style="--i:4;">N</span>

			  <span style="--i:5;">D</span>

			  <span style="--i:6;">I</span>

			  <span style="--i:7;">N</span>

			  <span style="--i:8;">G</span>

  			</div></a></li>

		<!-- This is not a copy- paste one. We have got only the idea and we modified it. -->
		<!-- codepen.io/jamwjam/pen/yJOVVd -->

    <a href="../html/Offers.html">Offers</a>
	  <a href="../html/Contact Us.html">Contact Us</a>
	  <div class="other">
		  <a href="#news">          </a>
		  <a href="#news">          </a></div>
	  <div class="rightnew">
	  <div class="dropdown">
		<button class="dropbtn"><i class="fa fa-user-o" aria-hidden="true"></i>
		  <i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-content">
      <?php if (!isLogged()): ?>
        <a href="../html/register.php">Sign Up</a>
        <a href="../html/login.php">Sign In</a>
      <?php endif; ?>

      <a href="../html/rateus.php">Rate Us</a>
      <?php if (isLogged()): ?>
        <a href="../html/Home.html">Logout</a>
      <?php endif; ?>

		</div>
	  </div>
			<div class="dropdown">
				<button class="dropbtn"><i class="fa fa-shopping-bag" aria-hidden="true"></i>
					<i class="fa fa-caret-down"></i>
				</button>
				<div class="dropdown-content">
					<a href="../html/Cart.html">My Cart</a>
					<a href="../html/Favourites.php">Favourites</a>
					<a href="../html/Cart History.html">Cart History</a>
				</div>
  			</div>
		</div>

		</div></div>
