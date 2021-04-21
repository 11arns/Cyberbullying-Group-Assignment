<!DOCTYPE HTML>  
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">

<style>
	.error {color: #FF0000;}
</style>
</head>

<body>  

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
<div class="container-fluid">
	<a class="navbar-brand" href="index.html">
    <img src="img/AIA.png" alt="Logo" style="width:150px;">
	</a>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item dropdown">
			  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Cyberbullying</a>
			  <div class="dropdown-menu">
				<a class="dropdown-item" href="what.html">What Is Cyberbullying?</a>
				<a class="dropdown-item" href="who.html">Who Is Targeted?</a>
				<a class="dropdown-item" href="#">How Does Cyberbullying Happens?<a>
				<a class="dropdown-item" href="#">What Are The Types of Cyberbullying?<a>
			  </div>
			</li>
			<li class="nav-item dropdown">
			  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Prevention</a>
			  <div class="dropdown-menu">
				<a class="dropdown-item" href="prevent.html">Prevent Cyberbullying </a>
				<a class="dropdown-item" href="gaming.html">Cyberbullying and Online Gaming</a>
				<a class="dropdown-item" href="parents.html">Digital Awareness for Parents</a>
			  </div>
			</li>
			<li class="nav-item dropdown">
			  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Take Action</a>
			  <div class="dropdown-menu">
				<a class="dropdown-item" href="haters.html">How to Deal With Haters?</a>
				<a class="dropdown-item" href="report.html">How to Report?</a>
				<a class="dropdown-item" href="#">What Teens Can Do?</a>
				<a class="dropdown-item" href="#">Laws and Policies</a>
			  </div>
			</li><li class="nav-item">
				<a class="nav-link" href="#">About us</a>
			</li>
			<p>
			<li class="nav-item">
				<a class="nav-link" href="contact.php">Contact</a>
			</li>
			</p>
		</ul>
	</div>
</div>
</nav>

<div style="background-image: url('img/blue2.jpg');">

<div class="container-fluid padding">

 </br>
<div class="box">
	<div class="col-12 contact">
	
	<?php
// define variables and set to empty values
$nameErr = $emailErr = $phoneErr = $genderErr = $commentErr = $amountErr = "";
$name = $email = $phone = $gender = $comment = $amount = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
   if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
    
	if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
  
  if (empty($_POST["phone"])) {
    $phoneErr = "Phone number is required";
  } else {
    $phone = test_input($_POST["phone"]);
  }
  

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

<div class="row Title text-center">
	<div class="col-12">
		<h1 class="display-4">Contact Us</h1>
		<p><span class="error">* required field</span></p>

<form  action="Submit.php" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  method="post" >  


  Name: <br><input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <br><input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>

    Gender: <br>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  
  Phone number: <br>
  <input type="text" name="phone" value="<?php echo $phone;?>">
   <span class="error">* <?php echo $phoneErr;?></span>
  <br><br>

   Comments/Suggestions: <br> <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
  <br><br>
   <input type="submit" class="btn btn-outline-dark" name="submit" value="Submit">  
</form>
</div>
</form>
	</div>	
	</div>	
</div>	
</div>
</div>


<!-- footer-->
<footer>
<div class="container-fluid">
<div class="row text-center">
	<div class="col-lg-6">
		<hr class="light">
		<h5>FOLLOW US</h5>
		<hr class="light">
			<div class="col-12 social">
			<a href="https://www.facebook.com/sabella/"><i class="fab fa-facebook"></i></a>
			<a href="https://www.twitter.com/Nurizz46/"><i class="fab fa-twitter"></i></a>
			<a href="https://www.instagram.com/nrzti_rmln/"><i class="fab fa-instagram"></i></a>
			<a href="https://mail.google.com/mail/"> <i class="fa fa-envelope"></i></a>
			</div>
	</div>
	<div class="col-lg-6">
		<hr class="light">
		<h5>CONTACT INFO</h5>
		<hr class="light">
		<p>Email : aiacenter@gmail.com</p>
		<p>Saturday: 10pm - 12pm</p>
		<p>Friday: closed</p>
	</div>
	<div class="col-12">
		<hr class="light-100">
		<h5>&copy; AIAcenter.com</h5>
	</div>
</div>
</div>
</footer>




</body>
</html>
