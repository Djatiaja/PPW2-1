<?php
$host ='localhost'; 
$user ='root';
$password = 'asdf1234';
$database = 'db_mhs';

// Create connection
$conn = new mysqli($host, $user, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
};
?>