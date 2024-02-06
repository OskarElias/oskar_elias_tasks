<?php
$title="Read Data";
include '../layout/header.php';
include '../database/conn.php';
// retrieving data
$sql = "SELECT * FROM studentsinfo";
// execute query and show result if data present
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo 
	"<table class='table'>
		<thead>
			<tr>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>City</th>
				<th>Group ID</th>
			</tr>
		</thead>
		<tbody>";
			while ($row = $result->fetch_assoc()) {
				echo 
				"<tr>
					<td><a href='updatesingle.php?id=$row[id]'>$row[id]</a></td>
					<td>{$row['first_name']}</td>
					<td>{$row['last_name']}</td>
					<td>{$row['city']}</td>
					<td>{$row['groupId']}</td>
				</tr>";
			}
		echo "</tbody></table>";
} else {
	// display message if no results found
	echo "No results.";
}
include '../layout/footer.php';
?>