<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'Login');
 
 Attempt to connect to MySQL database 
$connect = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD , DB_NAME);*/
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "Login");

$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);// Check connection
if($conn === false){
    die("ERROR: Could not connect. " .mysqli_connect_error());
}
?>