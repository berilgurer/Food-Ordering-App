<?php 
include "config.php";

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit6'])) {
		// get variables from the form
		$product_id = $cid_rows['product_id'];
        $courrier_id = $cid_rows['courrier_id'];


		//write sql query

		$sql = "INSERT INTO `SentWith`(`product_id`, `courrier_id`) VALUES ('$product_id','$courrier_id' )";
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

<h2 style="text-align:center;">Insert Relationship (Product - Courier)</h2>

<form action="" method="POST">
  <fieldset style="text-align:center;">
    Product ID:<br>
    <input type="text" name="product_id">
    <br>
    Courier ID:<br>
    <input type="text" name="courrier_id">
    <br>
    <input type="submit" name="submit6"  value="Add Sent With Relationship">
  </fieldset>
</form>

</body>
</html>

 
    <?php 



?>