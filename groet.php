<!DOCTYPE html>
<html>
<head>
	<title>scale OOP</title>
</head>
<body>
	<h1> Schrijf "Hallo computer" </h1>
    <form method="post">
    	<input type="text" name="cijfer_1">
    	<input type="submit" name="submit">
    </form>
</body>
</html>
<?php


if (isset($_POST['submit'])) {	
	$reactie = $_POST['cijfer_1'];


	if ($reactie == "Hallo computer") {
    	echo "Hallo gebruiker!";
	}
	if ($reactie == "hallo computer") {
    	echo "Hallo gebruiker!";
	}
	
}
?>
