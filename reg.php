<?php
session_start();
include 'db.php';

if (isset($_POST['submit'])) {
	$user = $_POST['username'];
	$password = $_POST['password'];
	$confirm = $_POST['confirm'];
	$email = $_POST['email'];
	$sql = "INSERT into users (username, password, email) values ('".$user."', '".$password."', '".$email."')";
	if ($confirm==$password) {
		mysqli_query($db, $sql);
		$_SESSION['mail']=$email;
		header('location: index.php');
	}
}
 
 ?>
 <html>
 <head>
 	<title>Regisration</title>
 	  <meta charset="utf-8">
 	  <style type="text/css">
 	  .background-wrap{
 	  	position:fixed;
 	  	z-index:-10;
 	  	width:1900px;
 	  	height:100%;
 	  	overflow:hidden;
 	  	top:0;
 	  	left:0;
 	  	;
 	  }
 	  #video-bg-elem{
 	  	position: absolute;
 	  	top:0;
 	  	left: 0;
 	  	min-height: 100%;
 	  	min-width: 100%;
 	  }
 	  </style>
  
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>




  <script>

  	function checkForm(form){
  	if(form.inputfield.value==""){
  		alert("Error:Input is empty");
  		form.inputfield.focus();
  		return false;
	}

	var re=/^[\w ]+$/;
	
  	if(!re.test(form.inputfield.value)){
	alert("Error:Input contains invalid characters!");
	form.inputfield.focus();
	return false;
  	}
  	if(form.password1.value!=form.password2.value){
  	alert("Error:passwords are not same");
  	form.password.focus();
  	return false;

  	}
	return true;
	}




  </script>



 </head>
 <body>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
	<form  style="width:200px;margin-top:200px;margin-left:570px;"  action="" method="post" enctype="multipart\enctype" onsubmit="return checkForm(this);">
 	<label style="color:white;" for="exampleInputPassword1">Your name:</label>
 	<input style="width:200px;" type="text" style="color:white;"name = "inputfield" class="form-control"><br>
 	<label for="exampleInputPassword1"style="color:white;margin-top:-20px;">New password:</label> <input name = "password1" type="password" style="width:200px;" class="form-control" id="exampleInputEmail1" ><br>
 	<label for="exampleInputPassword1" style="margin-top:-20px;color:white;">Confirm:</label> <input name="password2" type="password" class="form-control" style="width:200px;" id="exampleInputEmail1" ><br>
 	<label for="exampleInputPassword1"style="margin-top:-20px;color:white;">E-Mail:</label><input name="email" type="mailto" class="form-control" style="width:200px;" id="exampleInputEmail1" ><br>
 	<input type="submit" value="send" class="btn btn-default">
    </form>
 <button type="submit" name="submit" class="btn btn-default" style="margin-top:-49px;margin-left:680px"><a href="loginproject.php">Log In</a></button>
 <div class="background-wrap">
 <video id="video-bg-elem" preload="auto" autoplay="true" loop="loop" >
 <source src="4K Colorful Wood Texture Motion Background 2160p (1).mp4" type="video/mp4">
 </video>
 </div>
 </body>
 </html>
