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
$sql = "INSERT INTO blood (Firstname,Lastname,email,contact_no,age,organisation,state,city,Latitude,Longitude,what_to_donate)
VALUES ('$_GET[fname]','$_GET[lname]', '$_GET[email]', '$_GET[cno]', '$_GET[age]', '$_GET[organisation]', '$_GET[state]', '$_GET[city]','$_GET[lat]','$_GET[lon]', '$_GET[don]')";


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

























