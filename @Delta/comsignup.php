<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
	
	$showalert=false;
	include 'partials/_dbconnect.php';
	
	$username =$_POST["username"];
	$email=$_POST["email"];
	$password =$_POST["password"];
	$cpassword =$_POST["cpassword"];
	$exists=false;
	if(($password == $cpassword) && $exists==false){
       
		$sql="INSERT INTO `delta123`.`comrades` (`name`, `email`, `password`) 
		VALUES ('$username', '$email', '$password')";
		
		$result=mysqli_query($conn,$sql);
		if($result){
			$showalert=true;
			if($showalert){
				echo"<div class='alert alert-success alert-dismissible fade show' role='alert'>
				  <strong>successfull</strong>Signup successfully & you can login now! <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
					<span aria-hidden='true'>&times;</span>
				  </button>
				</div> ";}else{
			echo"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
			<strong>successfull</strong>Signup successfully & you can login now! <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
			  <span aria-hidden='true'>&times;</span>
			</button>
		  </div> ";}
		}
	}
   }
?>

<!DOCTYPE html>

<html>
<head>
<title>Comrade Sign up</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/csssignup2.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->

<!-- //web font -->
</head>
<body>

	<!-- main -->
	<div class="main-w3layouts wrapper">
		<br><br><br><br><br><br><h1  style="color:neon">Sign up</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="comsignup.php" method="POST">
					<input class="text" type="text" id="username" name="username" placeholder="Username" required="">
					<input class="text email" type="email" id="email" name="email" placeholder="Email" required="">
					<input class="text" type="password" id="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" id="password" name="cpassword" placeholder="Confirm Password" required="">
					<div class="wthree-text">
						
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGNUP">
				</form>
				<p>Already Have an Account<br> <a href="comlogin.php"> Login Now!</a></p>
			</div>
		</div>
		<!-- copyright -->
		
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>