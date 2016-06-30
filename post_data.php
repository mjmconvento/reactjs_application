<?php
date_default_timezone_set("Asia/Manila");

$servername = "localhost";
$username = "root";
$password = "";
$db = "react_sample";

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
	// Create connection
	$conn = new mysqli($servername, $username, $password, $db);
	$author = $_POST["author"];
	$comment = $_POST["text"];
	$now =  new DateTime();
	$date_post = $now->format('Y/m/d H:i:s');
	$query = "INSERT INTO comment_box (author, comment_text, post_date) VALUES ('$author', '$comment', '$date_post')";
	$result = $conn->query($query);

	$conn->close();
}


// for removing error
$conn = new mysqli($servername, $username, $password, $db);

$query = "SELECT * FROM comment_box ORDER BY id DESC LIMIT 10";
$result = $conn->query($query);

$empty_array = array();
while($row = $result->fetch_assoc()) 
{
	$empty_array[] = $row; 
}
	
$conn->close();	
echo json_encode($empty_array);

?>