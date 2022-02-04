<?php

require_once('../includes/config.php');
include('../includes/header.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $err = '';
  $username = $_POST['username'];
  $password = $_POST['password'];

  $user = findUser($username);

  if (!empty($user)) {
    //varify PASSWORD
    if (password_verify($password, $user['password'])) {
      $_SESSION['logged'] = 1;
          $_SESSION['userId'] =$user['id'];
          header('Location: ./index.html');
    }else{
      $err= 'Invalid Password !';
    }
  }else{
    $err= 'Invalid Username !';
  }
}


 ?>

 <body id="bodypadding" style="background-size: 100% 80%;" class="BodyColor"><br>



 	<p id="paragraph1"><a href="rateus.php">Tell us what you think?</a><p>
 	<center>
 		<img src="../images/C/hello.jpg" height="15%" width="30%">
 	</center>
 	<br>
 	<P id="paragraph2"> Sign in to White Light or <a href="./register.php">create an account</a></P><br>

  <?php if (isset($err) && !empty($err)): ?>
    <div class="alert alert-danger" style="max-width: 780px;margin: 0 auto;">
      <?=$err?>
    </div>
  <?php endif; ?>


 	<form action="<?=$_SERVER['PHP_SELF']?>"  method="post">
         <div class="container">



 			<label >Username : </label>
             <input id="input" type="text" placeholder="Enter Username" name="username" required><br>
             <label > Password  : </label>
             <input id="input" type="password" placeholder="Enter Password" name="password" required><br>
 			<input type="checkbox" checked="checked"> Remember me <br>
             <button type="submit">Login</button>
 		</div>
 	</form>



 <?php
    include('../includes/footer.php');

    ?>
