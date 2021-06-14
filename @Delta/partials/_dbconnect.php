<?php 

$servername ='localhost';
$username ='<DB username>';
$password ='<DB password>';
$database='<DB name>';

$conn= mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("failed connect to the db COmrades".mysqli_connect_error());
}
?>
