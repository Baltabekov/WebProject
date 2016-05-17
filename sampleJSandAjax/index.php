<!DOCTYPE html>
<html>
<head>
	<title>
		JS and AJAX
	</title>
	<script src="_source/jquery-1.9.1.js"></script>
	<script src="_source/jquery-migrate-1.1.0.js"></script>
	<script src="_source/myJSfile.js"></script>
	<link rel="stylesheet" type="text/css" href="_source/main_style.css">

	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-material-design.min.css">
	<link rel="stylesheet" type="text/css" href="css/ripples.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

</head>
<body>

<div class="container">
	<div class="row">
	<h1>JavaScript VALIDATION</h1>
		<form name="myForm" action="test.php" onsubmit="return validateForm()" method="post">
			Name: <input type="text" name="fname">
				  <input type="submit" value="Submit">
		</form>
	</div>
	<div class="row">
		<h1>My First JavaScript</h1>
		<button type="button" onclick="document.getElementById('myDate').innerHTML = Date()">
				Click me to display Date and Time.
		</button>
		<p id="myDate">
				My Local Date
		</p>
	</div>
	<div class="row">
		<h1>JavaScript Can Validate Input</h1>
		<p>Please input a number between 1 and 10:</p>
		<input id="numb">
		<button type="button" onclick="myFunction()">Submit</button>
		<p id="demo2"></p>
	</div>
	<div class="row">
		<h1>JS Load some contents </h1>
		<a href="#" id="text1">Test 1 </a><a href="#" id="text2">Test 2</a>
		<div id="loadText">
			Sample Text
		</div>
	</div>
	<div class="row">
		<h1>AJAX live seacrh</h1>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">SEARCH:</span>
				<input type="text" name="search_text" id="search_text" placeholder="Search by Name" class="form-control">
			</div>
			<div id="result">
				
			</div>

		</div>

	</div>
</div>

</body>
</html>