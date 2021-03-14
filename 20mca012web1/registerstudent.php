<html>
<head>
<?php
include 'connect.php';
?>
<style>
input[type=submit]{margin-right:10px; }
#a{padding-left:5px;padding-right:5px;position:absolute;left:66px;}
#b{position:absolute;left:132px;}
#c{position:absolute;left:200px;}
.v{position:absolute;top:180px;}
</style>
</head>
<body>
<form method="post">
Name:&nbsp&nbsp&nbsp<input type="text" name="name"><br>
Rollno:&nbsp&nbsp<input type="text" name="rno"><br>
Gender:&nbsp<input type="text" name="gen"><br>
Address:<input type="text" name="add"><br>
<input type="submit" value="submit" name="sub" id="a">
<input type="submit" value="update" name="update" id="b">
<input type="submit" value="print"  name="print" id="c">
<input type="submit" value="delete"  name="delete" id="d">
</form>
</body>
</html>
<?php
if(isset($_POST['sub']))
{
	$a=$_POST["name"];
	$b=$_POST["rno"];
	$c=$_POST["gen"];
	$d=$_POST["add"];
	$sql="INSERT INTO rstudent(Name,Rollno,Gender,Addres) VALUES('$a','$b','$c','$d')";
	$f=mysqli_query($conn,$sql);
}
if(isset($_POST['update']))
{
	$a=$_POST["name"];
	$l="SELECT id FROM rstudent WHERE Name='$a'";
	$t=mysqli_query($conn,$l);
	$s=mysqli_fetch_array($t);
	$v=$s['id'];
	header("Location:update.php?id=".$v);
}
if(isset($_POST['print']))
{
	$a=$_POST["name"];
	$l="SELECT id FROM rstudent WHERE Name='$a'";
	$t=mysqli_query($conn,$l);
	$s=mysqli_fetch_array($t);
	$v=$s['id'];
	header("Location:print.php?id=".$v);
}
if(isset($_POST['delete']))
{
	$a=$_POST["name"];
	$l="SELECT id FROM rstudent WHERE Name='$a'";
	$t=mysqli_query($conn,$l);
	$s=mysqli_fetch_array($t);
	$v=$s['id'];
	header("Location:delete.php?id=".$v);
}
?>