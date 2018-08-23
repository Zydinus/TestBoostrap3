<?php
$servername  = "localhost";
$username = "root";
$password = "";
$db_name = "3bb";
// mysql_connect($servername,$username,$password);
// mysql_select_db($db_name) or die(mysql_error());
// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (!$conn->set_charset("utf8")) {
  printf("Error loading character set utf8: %s\n",$mysqli->error);

  # code...
}

//echo ("User = ".md5("User"));

//
// // Create connection
// function connect_db($servername, $username, $password, $db_name) {
//   $conn = new mysqli($servername, $username, $password, $db_name);
//
//   // Check connection
//   if ($conn->connect_error) {
//     echo "Failed to connect to MySQL: " . $conn->connect_error;
//     exit;
//   } else {
//     //echo "Success: connected to MySQL";
//   }
//
//   return $conn;
// }
//
// // $con->close();

?>
