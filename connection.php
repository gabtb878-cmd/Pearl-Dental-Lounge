<?php 
   /* echo is used to print/display
   echo "Hello World! Welcome to PHP <br>";

   $name = "Abdurrahman";
   $surname = "Maihula";

   echo($name);  //displaying the content of the name variable
*/

$server = "localhost";
$username = "root";
$password = "";
$database = "dental_clinic";

// connecting to the dental_clinic database
$connection = mysqli_connect($server, $username, $password, $database); 

if ($connection) {
   echo "Connection Successful";
}


 ?>

