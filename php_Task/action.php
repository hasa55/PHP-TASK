<?php

//action.php

include('connect.php');

if($_POST["action"] == "insert")
	{
		$query = "INSERT INTO Ownership (Date, Time , Dealer_Name)
VALUES ('".$_POST["Date"]."', '".$_POST["Time"]."' , '".$_POST["Dealer_Name"]."')";

if ($connect->query($query) === TRUE) {
 echo "New record created successfully";
} else {
 echo "Error: " . $query . "<br>" . $connect->error;
}

$query = "INSERT INTO Costumer (Fname, Lname , Address , Phone)
VALUES ('".$_POST["first_name"]."', '".$_POST["last_name"]."' , '".$_POST["Address"]."' , '".$_POST["Phone_Number"]."' )";

if ($connect->query($query) === TRUE) {
// echo "New record created successfully";
} else {
 echo "Error: " . $query . "<br>" . $connect->error;
}
$query = "INSERT INTO Car (Car_Name)
VALUES ('".$_POST["Car_Name"]."')";

if ($connect->query($query) === TRUE) {
 //echo "New record created successfully";
} else {
 echo "Error: " . $query . "<br>" . $connect->error;
}



$query = "INSERT INTO Brand (Brand_Name)
VALUES ('".$_POST["Brand_Name"]."')";

if ($connect->query($query) === TRUE) {
 //echo "New record created successfully";
} else {
 echo "Error: " . $query . "<br>" . $connect->error;
}
	}
	if($_POST["action"] == "update")
	{
		$query = "
		UPDATE tbl_sample 
		SET first_name = '".$_POST["first_name"]."', 
		last_name = '".$_POST["last_name"]."' 
		WHERE id = '".$_POST["hidden_id"]."'
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Updated</p>';
	}
	if($_POST["action"] == "delete")
	{
		$query = "DELETE FROM Ownership WHERE Ownership_ID= '".$_POST["id"]."'";

if ($connect->query($query) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $connect->error;
}
$query = "DELETE FROM Costumer WHERE Costumer_ID= '".$_POST["id"]."'";

if ($connect->query($query) === TRUE) {
 // echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $connect->error;
}
$query = "DELETE FROM Car WHERE Car_ID= '".$_POST["id"]."'";

if ($connect->query($query) === TRUE) {
  //echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $connect->error;
}
$query = "DELETE FROM Brand WHERE Brand_ID= '".$_POST["id"]."'";

if ($connect->query($query) === TRUE) {
  //echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $connect->error;
}
		$statement = $connect->prepare($query);
		$statement->execute();
		echo '<p>Data Deleted</p>';
	}


?>