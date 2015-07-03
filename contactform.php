<?php


$Name = htmlspecialchars($_POST['Name']);
$Email = htmlspecialchars($_POST['Email']);
$Comment = htmlspecialchars($_POST['Comment']);


/*
echo "name: $Name<br />";
echo "email: $Email<br />";
echo "comment: $Comment<br />";

/* Test stuff
$name = "Jayson";
$email = "jays@test.com";
$comment = "testing test stuff";



*/

//Connect to DB

$servername = "localhost";
$username = "";
$password = "";
$dbname = "contact_form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO saltwind (name, email, Comment)
VALUES ('$Name', '$Email', '$Comment')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();

sleep(2);
echo "<meta http-equiv='refresh' content=\"0; url=/saltwind\">";


?>