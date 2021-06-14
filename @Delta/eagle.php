<!DOCTYPE html> 
<html> 
    <head> 
        <title></title>         
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> 
        
      <style>body { font-family: "Lato", sans-serif; } 
    .sidenav {
     height: 100%;
      width: 0; 
      position: absolute;
       z-index: 1;
        top: 80px; 
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
        
        <style type="text/css">
        iframe 
      { height: 85vh; 
      width: 80%; 
    margin-left: 16%; 
  top:0;
  transition: width 2s; 
     }

   #iframe {transition-timing-function: ease; }
   iframe:hover
   {
    width: 83%;

   }


  </style>         
    </head>     
    <body> 
        <style>body { background-image: url("wall/digital-sunrise-1920x1080.jpg"); background-repeat: no-repeat ; background-size: cover; }</style>         
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
            <a class="navbar-brand" href="joiningComradeform.php"><h1>Eagle</h1></a> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="navbar-toggler-icon"></span> 
            </button>             
            <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
                <ul class="navbar-nav ml-auto"> 
                    <li class="nav-item active"> 
                        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a> 
                    </li>                     
                    <li class="nav-item"> 
                        <a class="nav-link" href="joiningComradeform.php">JoinAS comrade</a> 
                    </li>                     
                    <li class="nav-item dropdown"> 
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">JoinAs</a> 
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown"> 
                            <a class="dropdown-item" href="Volunteryform.php">Volunteer</a> 
                        </div>                         
                        <li class="nav-item"> 
                            <a class="nav-link" href="about.php">About</a> 
                        </li>                         
                        <li class="nav-item"> 
                            <a class="nav-link" href="Contactus.php">Contact Us</a> 
                        </li>                         
                </ul>                 
                <form class="form-inline my-2 my-lg-0"> 
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> 
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>                     
                </form>                 
            </div>             
        </nav>         
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
  </script>         
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
  </script>         
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
  </script>         
        <div id="mySidenav" class="sidenav"> 
            
            <a href="home.php" target="myFrame">Requests</a> 
            <a href="about.php"target="myFrame">Work</a> 
            <a href="Contactus.php" target="myFrame">Monitoring</a> 
        </div>       
        <span style="font-size:30px;
        cursor:pointer;
        display:grid;
        grid-template-columns:1fr 1fr 1fr;
        grid-template-rows:38px;
        " onclick="openNav()">&#9776;</span>
     
        <script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

</script>
          <iframe name="myFrame" frameborder="0"></iframe>         
   </div> 

 </body>     
</html>