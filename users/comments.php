
<?php
$servername = "localhost";
$username = $_SESSION["username"];
$dbname = "comments";

// Create connection
$conn = new mysqli($servername, $username, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO comments (username, comment)VALUES ($username, $comment)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<textarea name="comment" id="comment" cols="30" rows="10"></textarea>