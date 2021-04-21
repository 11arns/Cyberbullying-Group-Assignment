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

<div class="row Title text-center">
	<div class="col-12">	
	
	<br>

	<div class="center">
			<img src="img/thanks.gif"class="center" style="width:100%">
<?php
//retrieve form data in a variable
$input = $_POST ['name'];
$input1 = $_POST ['email'];


//print it
echo "<br>";
echo "<h4>Thank you<h5><b>$input</b></h5>for contact us!</h4>";
echo "<br>";

?>


</div>
<br>

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
