<?php
// host
$host = "localhost";
// database name
$db_name = "PHP-authentication-system";
// user
$username = "root";
// password
$password = "";
$conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);


// testing if connection is working fine

// if($conn == true){
//     echo "Connection is ok";
// }

// else{
//     echo "connection is wrong: err!";
// }

?>