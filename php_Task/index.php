<html>  
    <head>  
	 
 <STYLE>
     
      h2 { 
        text-align:center;
  color: white;             
        background: green;            
        margin: 12px 12px 12px 30px;
        padding: 12px 0px 12px 12px;
        list-style: none
		
                                     
      }
     
    </STYLE>
	
 <STYLE>
 body {
	height: 100%;
}

body {
	margin: 0;
	background: linear-gradient(45deg, #49a09d, #5f2c82);
	font-family: sans-serif;
	font-weight: 100;
}

.container {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}

table {
	width: 800px;
	border-collapse: collapse;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0,0,0,0.1);
}

th,
td {
	padding: 15px;
	background-color: rgba(255,255,255,0.2);
	color: #fff;
}

th {
	text-align: left;
}

thead {
	th {
		background-color: #55608f;
	}
}

tbody {
	tr {
		&:hover {
			background-color: rgba(255,255,255,0.3);
		}
	}
	td {
		position: relative;
		&:hover {
			&:before {
				content: "";
				position: absolute;
				left: 0;
				right: 0;
				top: -9999px;
				bottom: -9999px;
				background-color: rgba(255,255,255,0.2);
				z-index: -1;
			}
		}
	}
}
 </STYLE>
        
 <h2> <marquee direction=left behavior=alternate>
 Rmaity Cars </marquee> </h2>
 
 
<?php


include('connect.php');


// Check connection
if ($connect->connect_error) {
 die ("Connection failed:  " . "<br>" . $connect->connect_error)  . "<br>" ;
} 
echo "<script type='text/javascript'>alert(' Connected successfully ')</script>";
		 
// sql to create table Ownership

/*
$sql = "CREATE TABLE Ownership (
Ownership_ID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Date VARCHAR(30),
Time VARCHAR(30),
Dealer_Name VARCHAR(30),
reg_date TIMESTAMP
)";
if ($connect->query($sql) === TRUE) {
 echo "Table Ownership created successfully ". "<br>" ;
} else {
 echo "Error creating table Ownership :  " . "<br>" . $connect->error  . "<br>"  ;
}
$sql = "INSERT INTO Ownership (Date, Time , Dealer_Name)
VALUES ('2-10-2019', '14:30' ,'Ali')";

if ($connect->query($sql) === TRUE) {
 echo "New record created successfully ". "<br>" ;
} else {
 echo "Error: " . $sql . "<br>" . $connect->error  . "<br>"  ;
}
*/


//  create table Costumer

/*
$sql = "CREATE TABLE Costumer ( 
Costumer_ID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Fname VARCHAR(30) NOT NULL,
Lname VARCHAR(30) NOT NULL,
Address VARCHAR(50),
Phone INT(15),
reg_date TIMESTAMP
)";

if ($connect->query($sql) === TRUE) {
 echo "Table Costumer created successfully ". "<br>" ;
} else {
 echo "Error creating table Costumer:  " . "<br>" . $connect->error  . "<br>"  ;
}


$sql = "INSERT INTO Costumer (Fname, Lname , Address , Phone)
VALUES ('hassan', 'hourani' ,'ain baal' , '4353322' )";



if ($connect->query($sql) === TRUE) {
 echo "New record created successfully ". "<br>" ;
} else {
 echo "Error: " . $sql . "<br>" . $connect->error  . "<br>"  ;
}
*/





// sql to create table Car



/*
$sql = "CREATE TABLE Car (
Car_ID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Car_Name VARCHAR(30) NOT NULL,
Color VARCHAR(50),
Seat_NB INT(1),
Price INT(10),
reg_date TIMESTAMP
)";

if ($connect->query($sql) === TRUE) {
 echo "Table Car created successfully ". "<br>" ;
} else {
 echo "Error creating table:  " . "<br>" . $connect->error  . "<br>"  ;
}

$sql = "INSERT INTO Car (Car_Name, Color , Seat_NB , Price)
VALUES ('CC3', 'White' ,'4' , '50000' )";


if ($connect->query($sql) === TRUE) {
 echo "New record created successfully ". "<br>" ;
} else {
 echo "Error: " . $sql . "<br>" . $connect->error  . "<br>"  ;
}
*/



// sql to create table Brand


/*
$sql = "CREATE TABLE Brand (
Brand_ID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Brand_Name VARCHAR(30) NOT NULL,
Year_of_Creation INT(4),
reg_date TIMESTAMP
)";

if ($connect->query($sql) === TRUE) {
 echo "Table Brand created successfully ". "<br>" ;
} else {
 echo "Error creating table:  " . "<br>" . $connect->error  . "<br>"  ;
}


$sql = "INSERT INTO Brand (Brand_Name, Year_of_Creation )
VALUES ('Tesla', '2005')";


if ($connect->query($sql) === TRUE) {
 echo "New record created successfully ". "<br>" ;
} else {
 echo "Error: " . $sql . "<br>" . $connect->error  . "<br>"  ;
}
*/


