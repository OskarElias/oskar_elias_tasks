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
<body>
	<?
		$title="PHP is interesting.";
		$g1=5;
		$g2=4;
		$g3=5;
		
		echo "<h3>Hello world! My name is \"David.\"</h3>";
		echo "<h4>$title</h4>";
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
</body>
</html>