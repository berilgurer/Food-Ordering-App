<?php 
include "config.php";

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit4'])) {
		// get variables from the form
		$pid = $_POST['pid'];
        $iid = $_POST['iid'];


		//write sql query

		$sql = "INSERT INTO `Orders`(`pid`, `iid`) VALUES ('$pid','$iid' )";
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

<h2 style="text-align:center;">Insert Relationship (Product - Ingredient)</h2>

<form action="" method="POST">
  <fieldset style="text-align:center;">
    Product ID:<br>
    <input type="text" name="pid">
    <br>
    Ingredient ID:<br>
    <input type="text" name="iid">
    <br>
    <input type="submit" name="submit4" value="Add Needs Relationship">
  </fieldset>
</form>

</body>
</html>

 
    <?php 



?>