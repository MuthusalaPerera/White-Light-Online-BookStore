
<?php
require_once('../includes/config.php');
include('../includes/header.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $errors = [];
  if(findUser($_POST['username']))
    $errors[] = 'Username is already exists !';

  if($_POST['password'] != $_POST['confirm_password'])
    $errors[] = 'Password is does not match !';

  if (empty($errors)){
    $userId = addUser();
    if(!empty($userId)){
          $_SESSION['logged'] = 1;
          $_SESSION['userId'] =$userId;
          header('Location: ./index.html');
		  exit;
    }else{
      $errors[] = 'User registation failed !';
    }

  }


}


 ?>

<body id="bodypadding" style="background-size: 100% 80%;"><br>

<h1 class="title">Welcome to White Light!</h1><br>
<table class="table">
<td>
<h2 align="center">Create an Account</h2><br>

<?php if (isset($errors) && !empty($errors)): ?>
    <?php foreach ($errors as $err): ?>
      <div class="alert alert-danger">
        <?=$err?>
      </div>
    <?php endforeach; ?>
<?php endif; ?>

<form action="register.php" target="_self" method="POST" onsubmit="return checkPasswords()">
	<label> First Name</label> <br>
	<input type="text" id="fname" name="fname" style="width:100%;" placeholder="Enter your first name here" required ><br><br>
	<label> Last Name</label> <br>
	<input type="text" id="lname" name="lname" style="width:100%;" placeholder="Enter your last name here" required  ><br><br>
	<label for="country">Country</label><span style="color: red !important; display: inline; float: none;">*</span>

            <select id="country" name="country" class="form-control">

                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Belgium">Belgium</option>
                <option value="Brazil">Brazil</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Denmark">Denmark</option>
                <option value="Egypt">Egypt</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="Germany">Germany</option>
                <option value="Greece">Greece</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Ireland">Ireland</option>
                <option value="Italy">Italy</option>
                <option value="Japan">Japan</option>
                <option value="Kenya">Kenya</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mexico">Mexico</option>
                <option value="Namibia">Namibia</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Norway">Norway</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Portugal">Portugal</option>
                <option value="Romania">Romania</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="South Africa">South Africa</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Thailand">Thailand</option>
                <option value="Turkey">Turkey</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select><br><br>

	Gender<br>
	<input type="radio" id="gender" value="male" name="gender" checked>Male
	<input type="radio" id="gender" value="female" name="gender" > Female<br><br>
	<label for="birthday">Birthday:</label><br>
	<input type="date" id="bday" name="bod"><br><br>
	<label> Email Address</label> <br>
	<input type="email" id="emailAdd" name="email" style="width:100%;" pattern="[a-zA-Z0-9.-+%]+@[a-zA-Z0-9]+\.[a-z]{2,3}" placeholder="Enter valid email address here" required ><br><br>

	<label> Username</label> <br>
	<input type="text" id="lname" name="username" style="width:100%;" placeholder="Enter Username" required  ><br><br>
	Password<br>
	<input type="password" id="pswrd" name="password" style="width:100%;" pattern="[a-zA-Z0-9]{5,10}" required><br><br>
	Confirm Password<br>
	<input type="password" id="rpswrd" name="confirm_password" style="width:100%;" required><br><br>

	Accept privacy policy terms
	<input type="checkbox" id="policy" name="policy" required onclick ="enableButton()"><br><br>

	<input type="submit" id="btn1" name="btn1" style="width:100%"  value=" SIGN UP FREE"   ><br><br>

	<p align="center">Have an Account?<a class="logincolor" href="login.php">Log in</a></P><br>

</form>
</td>
</table>

<?php
   include('../includes/footer.php');

   ?>
