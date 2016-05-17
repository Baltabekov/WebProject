<html>
<head>
	<title></title>
<script src="jquery.js"></script>
<script src="imageupload.js"></script>
<script>
	$(document).ready(function(){
		$('#upload_image').imageUpload("upload.php",{
			uploadButtonText:"Upload",
			previewImageSize:200,
			onSuccess:function(response){
				alert(response);
			}




		});


	}





		);









</script>


</head>
<body>
<div id="upload_image">


</div>



</body>
</html>