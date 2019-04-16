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
$sql = "INSERT INTO volunteer (username,email,contact_no,adhaar_no,gender,Password,Confirm_password)
VALUES ('$_GET[usrname]','$_GET[email]', '$_GET[cno]', '$_GET[adhaar]','$_GET[gen]','$_GET[pass]','$_GET[rpass]')";
$result = $conn->query($sql);

if ($conn->query($sql) === TRUE){
    // output data of each row
echo"now u r registered.........................";
}
else
{

	echo "Error: " . $sql . "<br>" . $conn->error;


}
$conn->close();
?>
	</body>
</html>

























