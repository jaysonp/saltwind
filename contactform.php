<?php

//Check whether the form has been submitted
if (array_key_exists('check_submit', $_POST)) {
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$comment = htmlspecialchars($_POST['comment']);
}

$id = 1;

echo "name: $name<br />";
echo "email: $email<br />";
echo "comment: $comment<br />";

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

$sql = "INSERT INTO saltwind (id, name, email, Comment)
VALUES (NULL, $name, $email, $comment)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

sleep(2);
//echo "<meta http-equiv='refresh' content=\"0; url=http://www.convictioneliquid.info\">";


?>