<!doctype html>  
<html>  
      <head>  
           <title>Registration page</title>  
      </head>  
      <body>
     
<?php
$host="localhost";
$user="root";
$password="";
$connecto=mysqli_connect($host,$user,$password,"project");


$firstname=$_GET['fname'];
$lastname=$_GET['lname'];
$usern=$_GET['username'];
$pass=$_GET['pswd'];
$repass=$_GET['pwd'];
$gender=$_GET['gender'];
$bday=$_GET['birthday'];
$phone_num=$_GET['phno'];
$n=(rand(0,2000));

$sql="INSERT INTO registration (fname, lname, user, pass, repass, gender, birthday, phno, id) VALUES ('$firstname','$lastname','$usern','$pass','$repass','$gender','$bday',$phone_num,$n)";
if (mysqli_query($connecto,$sql))
  echo "inserted......";
else
	echo "not inserted......";
mysqli_close($connecto)
?>
<form> 
<h1>Your number is <?php echo("$n");?></h1>
<br>
<h1>***USE THIS NUMBER FOR FURTHER VERIFICATION***</h1>

<button type="submit" style="height:30px; width:100px;"><a href="welcome page frame 3.php">Submit</a></button>

</body>
</html>