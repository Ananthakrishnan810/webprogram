<?php
$servername="localhost";
$username="20mca012";
$password="2365";
$db_name="20mca012";
$conn = mysqli_connect($servername, $username, $password, $db_name);
if (!$conn)
{
  die("Connection failed: " . mysqli_connect_error());
}
$a=$_POST["name"];
$b=$_POST["bname"];
$c=$_POST["mark"];
$sql="INSERT INTO student_details(Name,Branch,mark) VALUES('$a','$b','$c')";
$sql1="UPDATE student_details SET Branch='mca' where id=2";
if(mysqli_query($conn,$sql))
{
	echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo "<br>";
if(mysqli_query($conn,$sql1))
{
	echo "New record updated successfully";
}
else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>