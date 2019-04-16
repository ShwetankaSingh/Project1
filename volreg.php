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

$sql = "INSERT INTO volunteer (username,email,contact_no,gender,aadhar_no,password,confirm_password)
VALUES ('$_GET[name]','$_GET[email]', '$_GET[con]','$_GET[gen]','$_GET[aadhar]','$_GET[pass]','$_GET[repass]')";

if ($conn->query($sql) === TRUE) {
    echo "Now you are registered.....";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

	</body>
</html>