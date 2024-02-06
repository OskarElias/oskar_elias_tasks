<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php $title="Exercise 3"; 
	$modTime = filemtime($_SERVER['SCRIPT_FILENAME']);?>
</head>
<?php include '../layout/header.php'; ?>
<body>
    <button onclick="document.location='add.php'">Add</button>
    <button onclick="document.location='read.php'">Read</button>
    <?php
    include '../layout/footer.php';
    ?>
</body>
</html>