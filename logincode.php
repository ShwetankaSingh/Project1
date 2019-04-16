<html lang="en">
<head>
</head>


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

$sql = "SELECT * FROM volunteer where email='$_GET[email]' and Password='$_GET[pass]'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
    header("Location:http://localhost/charity/demo.php?msg=".$row['email']);

}
else
{

	header("Location:http://localhost/charity/demo.php?msg=Sorry your id or password is wrong");

}
$conn->close();
?>

</body>
</html>