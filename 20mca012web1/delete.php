<html>
<head>
<?php
	include 'connect.php';
?>
</head>
<body>
</body>
</html>
<?php
$a=$_GET['id'];
$s="DELETE * FROM rstudent WHERE id='$a'";
$b=mysqli_query($s);
if($b=='true')
{
	echo"The data of is deleted"; 
}
else
{
	echo"The data ofis not deleted";
}

?>