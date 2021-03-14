<html>
<head>
<?php
include 'connect.php';
?>
</head>
<body>
<form method="post">

</form>
</body>
</html>
<?php
$c=$_GET['id'];
$a="SELECT * FROM rstudent WHERE id='$c'";
$b=mysqli_query($conn,$a);
echo "<table border='2'>";
echo "<tr>";
echo "<td>Name</td>";
echo "<td>Rollno</td>";
echo "<td>Gender</td>";
echo "<td>Address</td>";
echo "</tr>";
$s=mysqli_fetch_array($b);
echo "<tr>";
echo "<td>".$s['Name']."</td>";
echo "<td>".$s['Rollno']."</td>";
echo "<td>".$s['Gender']."</td>";
echo "<td>".$s['Addres']."</td>";
echo "</tr>";
echo "</table>";
?>