<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "react_sample";

$connect = new mysqli($servername, $username, $password, $db);

$query = "INSERT INTO comment_box (author, comment_text) VALUES ";
for($x=0; $x<=20; $x++)
{
	$query .= "('author_$x', 'comment_$x')";

	if ($x != 20)
	{
		$query .= ",";
	}
}
$connect->query($query);
$connect->close();

echo "success";
?>