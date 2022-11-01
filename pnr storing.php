<!DOCTYPE html>
<html>
<body>
<html lang="en">



<?php
$host="localhost";
$user="root";
$password="";
$connect=mysqli_connect($host,$user,$password,"project");
print("<br>");


$query = "SELECT*FROM trains";
$res = mysqli_query($connect,$query);
while($row = mysqli_fetch_array($res))
{
	$number=$row['train_num'];
	$name=$row['train_name'];


}
print("<br>");
print("<br>");
mysqli_close($connect)
?>

<?php echo("$number");?><br>
<?php echo("$name");?>





</body>
</html>