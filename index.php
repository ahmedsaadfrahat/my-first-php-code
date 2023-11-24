<?php
//1- while foor loop
$a= 1;
  while ( $a <= 10) {
  echo "$a<br>";
  $a++;
}
// 2-do while for loop 
$i= 15  ;
do {
  echo"$i<br>";
  $i++;
} while ($i <= 10);
// INCLUD $ REQUIER
$name ="ahmed saad";
include("php.php");
echo($name);
// INCLUD once $ REQUIER once

include_once ("php.php");
echo("<br>");
echo($g);
 
$g = 50;

echo("<br>");
include_once ("php.php");
echo("<br>");
echo($g); 


// // ********************
// if(isset($post['con'])){
//   $host = 'loclhost';

// } -->

// <!DOCTYPE html>
// <html lang="en">
// <head>
//   <meta charset="UTF-8">
//   <meta name="viewport" content="width=device-width, initial-scale=1.0">
//   <title>Document</title>
// </head>
// <body>
// <?php
// $servername = "localhost";
// $username = "username";
// $password = "password";

// try {
//   $conn = new PDO("mysql:host=$servername;dbname=my database", $username, $password);
 
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }
// </body>
// </html>

// some functions thaat i learnt 

$d = ("karam");
echo("<br>");
echo substr($d,2);

// *********************


