<?php
    // Declare variables for connection
    $database = 'calana_db';
    $username = 'if0_34621220';
    $password = 'slayerz123';
    $host = 'ftpupload.net';
    
    // Create connection using object-oriented style
    $conn = new mysqli($host, $username, $password, $database);

    // Check connection status
    if ($conn->connect_error) {
        // If connection failed, display error message and exit
        die("Connection failed: " . $conn->connect_error);
    }
?>
