<?php 
	$connect = mysqli_connect("localhost","root","","project");
	$output = '';
	$sql = "SELECT * FROM footballers WHERE name LIKE '%".$_POST['search']."%'";
	$result = mysqli_query($connect,$sql);

	if(mysqli_num_rows($result) > 0){
		$output .= '<h4>SEARCH RESULT</h4>';
		$output .= '<div class="table-responsive">
		<table class="table table-bordered">
			<tr>
				<th>id:</th>
				<th>name:</th>
				<th>age:</th>
				<th>goals:</th>
				<th>assists:</th>
			</tr>
		';
		
	while ($row = mysqli_fetch_array($result)) {
		$output .= "
			<tr>
				<td>".$row['id']."</td>
				<td>".$row['name']."</td>
				<td>".$row['age']."</td>
				<td>".$row['goals']."</td>
				<td>".$row['assists']."</td>
			</tr>";
	}
	$output .= '</table>
	</div>';

	echo "$output";
	}else{
		echo "DATA NOT FOUND";
	}
 ?>