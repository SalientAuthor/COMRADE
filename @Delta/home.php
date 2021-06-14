
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

?>
<!DOCTYPE html>
<html>
<head>

 <title></title>
 
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
 <style>body{ 
 background: -webkit-linear-gradient(left, #43C6AC, #F8FFAE);
  background: linear-gradient(to right, #43C6AC, #F8FFAE);
  font-family: 'Roboto', sans-serif;}</style>


</head>
<body><?php
  require "partials/_comradenav.php";
 ?>
<div class="container my-5" style="max-width:90%">
       
       <table class="table table-hover table-borderless" id="mTable">
  <thead class="thead-light">
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Head</th>
      <th scope="col">Adults</th>
      <th scope="col">Child</th>
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
          <td>". $row['time'] . "</td>
          <td>". $row['location'] . "</td>  
          <td>'null'</td>
        </tr>";         
          }
          
        ?>

 
  </tbody>
</table>
      </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
  </script>
   <script src="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.js"></script>
  <script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script>
    
    $(document).ready( function () {
    $('#mTable').DataTable();
        } );
    
    </script>
</body>
</html>