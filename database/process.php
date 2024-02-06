<?php
if (isset($_POST['submit'])) {
	$fname = $_POST['first_name'];
	$lname = $_POST['last_name'];
	$city = $_POST['city'];
	$groupid = $_POST['groupId'];
	// connecting to db server
	include 'conn.php';
	// insert data to db
	$sql = "INSERT INTO studentsinfo(first_name,last_name,city,groupId)
			VALUES ('$fname','$lname','$city','$groupid')";
	// if query success
	if ($conn->query($sql)==true) {
		echo "Your data has been recorded successfully.";
	} else {
		// Error: 
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	// close connection
	$conn->close();
}