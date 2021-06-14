<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  
  $login=false;
	$showalert=false;
	include 'partials/_dbconnect.php';
	
	$username =$_POST["username"];
	$email=$_POST["email"];
	$password =$_POST["password"];
	  $sql="SELECT * FROM `comrades` WHERE name='$username' AND email='$email'  ";
    $result = mysqli_query($conn, $sql);
    
    if($result){
      $num = mysqli_num_rows ($result);  
      if($num == 1){
        $login=true;
       
        if($login){
          echo"<div class='alert alert-success alert-dismissible fade show' role='alert'>
              <strong>Hello !!!! </strong>Login successfully <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
              </button>
            </div> ";
          }else{
            echo"<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <strong>Sorry !!!! </strong>Invalid Credentials <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
            </button>
          </div> ";
                }
               
                session_start();
                $_SESSION['loggedin']=true;
                $_SESSION['username']=$username;
                header("location: comrade.php");      
    }else{
      echo "::::".$sql;
      echo"LOGIN FAILED::";
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

<style>
body { font-family: "Lato", sans-serif; } 
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
    <body class="text-center">
    <style>body{ 
background-image: url("wall/yosemite-2560x1440-5k-4k-wallpaper-8k-winter-snow-forest-osx-apple-3945.jpg"); background-repeat:no-repeat ; background-size:cover;}</style>
   
        <form action="comlogin.php" class="form-signin" method="POST">
            
            <h1>Login</h1><br><br>
            <label for="inputEmail" class="sr-only">Username</label>
            <input type="text" name="username"id="username" class="form-control" placeholder="Username" required autofocus><br>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus><br>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
            <div class="checkbox mb-3">
                
                 
                     <label><a href="comsignup.php"> Don't  Have Account Yet?</label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
            <p class="mt-5 mb-3 text-muted">@Comrade</p>
        </form>
        <!-- Bootstrap core JavaScript
    ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        
 <div id="mySidenav" class="sidenav"> 
            
            <a href="home.php" target="myFrame"><h1>Comrade</h1></a>
            <br> 
            <a href="comradehero.php"target="myFrame">Are You Comrade ?</a> 
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
