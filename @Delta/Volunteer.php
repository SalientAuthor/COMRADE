<!--
Author: Colorlib
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
//connect to the Databse
$INSERT=false;
$servername = "LocalHost";
$username = "bitroot";
$password = "qwerty";
$database = "curd";
// create connection;
$conn = mysqli_connect($servername,$username,$password,$database);
//die if unsucessful
if(!$conn){

  die("failed". mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD']== "POST"){

$header = $_POST["header"];
$adultsnum = $_POST["adultsnum"];
$childrennum = $_POST["childrennum"];
$contactnum = $_POST["contactnumber"];
$location = $_POST["location"];
$report = $_POST["Report"];

// sql query to be executed 
$sql ="INSERT INTO `curd`.`groundreport` (`name`, `adults`, `childrens`, `phone number`, `location`, `Report`) 
VALUES ( '$header', '$adultsnum', '$childrennum', '$contactnum', '$location', '$report') " ;
$result=mysqli_query($conn,$sql);

// add a new trip to the trip in the Database
if($result){
  //echo "the report has been submitted succesfully";
  $INSERT=true;
}else{
  echo "error occur ---->".mysqli_error($conn);
}
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    
    <title>volunteer</title>
  </head>
  <body>
  <?php
  require "partials/_comradenav.php";
 ?>



        <?php
        if($INSERT){
       echo "
       <div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>successfull !!!</strong>your report submitted successfully ! <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div> ";
       }
        
        ?>

      <div class="container my-5" >
         <h2>Reports</h2><br>
        <form action="volunteer.php" method="POST" >
          
            <div class="form-group">
              <label for="header">Header</label>
              <input type="text" class="form-control" id="header" name="header">
            </div>
            <div class="form-group">
                <label for="number">Adults</label>
                <input type="number" class="form-control" id="adultsnum" name="adultsnum" >
              </div>
            <div class="form-group">
                <label for="number">Childrens</label>
                <input type="number" class="form-control" id="childrennum" name="childrennum">
              </div>
              <div class="form-group">
                <label for="tel">Contact Number</label>
                <input type="tel" class="form-control" id="contactnumber"  name="contactnumber">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Location</label>
                    <input type="text" class="form-control" id="location" name="location" aria-describedby="Couponcode">
                </div>
                <div class="form-group">
                    <label for="Report">Additional Report</label>
                    <textarea class="form-control" id="Report"  name="Report"  rows="3"></textarea>
                  </div>
              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>


        <div class="container">
       
       <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Head</th>
      <th scope="col">Adults</th>
      <th scope="col">Child</th>
      <th scope="col">Contact</th>
      <th scope="col">Report</th>
      <th scope="col">Time</th>
      <th scope="col">location</th>
      <th scope="col">Action</th>
    </tr>
  

  </thead>
  <tbody>
  <?php
        
         $sql="SELECT * FROM groundreport ";
         $result =mysqli_query($conn,$sql);
          $id=0;
         while($row = mysqli_fetch_assoc($result)){
          $id =$id+1;
          echo "<tr>
          <th scope='row'>".$id. "</th>
          <td>". $row['name'] . "</td>
          <td>". $row['adults'] . "</td>
          <td>". $row['childrens'] . "</td>
          <td>". $row['phone number'] . "</td>
          <td>". $row['Report'] . "</td>
          <td>". $row['time'] . "</td>
          <td>". $row['location'] . "</td>  
          <td> <a href='/edit'>Edit</a>/<a href='/del'>Delete</a></td>
        </tr>";         
          }
          
        ?>

 
  </tbody>
</table>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
    
    $(document).ready( function () {
    $('#myTable').DataTable();
        } );
    
    </script>
  </body>
</html>