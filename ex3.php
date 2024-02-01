<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php $title="Exercise 3"; 
	$modTime = filemtime($_SERVER['SCRIPT_FILENAME']);?>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<?php include 'header.php'; ?>
<body>
	<div class="container-fluid align-items-center">
		<div class="row justify-content-md-center">
			<div class="col"></div>
			<div class="col-md-auto">
				<h2>HTML Form</h2>
				<form action="form_submit.php" method="post">
					<div class="row">
						<label for="fname">First Name:</label>
						<input type="text" id="fname" name="fname">
					</div>
					<div class="row">
						<label for="lname">Last Name:</label>
						<input type="text" id="lname" name="lname">
					</div>
					<div class="row justify-content-md-center">
						<div class="col-md-4">
							<input type="submit" value="Submit">
						</div>
					</div>
				</form>
			</div>
			<div class="col"></div>
		</div>
	</div>
	<div class="container">
		<table class="table table-striped">
			<thead>
				<th>First Name</th>
				<th>Second Name</th>
			</thead>
			<tbody>
				<tr>
					<td>FName 1</td>
					<td>LName 1</td>
				</tr>
				<tr>
					<td>FName 2</td>
					<td>LName 2</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div id="string ops">
		<?php 
			$str1="Hello";
			$str2="World";
			$str3= $str1 . " " . $str2;
			echo "<h2>$str3</h2>Length of string: " . strlen($str3);
		?>
	</div>
	<div id="num ops">
		<?php 
		function addup(){
			$num1=298;
			$num2=234;
			$num3=46;
			echo "Summed numbers:<br>$num1 + $num2 + $num3 = " . ( $num1 + $num2 );
		}
		echo addup();
		?>
	</div>
</body>
<?php include 'footer.php'; ?>
</html>