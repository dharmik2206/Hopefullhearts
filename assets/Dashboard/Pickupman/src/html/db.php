<?php
// Database connection parameters
$servername = "localhost";
$username = "root";  // Default username for XAMPP MySQL is 'root'
$password = "";      // Default password is empty
$dbname = "project";  //Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname) or die('Connection failed!');

?>