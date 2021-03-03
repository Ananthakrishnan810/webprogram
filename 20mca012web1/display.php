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
$sql="SELECT * from student_details";
$res=mysqli_query($conn,$sql);
if(!$res)
{
		die("data not selected".mysql_error());
}
echo "<table border='1'>";
echo "<tr>";
echo "<td>ID</td>";
echo "<td>Name</td>";
echo "<td>Branch</td>";
echo "<td>mark</td>";
echo "</tr>";
while ($row = mysqli_fetch_array($res))
{
		echo "<tr>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['Name']."</td>";
		echo "<td>".$row['Branch']."</td>";
		echo "<td>".$row['mark']."</td>";
}
echo "</table>";
?>