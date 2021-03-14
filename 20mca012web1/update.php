<html>
<head>
<?php
include 'connect.php';
?>
</head>
<body>
<form method="post">
Enter the new name:<br>
<input type="text" name="newname"><br>
<input type="submit" name="sub">
</body>
</html>
<?php
$c=$_GET['id'];
if(isset($_POST['sub']))
{
	$a=$_POST["newname"];
	$b="UPDATE rstudent SET Name='$a' WHERE id='$c'";
	$d=mysqli_query($conn,$b);
	if($d==true)
	{
			echo "kk";
	}
	else
	{
			echo "bb";
	}
}
?>