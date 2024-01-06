<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName     = "bikezone";

// Create database connection
$con = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>

</body>
</html>