<html>
<head>
	</head>
	<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dummy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO contact (Name,email,Comment)
VALUES ('$_GET[name]','$_GET[email]', '$_GET[comments]')";


if ($conn->query($sql) === TRUE){
    // output data of each row
header("Location:http://localhost/charity/demo.php");}
else
{

	echo "Error: " . $sql . "<br>" . $conn->error;


}
$conn->close();
?>
	</body>
</html>

























