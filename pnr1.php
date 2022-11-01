<html>
<head>
<title>PNR</title>

</head>
<center>

<?php
// Connect to the database

$host="localhost";
$user="root";
$password="";
$connecto=mysqli_connect($host,$user,$password,"project");
$nums=$_GET['ids'];
$query = "SELECT * FROM registration where pnr_num=" . $nums;
$result=mysqli_query($connecto,$query);
while($row = mysqli_fetch_array($result))
{
$a=$row["pnrstatus"];
$c=$row["pnr_num"];
}
if($c=="")
{
	print("<h1>Wait for it</h1>");
}
else{
	print("<h1>Completed</h1>");

	print("<form action=pnr3.php method=post>");
	print("<input type=hidden name=id value='booked'>");

	print("<input type=hidden name=id2 value='".$c."'>");
	print("<input type=submit>");
	print("</form>");
}


?>
</center>
</body>
</html>