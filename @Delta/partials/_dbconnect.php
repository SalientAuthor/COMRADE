<?php 

$servername ='localhost';
$username ='bitroot';
$password ='qwerty';
$database='delta123';

$conn= mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("failed connect to the db COmrades".mysqli_connect_error());
}
?>