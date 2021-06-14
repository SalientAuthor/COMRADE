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
       
		$sql="INSERT INTO `delta123`.`eagle` (`name`, `email`, `password`) 
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


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title></title>
        <!-- Bootstrap core CSS -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
       
        <link href="bootstrap/css/sign-in.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<style>body { font-family: "Lato", sans-serif; } 
    .sidenav {
     height: 100%;
      width: 0; 
      position: absolute;
       z-index: 1;
        top: 0; 
        left: 0;
         background-color: #111; 
         overflow-x: hidden; 
         transition: 0.5s; 
         padding-top: 60px; } 

        .sidenav a { 
          padding: 8px 8px 8px 32px; 
          text-decoration: none; 
          font-size: 25px; 
          color: #818181; 
          display: block; 
          transition: 0.3s; } 


          .sidenav a:hover { 
            color: #f1f1f1; } 
         
            @media screen and (max-height: 450px) { .sidenav {  padding-top: 30px; }  
         .sidenav a {  font-size: 18px; } }

       </style>

    </head>
    <style>body{ 
background-image: url("wall/abstract-winter-storm-3840x2160.jpg"); background-repeat:no-repeat ; background-size:cover;}</style>
    <body >
 
        <form class="form-horizontal" action="eaglesignup.php" class="form-signin" method="POST">
            
            <h1>Eagle</h1><br><br>
            <label for="inputusername" class="sr-only" >Username</label>
            <input type="text" name="username"id="username" class="form-control"  placeholder="Username" required autofocus><br>
            <label for="inputname" class="sr-only">name</label>
            <input type="text" name="name"id="name" class="form-control" placeholder="Legal name" required autofocus><br>
            
			<label for="inputEmail" class="sr-only" cols="4">Email address</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus><br>
            
			<label for="inputcontact" class="sr-only">Contact Number</label>
            <input type="phone" name="phone" id="phone" class="form-control" placeholder="phone" required autofocus><br>
            
			<label for="inputage" class="sr-only">Age</label>
            <input type="age" name="age" id="age" class="form-control" placeholder="Age" required autofocus><br>
            
			<label for="inputoccupation" class="sr-only">occupation</label>
            <input type="text" name="work" id="work" class="form-control" placeholder="Occupation" required autofocus><br>
            
			<label for="inputpin" class="sr-only">pin</label>
            <input type="pin" name="pin" id="pin" class="form-control" placeholder="Pin Code" required autofocus><br>
           
			<label for="inputcity" class="sr-only">city</label>
            <input type="text" name="city" id="city" class="form-control" placeholder="city" required autofocus><br>
           

			<label for="inputaddress" class="sr-only">Address</label>
            <textarea input type="text" name="address" id="address" class="form-control" placeholder="Residence" required autofocus>Valid Address
           </textarea><br>

			<label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Set Password" required>
            <label for="inputPassword" class="sr-only">CPassword</label>
            <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Confirm Password" required>
            
			
			
			<div class="checkbox mb-3">
                
                 
                     <label><a href="eaglelogin.php"> Already Have Account Yet?</label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Signup</button>
            <p class="mt-5 mb-3 text-muted">@Eagle</p>
        </form>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        
 <div id="mySidenav" class="sidenav"> 
            
            <a href="home.php" target="myFrame"><h1>Comrade</h1></a>
            <br> 
            <a href="Eaglehero.php"target="myFrame">Who is Eagle ?</a> 
            <a href="Contactus.php" target="myFrame">Contact Us</a> 
        </div>       
        <span style="font-size:30px;
        cursor:pointer;
        display:grid;
        grid-template-columns:1fr 1fr 1fr;
        grid-template-rows:38px;
        " onclick="openNav()">&#9776;</span>
     
        <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}

</script>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
