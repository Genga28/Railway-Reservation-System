<html>
<head>
<link rel="stylesheet"href="C:\xampp\htdocs\AAAA Project\login form css.css">
<script src=""></script>
<title>Registration Form</title>
	<form name="form1" action="reg.php" onsubmit="return((allLetter()& allLetter1()& verifyPassword()& check()& address1())==1)" class="registration-form">
</head>
<body>

<style>
@import url(https://fonts.googleapis.com/css?family=Cookie|Raleway:300,700,400);
*{
	box-sizing: border-box;
	font-size: 1em;
	margin: 0;
	padding: 0;
}
body{
	background: url('https://i.pinimg.com/originals/66/dd/0e/66dd0ec2af0b7d61b8ddd50a7887d5f4.jpg') center no-repeat;
	background-size: cover;
	color: #333;
	font-size: 18px;
	font-family: 'Raleway', sans-serif;
}
.container{
	border-radius: 0.5em;
	box-shadow: 0 0 1em 0 rgba(51,51,51,0.25);
	display: block;
	max-width: 480px;
	overflow: hidden;
	-webkit-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	padding: 2em;
	position: absolute;
		top: 50%;
		left: 50%;
		z-index: 1;
	width: 98%;
}
.container:before{
	background: url('https://i.pinimg.com/originals/66/dd/0e/66dd0ec2af0b7d61b8ddd50a7887d5f4.jpg') center no-repeat;
	background-size: cover;
	content: '';
	-webkit-filter: blur(10px);
	filter: blur(10px);
	height: 100vh;
	position: absolute;
		top: 50%;
		left: 50%;
		z-index: -1;
	-webkit-transform: translate(-50%, -50%);
	-ms-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	width: 100vw;
}
.container:after{
	background: rgba(255,255,255,0.6);
	content: '';
	display: block;
	height: 100%;
	position: absolute;
		top: 0;
		left: 0;
		z-index: -1;
	width: 100%;
}
form button.submit{
	background: rgba(255,255,255,0.25);
	border: 1px solid #333;
	line-height: 1em;
	padding: 0.5em 0.5em;
	-webkit-transition: all 0.25s;
	transition: all 0.25s;
}
form button:hover,
form button:focus,
form button:active,
form button.loading{
	background: #333;
	color: #fff;
	outline: none;
}
form button.success{
	background: #27ae60;
	border-color: #27ae60; 
	color: #fff;
}
@-webkit-keyframes spin{
	from{ transform: rotate(0deg); }
	to{ transform: rotate(360deg); }
}
@keyframes spin{
	from{ transform: rotate(0deg); }
	to{ transform: rotate(360deg); }
}
form button span.loading-spinner{
	-webkit-animation: spin 0.5s linear infinite;
	animation: spin 0.5s linear infinite;
	border: 2px solid #fff;
	border-top-color: transparent;
	border-radius: 50%;
	display: inline-block;
	height: 1em;
	width: 1em;
}

form label{
	border-bottom: 1px solid #333;
	display: block;
	font-size: 1.25em;
	margin-bottom: 0.5em;
	-webkit-transition: all 0.25s;
	transition: all 0.25s;
}
form label.col-one-half{
	float: left;
	width: 50%;
}
form label.col-one-half:nth-of-type(even){
	border-left: 1px solid #333;
	padding-left: 0.25em;
}
form label input{
	background: none;
	border: none;
	line-height: 1em;
	font-weight: 200;
	padding: 0.125em 0.25em;
	width: 100%;
}
form label input:focus{
	outline: none;
}
form label input:-webkit-autofill{
	background-color: transparent !important;
}
form label span.label-text{
	display: block;
	font-size: 0.5em;
	font-weight: bold;
	padding-left: 0.5em;
	text-transform: uppercase;
	-webkit-transition: all 0.25s;
	transition: all 0.25s;
}


form label.invalid{border-color: #c0392b !important;}
form label.invalid span.label-text{color: #c0392b;}
form label.password{position: relative;}
form label.password button.toggle-visibility{
	background: none;
	border: none;
	cursor: pointer;
	font-size: 0.6em;
	line-height: 1em;
	position: absolute;
		top: 50%;
		right: 0.5em;
	text-align: center;
	-webkit-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	transform: translateY(-50%);
	-webkit-transition: all 0.25s;
	transition: all 0.25s;
}
form label.password button.toggle-visibility:hover,
form label.password button.toggle-visibility:focus,
form label.password button.toggle-visibility:active{
	color: #000;
	outline: none;
}
form label.password button.toggle-visibility span{vertical-align: middle;}

h1{
	font-size: 3em;
	margin: 0 0 0.5em 0;
	text-align: center;
	font-family: 'Cookie', cursive;
}

html{
	font-size: 5px;
	height: 100%;
}

.text-center{
	text-align: center;
}

a {
  color:black ;
}

a:hover {
  color:#fff;
}
</style>


<div class="container">
	
	<h1 class="text-center">Register</h1>
	

	
		<label class="col-one-half">
			<span class="label-text">First Name</span>
			<input type="text" name="fname">
		</label>
		<label class="col-one-half">
			<span class="label-text">Last Name</span>
			<input type="text" name="lname">
		</label>
		<label>
			<span class="label-text">User id</span>
			<input type="text" name="username" id="text2">
			
		</label>
		
		
		<label class="password">
			<span class="label-text">Password</span>
			<input type="password" name="pswd" id="pswd";>
		</label>
		
		<label class="password">
			<span class="label-text">Retype Password</span>
			<input type="password" id="pwd"; name="pwd">
		</label>
		
		<label>
			<span class="label-text">Gender</span>
			<input type="text" name="gender">
		</label>
		<label>
			<span class="label-text">Birthday</span>
            <input type="date" id="birthday" name="birthday">
		</label>
		
		<label>
			<span class="label-text">Phone number</span>
			<input type="text" name="phno">
		</label>
		
		<div class="text-center">
		    <button class="submit" name="register" type="submit" ><a>submit</a></button>&nbsp;&nbsp;&nbsp;
			<button class="submit" type="reset"><a><u>Reset</u></a></button>&nbsp;&nbsp;&nbsp; 
			<button class="submit" type="reset"><a href="home page 1.html" target="_blank">Sign me up</a></button>
		</div>
	
</div>



</form> </center>
</body> </html>
