<html>
<head>
<link rel="stylesheet"href="welcome page frame 3 css.css">
<script src="frame 3 javascript.js"></script>
<form action="login verification.php">
</head>


<div class="container">
  <input type="radio" name="tab" id="signin" checked="checked"/>
  <input type="radio" name="tab" id="register"/>
  <div class="pages">
    <div class="page">
      <div class="input">
        <div class="title"><i class="material-icons"></i> USER ID</div>
        <input class="text" type="text" placeholder=""/ id="userid" name="username">
		<span id="message5"></span>
      </div>
      <div class="input">
        <div class="title"><i class="material-icons"></i> PASSWORD</div>
        <input class="text" type="password" placeholder=""/ id="pwd" name="pswd">
				<span id="message4"></span>

      </div>
      <div class="input"><br>
	  <input type="submit" value="Enter!"/>
	 

      </div>
    </div>
    <div class="page signup">
      
    <h3 style="text-align:center">Haven't siged in yet!!!!</h3>
	<h3 style="text-align:center">Don't worry</h3>
	<hr></hr>
 
      <div class="input">
        <h1 style="color:black">"SIGN ME UP!"</h1>
		<h1><hr></hr></h1>
		<button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><a href="registration form.php" target="_blank">SIGN UP</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
      </div>
    </div>
  </div>
  <div class="tabs">
    <label class="tab" for="signin">
      <div class="text" value="" onclick="ValidateEmail();verifyPassword()">Sign In</div>
    </label>
    <label class="tab" for="register">
      <div class="text">Register</div>
    </label>
  </div>
</div>