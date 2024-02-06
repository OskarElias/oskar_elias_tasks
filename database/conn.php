<?php
// logon session info
$servername = "web-dev-env-main-db-1";
$username = "crudApp";
$password = "password";
$dbname = "crudApp";

// establish connection
$conn = new mysqli($servername, $username, $password, $dbname);
// check connection
if ($conn->connect_error) {
	// Connection Failed: error msg (wrong username, pwd, ...)
	die("Connection Failed: " . $conn->connect_error);
}