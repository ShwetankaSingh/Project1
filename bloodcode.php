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
$sql = "INSERT INTO food (username,dob,contact_no,adhaar,gender,email,password,Latitude,Longitude,donated_previously,ifyes_times,bloodgroup,discomfort_any,history6_months,women_donorpreg,abortion_3,disease)
VALUES ('$_GET[username]','$_GET[dob]', '$_GET[cno]', '$_GET[adhaar]', '$_GET[gen]', '$_GET[email]', '$_GET[pass]','$_GET[lat]','$_GET[lon]', '$_GET[dp]', '$_GET[ift]', '$_GET[bgroup]', '$_GET[disany]', '$_GET[l6]', '$_GET[preg]', '$_GET[l3]', '$_GET[disease]')";


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

























