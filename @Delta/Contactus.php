
<?php


if($_SERVER["REQUEST_METHOD"]=="POST"){

  include 'partials/_dbconnect.php';

  $name=$_POST['name'];
$email=$_POST['email'];
$mes=$_POST['message'];
$q="SELECT * FROM contactq WHERE name='$name' AND email='$email' AND  message='$mes' ";

$result=mysqli_query($conn,$q);
$num=mysqli_num_rows($result);

  if ($num==1) {
  	echo " <div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong> Sorry !!!</strong> Inputs already Recieved <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
  </div>";# code...
     
  }else{
    
    $qy="INSERT INTO `contactq` (`name`, `email`, `message`) VALUES ('$name','$email','$mes')";
     mysqli_query($conn,$qy);
     echo"<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Great </strong> Recorded successfully <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
    </button>
  </div> ";
  }

}
  ?>
<!DOCTYPE html>
<html>
<head>

 <title></title>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
 </head>
<body>
<?php

require "partials/_comradenav.php";
 
 ?>

<style>
 body{background-image: linear-gradient(to right,#43C6AC , #191654);
  </style>

<div class="container my-5 col-3 ">
<form action="Contactus.php"  method="POST">
            
            <h1 class="text-center">Contact Us</h1><br><br>
            <label for="inputname" class="sr-only">name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required autofocus><br>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required autofocus><br>
        
           <h5 style="color:white">Comments</h5>
            <textarea  class="form-control" input type="text" name="message"  placeholder="Message" ></textarea></br>
           
            <button class="btn btn-lg btn-primary btn-block" type="submit" >Submit</button>
            <p  class="text-center my-5">@Comrade</p>
        </form>
        </div>
        
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
  </script>


</body>
</html>