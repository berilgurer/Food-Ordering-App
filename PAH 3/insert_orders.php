<?php 
include "config.php";

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit5'])) {
		// get variables from the form
		$cuid = $_POST['cuid'];
        $pid = $_POST['pid'];


		//write sql query

		$sql = "INSERT INTO `Orders`(`cuid`, `pid`) VALUES ('$cuid','$pid' )";
		// execute the query
		$result = $db->query($sql);

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

<h2 style="text-align:center;">Insert Relationship (Customer - Product)</h2>

<form action="" method="POST">
  <fieldset style="text-align:center;">
    Customer ID:<br>
    <input type="text" name="cuid">
    <br>
    Product ID:<br>
    <input type="text" name="pid">
    <br>
    <input type="submit" name="submit5" value="Add Order Relationship">
  </fieldset>
</form>

</body>
</html>

 
    <?php 



?>