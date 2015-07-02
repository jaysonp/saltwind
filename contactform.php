<?php

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Comment = $_POST['Comment'];
/*Check whether the form has been submitted
if (array_key_exists('check_submit', $_POST)) {
	$Name = $_POST['Name'];
	$Email = $_POST['Email'];
	$Comment = $_POST['Comment'];
}


$id = 1;
/* Test stuff
$name = "Jayson";
$email = "jays@test.com";
$comment = "testing test stuff";
*/

echo "name: $Name<br />";
echo "email: $Email<br />";
echo "comment: $Comment<br />";

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

$sql = "INSERT INTO saltwind (id, name, email, Comment)
VALUES ('$id', '$Name', '$Email', '$Comment')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

sleep(2);
//echo "<meta http-equiv='refresh' content=\"5; url=/saltwind\">";


?>