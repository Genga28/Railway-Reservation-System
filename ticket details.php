<html>
<head>
<title>from_to</title>
</head>
<body>





<?php
// Connect to the database

$host="localhost";
$user="root";
$password="";
$connect=mysqli_connect($host,$user,$password,"project");
print("<br>");
$des1=$_GET['from'];
$des2=$_GET['to'];
$idn=$_GET['id1'];
print("<br>");
$query = "SELECT*FROM from_to where fromdesti='$des1'";

$res = mysqli_query($connect,$query);
$code = '';
for($id = 0; $id < 10; $id++) { 
$code .= mt_rand(0, 9); 
}
while($row = mysqli_fetch_array($res))
{
	$from=$row['fromdesti'];
	$to=$row['todesti'];
	$date=$row['date'];
	$train_name=$row['train_name'];
	$train_num=$row['train_num'];
	$price=$row['price'];

}
$query1="UPDATE registration SET pnr_num='$code' WHERE id='$idn'";
$res1 = mysqli_query($connect,$query1);

print("<br>");	
print("<br>");
mysqli_close($connect)

?>


<style>
div{
  display:inline-block;
  float:left;
  color:#fff;
  font-size:30px;

}
.zero{
  width:100%;
  height:30%;
  background:#ffcccc;
}
.one{
  width:100%;
  height:70%;
  background:#fff;
}
.two{
  width:35%;
  height:100%;
  background-image:url('https://images.pexels.com/photos/2790396/pexels-photo-2790396.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');
  background-repeat:no-repeat;
}
h1{
	
	font-family:cursive;
	color:black;
	
}
h4{
	font-size:28px;
	color:black;
	
}


.button1 {
  margin-left:30px;
   
  adding: 16px 32px;
  display: center;
  color: black; 
  border: 2px solid #800040;
}

.button1:hover {
  background-color: #800040;
  color: #fff;
}

a:hover {
  color:#fff;
}
</style>



<div class="zero">
<h1><center>TICKET</center></h1>
</div>
<div class="one">

    <div class="two"></div>
	<pre><h4>
  Train name    : <?php echo("$train_name");?>
			 
  Train number  : <?php echo("$train_num");?> 		 
  From          : <?php echo("$from");?>    
  To            : <?php echo("$to");?>
  
  Ticket fare   : <?php echo("$price");?>
  PNR number    : <?php echo("$code");?>
  <br>
	
<div class="button1"><a href="payphp.php">Book ticket</div>
	</pre>
</div>


		
</body>
</html>