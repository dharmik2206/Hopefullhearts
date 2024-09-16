<?php
// Database connection parameters
$servername = "localhost";
$username = "root";  // Default username for XAMPP MySQL is 'root'
$password = "";      // Default password is empty
$dbname = "external_project_hopefull_hearts";  //Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname) or die('Connection failed!');

?>