?>
 
		<link rel="stylesheet" href="jquery-ui.css">
        <link rel="stylesheet" href="bootstrap.min.css" />
		<script src="jquery.min.js"></script>  
		<script src="jquery-ui.js"></script>
		
		
    </head>  
    <body>  
        <div class="container">
			<br />
			
			<div align="right" style="margin-bottom:5px;">
			<button type="button" name="add" id="add" class="btn btn-success btn-xs">Add</button>
			</div>
			<div class="table-responsive" id="user_data">
				
			</div>
			<br />
		</div>
		
		<div id="user_dialog" title="Add Data">
			<form method="post" id="user_form">
				<div class="form-group">
					<label>Enter First Name</label>
					<input type="text" name="first_name" id="first_name" class="form-control" />
					<span id="error_first_name" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Enter Last Name</label>
					<input type="text" name="last_name" id="last_name" class="form-control" />
					<span id="error_last_name" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Enter Address</label>
					<input type="text" name="Address" id="Address" class="form-control" />
					<span id="error_Address" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Enter Phone Number</label>
					<input type="text" name="Phone_Number" id="Phone_Number
					" class="form-control" />
					<span id="error_Phone_Number" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Enter Dealer_Name</label>
					<input type="text" name="Dealer_Name" id="Dealer_Name" class="form-control" />
					<span id="error_Dealer_name" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Enter Date</label>
					<input type="text" name="Date" id="Date" class="form-control" />
					<span id="error_Date" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Enter Time</label>
					<input type="text" name="Time" id="Time" class="form-control" />
					<span id="error_Time" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Enter Brand Name</label>
					<input type="text" name="Brand_Name" id="Brand_Name" class="form-control" />
					<span id="error_Brand_Name" class="text-danger"></span>
				</div>
				<div class="form-group">
					<label>Enter Car Name</label>
					<input type="text" name="Car_Name" id="Car_Name" class="form-control" />
					<span id="error_car_Name" class="text-danger"></span>
				</div>
				
				<div class="form-group">
					<input type="hidden" name="action" id="action" value="insert" />
					<input type="hidden" name="hidden_id" id="hidden_id" />
					<input type="submit" name="form_action" id="form_action" class="btn btn-info" value="Insert" />
				</div>
			</form>
		</div>
		
		<div id="action_alert" title="Action">
			
		</div>
		
		<div id="delete_confirmation" title="Confirmation">
		<p>Are you sure you want to Delete this data?</p>
		</div>
		
    </body>  
</html>  




