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