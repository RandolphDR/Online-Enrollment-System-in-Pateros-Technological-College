<?php
    $conn = mysqli_connect("localhost", "root", "", "enrollmentsystem_db");

    if ($conn->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }
?>