<script>  
$(document).ready(function(){  

	load_data();
    
	function load_data()
	{
		$.ajax({
			url:"Load.php",
			method:"POST",
			success:function(data)
			{
				$('#user_data').html(data);
			}
		});
	}
	
	$("#user_dialog").dialog({
		autoOpen:false,
		width:400
	});
	
	$('#add').click(function(){
		$('#user_dialog').attr('title', 'Add Data');
		$('#action').val('insert');
		$('#form_action').val('Insert');
		$('#user_form')[0].reset();
		$('#form_action').attr('disabled', false);
		$("#user_dialog").dialog('open');
	});
	
	$("#user_dialog").dialog({
		autoOpen:false,
		width:400
	});
	
	$('#update').click(function(){
		$('#user_dialog').attr('title', 'update Data');
		$('#action').val('insert');
		$('#form_action').val('Insert');
		$('#user_form')[0].reset();
		$('#form_action').attr('disabled', false);
		$("#user_dialog").dialog('open');
	});
	
	
	$('#user_form').on('submit', function(event){
		event.preventDefault();
		var error_first_name = '';
		var error_last_name = '';
		var error_Address = '';
		var error_Phone_Number = '';
		var error_Dealer_name = '';
		var error_Date = '';
		var error_Time = '';
		
		
		if($('#first_name').val() == '')
		{
			error_first_name = 'First Name is required';
			$('#error_first_name').text(error_first_name);
			$('#first_name').css('border-color', '#cc0000');
		}
		else
		{
			error_first_name = '';
			$('#error_first_name').text(error_first_name);
			$('#first_name').css('border-color', '');
		}
		
		if($('#last_name').val() == '')
		{
			error_last_name = 'Last Name is required';
			$('#error_last_name').text(error_last_name);
			$('#last_name').css('border-color', '#cc0000');
		}
		else
		{
			error_last_name = '';
			$('#error_last_name').text(error_last_name);
			$('#last_name').css('border-color', '');
		}
		
		if($('#Address').val() == '')
		{
			error_Address = 'Address is required';
			$('#error_Address').text(error_Address);
			$('#Address').css('border-color', '#cc0000');
		}
		else
		{
			error_Address = '';
			$('#error_Address').text(error_Address);
			$('#Address').css('border-color', '');
		}	
		
		
		if($('#Phone_Number').val() == '')
		{
			error_Phone_Number = 'Phone_Number is required';
			$('#error_Phone_Number').text(error_Phone_Number);
			$('#Phone_Number').css('border-color', '#cc0000');
		}
		else
		{
			error_Phone_Number = '';
			$('#error_Phone_Number').text(error_Phone_Number);
			$('#Phone_Number').css('border-color', '');
		}
		
		if($('#Dealer_Name').val() == '')
		{
			error_Dealer_name = 'Dealer_Name is required';
			$('#error_Dealer_name').text(error_Dealer_name);
			$('#Dealer_Name').css('border-color', '#cc0000');
		}
		else
		{
			error_Dealer_name = '';
			$('#error_Dealer_name').text(error_Dealer_name);
			$('#Dealer_Name').css('border-color', '');
		}
		
		if($('#Date').val() == '')
		{
			error_Date = 'Date is required';
			$('#error_Date').text(error_Date);
			$('#Date').css('border-color', '#cc0000');
		}
		else
		{
			error_Date = '';
			$('#error_Date').text(error_Date);
			$('#Date').css('border-color', '');
		}
		
		if($('#Time').val() == '')
		{
			error_Time = 'Time is required';
			$('#error_Time').text(error_Time);
			$('#Time').css('border-color', '#cc0000');
		}
		else
		{
			error_Time = '';
			$('#error_Time').text(error_Time);
			$('#Time').css('border-color', '');
		}
		
		if($('#Brand_Name').val() == '')
		{
			error_Brand_Name = 'Brand Name is required';
			$('#error_Brand_Name').text(error_Brand_Name);
			$('#Brand').css('border-color', '#cc0000');
		}
		else
		{
			error_Brand_Name = '';
			$('#error_Brand_Name').text(error_Brand_Name);
			$('#Brand_Name').css('border-color', '');
		}
		
		
		if($('#Car_Name').val() == '')
		{
			error_Car_Name = 'Car Name is required';
			$('#error_Car_Name').text(error_Car_Name);
			$('#Car_Name').css('border-color', '#cc0000');
		}
		else
		{
			error_Car_Name = '';
			$('#error_Car_Name').text(error_Car_Name);
			$('#Car_Name').css('border-color', '');
		}
		
		
		if(error_first_name != '' || error_last_name != ''|| error_Address != '' || error_Phone_Number != '' || error_Dealer_name != '' || error_Date != '' || error_Time != '' || error_Brand_Name != '' || error_Car_Name != '')
		{
			return false;
		}
		else
		{
			$('#form_action').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$.ajax({
				url:"action.php",
				method:"POST",
				data:form_data,
				success:function(data)
				{
					$('#user_dialog').dialog('close');
					$('#action_alert').html(data);
					$('#action_alert').dialog('open');
					load_data();
					$('#form_action').attr('disabled', false);
				}
			});
		}
		
	});
	
	$('#action_alert').dialog({
		autoOpen:false
	});
	
	$(document).on('click', '.edit', function(){
		var id = $(this).attr('id');
		var action = 'fetch_single';
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{id:id, action:action},
			dataType:"json",
			success:function(data)
			{
				$('#first_name').val(data.first_name);
				$('#last_name').val(data.last_name);
				$('#user_dialog').attr('title', 'Edit Data');
				$('#action').val('update');
				$('#hidden_id').val(id);
				$('#form_action').val('Update');
				$('#user_dialog').dialog('open');
			}
		});
	});
	
	$('#delete_confirmation').dialog({
		autoOpen:false,
		modal: true,
		buttons:{
			Ok : function(){
				var id = $(this).data('id');
				var action = 'delete';
				$.ajax({
					url:"action.php",
					method:"POST",
					data:{id:id, action:action},
					success:function(data)
					{
						$('#delete_confirmation').dialog('close');
						$('#action_alert').html(data);
						$('#action_alert').dialog('open');
						load_data();
					}
				});
			},
			Cancel : function(){
				$(this).dialog('close');
			}
		}	
	});
	
	$(document).on('click', '.delete', function(){
		var id = $(this).attr("id");
		$('#delete_confirmation').data('id', id).dialog('open');
	});
	
});  
</script>