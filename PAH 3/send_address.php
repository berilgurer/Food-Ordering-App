<?php 
include "config.php";

if (isset($_POST['name'])) {

	$name = $_POST['name'];
	$add_name = $_POST['add_name'];
	$add = $_POST['add'];

	$sql_statement = "INSERT INTO Address(addressid,Address_name,Address_field) VALUES ('$name','$add_name','$add')";
	$result = mysqli_query($db,$sql_statement);	
	
	header('Location: addresses.php');
}
else {
	echo "Your form is not set!";
}
?>