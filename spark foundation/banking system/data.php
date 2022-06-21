<?php



//connecction 

$servername = "localhost";
$username = "mansi";
$password = "12345";
$databasename = "customer";

//connection object 

$conn = new mysqli($servername, $username,$password, $databasename);

// if($conn -> connect_error){
//     die("sorry not connected ".$conn -> connect_error);
// }
// echo "connection done";

?>