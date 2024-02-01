<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php $title="Exercise 4"; 
	$modTime = filemtime($_SERVER['SCRIPT_FILENAME']);
	$name="";
	$age=0?>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	<?php include('header.php'); ?>
	<div class="container-fluid align-items-center">
		<div class="row justify-content-md-center">
			<div class="col"></div>
			<div class="col-md-auto">
				<h2>Voting Form</h2>
				<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
					<div class="row">
						<label for="age">Your Age:</label>
						<input type="number" id="age" name="age">
					</div>
					<div class="row">
						<label for="name">Full Name:</label>
						<input type="text" id="name" name="name">
					</div>
					<div class="row">
						<input type="submit" value="Submit">
					</div>
				</form>
			</div>
			<div class="col"></div>
		</div>
		<div class="row">
			<?php 
			// not showing errors and empty answers!!!
				if(isset($_POST['name']) && isset($_POST['age'])) {
					$name = $_POST['name']; 
					$age= $_POST['age']; 
					echo "<h2>Your Answer:</h2>" . $name . ", " . $age . ".";
					if($age<18) {
						echo "<br><b>You are below 18 and cannot vote.</b><br>";
					} else { 
						echo "<br><b>You are eligible for voting!</b><br>";
					}
				}
				// current month printing
				$currentMonth=date("F");
				switch($currentMonth) { 
					default:
						echo "It's " . date("F") . " so no holidays.";
						break;
					case "August":
						echo "August.";
						break;
				}
			?>
		</div>
		<div class="row">
			<div id="multiplication_table_form">
				<h2>Number Multiplication</h2>
				<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
					<label for="numMultiIn">Your Number:</label>
					<input type="number" id="numMultiIn" name="numMultiIn">
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
		<div class="row">
			<div id="multiplication_table">
				<table class="table table-striped">
					<thead>
						<th>Multiplication</th>
						<th>Result</th>
					</thead>
					<tbody>
						<?php 
						if(isset($_POST['numMultiIn'])) {
							$numMulti = $_POST['numMultiIn'];
							for ($i=1; $i<=10; $i++) {
								echo "<tr><td>$i</td><td>" . ($i*$numMulti) . "</td></tr>";
							}
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div id="number_ladder_form">
				<h2>Number Ladder</h2>
				<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
					<label for="numLadderIn">Your Number:</label>
					<input type="number" id="numLadderIn" name="numLadderIn">
					<input type="submit" value="Submit">
				</form>
			</div>
		</div>
		<div class="row">
			<div id="ladder_table">
				<table class="table table-striped">
					<thead>
						<th>Number</th>
					</thead>
					<tbody>
						<?php 
						if(isset($_POST['numLadderIn'])) {
							$numLadder = $_POST['numLadderIn'];
							$ladderCount = 1;
							while ($ladderCount <= $numLadder) {
								echo "<tr><td>$ladderCount</td></tr>";
								$ladderCount++;
							}
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row">
			<div id="array">
				<?php 
				echo "<h2>Array</h2>";
				$myArray = array("HTML", "CSS", "PHP", "JavaScript");
				foreach ($myArray as $x) {
				echo "$x, ";
				}
				?>
			</div>
		</div>
	</div>
	<?php include('footer.php') ?>
</body>
</html>