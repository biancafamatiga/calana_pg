<?php
    // Declare variables for connection
    $database = 'calana_db';
    $username = 'root';
    $password = '';
    $host = 'localhost';
    
    // Create connection using object-oriented style
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection status
    if ($conn->connect_error) {
        // If connection failed, display error message and exit
        die("Connection failed: " . $conn->connect_error);
    }
?>