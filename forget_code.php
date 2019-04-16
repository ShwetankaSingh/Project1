<html lang="en">
<head>
</head>
<body>
	 <form role="form" method="get" action="demo.php">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="dummy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//userid,name,password are name of attributes of table
$sql = "SELECT * FROM  volunteer where adhaar_no ='$_GET[adhaar]'";
$result=$conn->query($sql);

if($result->num_rows>0)
{
	$row=$result->fetch_assoc();

echo $row['password'];
}
else
{
	echo"0 results";
}
?>
<br><br><br>

                          <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span>Back To Login</button>
</body>