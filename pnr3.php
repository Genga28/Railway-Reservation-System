<?php
// Connect to the database

$host="localhost";
$user="root";
$password="";
$connecto=mysqli_connect($host,$user,$password,"project");
$a=$_POST['id2'];
$b=$_POST['id'];

$query = "UPDATE registration SET pnrstatus='$b' WHERE pnr_num='$a'";
if(mysqli_query($connecto,$query))
	header("Location:success.php");
else
	echo("Not update");
?>