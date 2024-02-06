<h2>User Form</h2>
<form name="form1" method="post" action="">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="first_name">First Name:</label>
                <input type="text" class="form-control" id="first_name" placeholder="Enter your first name" name="first_name" required>
            </div>
            <div class="col">
                <label for="last_name">Last Name:</label>
                <input type="text" class="form-control" id="last_name" placeholder="Enter your last name" name="last_name" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" placeholder="Enter your city" name="city" required>
            </div>
            <div class="col">
                <label for="groupId">Group ID:</label>
                <select class="form-control" id="groupId" name="groupId">
                    <option value="BBCAP19">BBCAP19</option>
                    <option value="BBCAP20">BBCAP20</option>
                    <option value="BBCAP21">BBCAP21</option>
                    <option value="BBCAP22">BBCAP22</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

<h2>Retrieved Data</h2>
<?php
include '../database/conn.php';
include '../database/process.php';
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
					<td>{$row['id']}</td>
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
$conn->close();
?>