<?php

    // MySQL database credentials
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bakewithme";

    // Create a new connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind the INSERT statement
    $stmt = $conn->prepare("INSERT INTO signup (name, lastname, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $lastname, $email, $password);

    // Get the form data
    $name = $_POST['name'] ?? '';
    $lastname = $_POST['lastname'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    // Execute the statement
    if ($stmt->execute()) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . $conn->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
    header("location: login.php");
    die();
?>
