<?php
session_start();
include 'db.php';
if (isset($_POST['submit'])) {
	$email = $_POST['mail'];
	$password =$_POST['password'];
	$sql = mysqli_query($db,"SELECT * from users where password=\"$password\" and email=\"$email\"");
	if (mysqli_num_rows($sql)>0) {
		$_SESSION['mail']=$email;
		header("Location:index.php");
	}else{
		header("location:loginproject.php");
	}
}
?>
<html>
<head>

	<title>Login</title>
    <style type="text/css">
    .background-wrap{
      position:fixed;
      z-index:-10;
      width:100%;
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
  
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
<div style="margin-top:200px;margin-left:450px;">
<form action=""class="form-horizontal" method="post" enctype="multipart/form-data">
  <div class="form-group" style="width:500px;">
    <label style="color:white"for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" name="mail" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group" style="width:500px;border:">
    <label style="color:white" for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group" style="margin-left:30px;width:200px;">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
      <a href="reg.php" style="color:white;">Registration</a>
      </div>
    </div>
  </div>
  <div class="form-group" style="margin-left:60px;margin-top:-100px;">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="submit" class="btn btn-primary"style="margin-top:-30px;">Sign in</button>
    </div>
  </div>
</form>
</div>
<div class="background-wrap">
 <video id="video-bg-elem" preload="auto" autoplay="true" loop="loop" >
  <source src="4K Wireframe Dark Space 2160 Background.mp4" type="video/mp4">
  
 </video>
 </div>
</body>
</html>