<?php

$id = 1;
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

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
VALUES ($id, $name, $email, $comment)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

sleep(2);
//echo "<meta http-equiv='refresh' content=\"0; url=http://www.convictioneliquid.info/conviction/form.php\">";


?>