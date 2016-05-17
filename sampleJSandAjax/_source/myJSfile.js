function validateForm() {
  		var x = document.forms["myForm"]["fname"].value;
		if (x == null || x == "") {
			alert("Name must be filled out");
			return false;
		}
		if (x == "hello") {
			alert("How r u?");
			return false;
		}
}
function myFunction() {
		var x, text;
	    // Get the value of the input field with id="numb"
	    x = document.getElementById("numb").value;
	    // If x is Not a Number or less than one or greater than 10
	    if (isNaN(x) || x < 1 || x > 10) {
	        text = "Input not valid";
	    } else {
	        text = "Input OK";
	    }
	    document.getElementById("demo2").innerHTML = text;
}
$(document).ready(function(){
	$('#text1').click(function(){
		$('#loadText').load('text1.txt');
	});
	$('#text2').click(function(){
		$('#loadText').load('text2.txt');
	});
});
$(document).ready(function(){
					$('#search_text').keyup(function(){
						var txt = $(this).val();
						if(txt != ''){
							// document.getElementById("result").innerHTML = "HELLO MOTHERFUCKER";
							$.ajax({
								url:"fetch.php",
								method:"post",
								data:{search:txt},
								dataType:"text",
								success:function(data){
									$('#result').html(data);
								}
							});
						}else{
							$('#result').html('');
							$.ajax({
								url:"fetch.php",
								method:"post",
								data:{search:txt},
								dataType:"text",
								success:function(data){
									$('#result').html(data);
								}
							});
						}
					});
				});
