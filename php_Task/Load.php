<?php

//fetch.php

$connect = new PDO("mysql:host=localhost;dbname=project", "root", "");


$query = "SELECT * FROM Ownership,Car,Brand,Costumer WHERE Ownership_ID=Car_ID=Costumer_ID=Brand_ID ";

$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$total_row = $statement->rowCount();
$output = '
<table class="table table-bordered">
	<tr>
		<th>ID</th>
		<th>Dealer Name</th>
		<th>Costumer Name</th>
		<th>Date</th>
		<th>Time</th>
		<th>Car</th>
		<th>Brand</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
';
if($total_row > 0)
{
	foreach($result as $row)
	{
		$output .= '
		<tr>
			<td>'.$row["Ownership_ID"].'</td>
			<td>'.$row["Dealer_Name"].'</td>
			<td>'.$row["Fname"]." ".$row["Lname"].'</td>
			<td>'.$row["Date"].'</td>
			<td>'.$row["Time"].'</td>
			<td>'.$row["Car_Name"].'</td>
			<td>'.$row["Brand_Name"].'</td>
			<td width="10%">
				<button type="button" name="edit" class="btn btn-primary btn-xs edit" id="'.$row["Ownership_ID"].'">Edit</button>
			</td>
			<td width="10%">
				<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["Ownership_ID"].'">Delete</button>
			</td>
		</tr>
		';
	}
}
else
{
	$output .= '
	<tr>
		<td colspan="4" align="center">Data not found</td>
	</tr>
	';
}
$output .= '</table>';
echo $output;
?>