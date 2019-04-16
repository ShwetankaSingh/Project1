<html>
<head>
	
</head>
<body>

<?php

$a="This is a good boy";
$c=0;
$s=0;
for($x=0;$x<strlen($a);$x++)
{
if($a[$x]==' ')
$s++;
else
	$c++;
}

echo "<br>Total Spaces :".$s;
echo "<br>Total Characters :".$c;
echo "<br>Total Words :".($s+1);


?>

</body>
</html>