<html>
<head>
</head>
<body>
<?php
$host="localhost";
$user="root";
$password="";
$connect=mysqli_connect($host,$user,$password,"project");
$userid=$_GET['username'];
$pass=$_GET['pswd'];
$query="SELECT*FROM registration where user='$userid' and pass='$pass'";
$result=mysqli_query($connect,$query);
$count=mysqli_num_rows($result);
if($count>0)
	header("Location:home page 1.php");
else
	print("Login unsuccessful");
mysqli_close($connect)
?>
</body>
</html>