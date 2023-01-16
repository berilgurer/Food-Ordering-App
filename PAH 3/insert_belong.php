<?php 
include "config.php";

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit3'])) {
		// get variables from the form
		$customer_id = $_POST['customer_id'];
		$Address_id = $_POST['Address_id'];

		$sql = "INSERT INTO Belongs(`customer_id`, `Address_id`) VALUES ('$customer_id', '$Address_id')";

		// execute the query
		$result = $db->query($sql);

        //$Address_id = $_POST['Address_id'];

        //$sql = "INSERT INTO `Address`(`Address_id`) VALUES ('$Address_id')";

		// execute the query
		//$result = $db->query($sql);

		if ($result == TRUE) {
			echo "New relationship between Customer and Address is created successfully.";
		}else{
			echo "Error:". $sql . "<br>". $db->error;
		}

		$db->close();

	}
?>

<!DOCTYPE html>
<html>
<body>

<h2 style="text-align:center;">Insert Relationship (Customer - Address)</h2>

<form action="" method="POST">
  <fieldset style="text-align:center;">
    Customer ID:<br>
    <input type="text" name="customer_id">
    <br>
    Address ID:<br>
    <input type="text" name="Address_id">
    <br>
	<input type="submit" name="submit3" value="Add Belongs Relationship">
  </fieldset>
</form>

</body>
</html>

 
    <?php 



?>