<?php

//Connect to DB

$servername = "localhost";
$username = "root";
$password = "2wsxcde3";
$dbname = "contact_form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO salt_wind (name, email, Comment)
VALUES ('$_POST[name]', '$_POST[email]', '$_POST[comment]')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>