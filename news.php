<html>
<head>
	<title></title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script type="text/javascript">
	$("document").ready(function(){
		$("#send").click(function(){
			var dannie=$("form").serialize();
			alert(dannie);

			$.ajax({
				url:'insert.php',
				type:'POST',
				data:dannie,
				success:function(data){
						alert(data);
				}
			});
		}


			);
	});

</script>

</head>
<body>
<form>
	название новости<input type="text" name="title"></form><br/>
	текст новотси <br/><textarea cols="50" rows="10" name="text"></textarea></br>
	<input type="button" id="send" value="создать новость"/>
</form>

</body>
</html>