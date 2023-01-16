<?php 
include "config.php";

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit1'])) {
		// get variables from the form
        //$customer_id = $_POST['customer_id'];
		$Customer_name = $_POST['Customer_name'];

		//write sql query
		$sql = "INSERT INTO Customer(`Customer_name`) VALUES ('$Customer_name' )";
        //$sql = "INSERT INTO `Address`('Address_name','Address_field') VALUES ('$Address_name','$Address_field')";

		// execute the query
		$result = $db->query($sql);

		if ($result == TRUE) {
			echo "New customer created successfully.";
		}else{
			echo "Error:". $sql . "<br>". $db->error;
		}

		$db->close();

	}
?>

<!DOCTYPE html>
<html>
<body>

<h2 style="text-align:center;">Insert New Customer</h2>

<form action="" method="POST">
  <fieldset style="text-align:center;">
	
    New Customer Name:<br>
    <input type="text" name="Customer_name">
    <br>
    <input type="submit" name="submit1" value="Add Customer">
  </fieldset>
</form>

</body>
</html>
<!-- a BACK button to go to the home page -->

 
    <?php 



?>