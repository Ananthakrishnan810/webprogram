<html>
<head>
</head>
<body>
<?php
if(($_POST["uname"] == "php") && ($_POST["pass"] == "php"))
{
	session_start();
	$_SESSION["Login"] ="YES";
	echo "you are entered correctly";
	echo "<p><a href='document.php'>Link to the protected file</a></p>";
}
else
{
	session_start();
	$_SESSION["Login"] ="NO";
	echo "you are enterd not correctly";
	echo "<p><a href='document.php'>Link to the protected file</a></p>";
}
?>
</body>
</html>