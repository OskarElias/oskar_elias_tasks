<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exercise 1: Getting Started with PHP - Oskar</title>
	<style>
		table, th, td {
			border: 1px solid black;
			/* border-radius: 10px; */
		}
	</style>
</head>
<?php 
include "header.php"; ?>
<body>
	<?php
		$title="PHP is interesting.";
		$g1=5;
		$g2=4;
		$g3=5;
		echo "<h3>I. Write PHP code to output the following message:</h3>";
		echo "<span>Hello world! My name is \"David.\"</span>";
		echo "<h3>II. Create a PHP variable named $title and assign it the value \"PHP is interesting.\" Then, use this variable as the content within a (heading 4) element.</h3>";
		echo "<span>$title</span>";
		echo "<h3>III. Define three variables: $g1 = 5, $g2 = 4, and $g3 = 5. These variables represent the grades of three students in the course. To display this information, create an HTML table within your PHP code. The table should be structured with columns for Serial Number (S.n.), Name, and Grade, and it should look like this:</h3>";
	?>
	<div class="table">
		<table>
			<thead>
				<th>S.n.</th>
				<th>Name</th>
				<th>Grade</th>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>John</td>
					<td><?=$g1?></td>
				</tr>
				<tr>
					<td>2</td>
					<td>Alice</td>
					<td><?=$g2?></td>
				</tr>
				<tr>
					<td>3</td>
					<td>Bob</td>
					<td><?=$g3?></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="others">
		<h3>IV. Take a screenshot that confirms your development environment setup and include it as an image in the \"ex1.php\" file.</h3>
		<img src="./img/ex1_1.png">
		<h3>V. Commit all the changes you've made and push them to your GitHub repository to complete the task.</h3>
		<span><a href="https://github.com/OskarElias/oskar_elias_tasks">GitHub Repo Link</a></span>
	</div>
<?php
include "footer.php"; ?>
</body>
</html>