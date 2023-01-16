<?php 
include "config.php";

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit2'])) {
		// get variables from the form
        $Address_name = $_POST['Address_name'];
        $Address_field = $_POST['Address_field'];

        $sql = "INSERT INTO Address(`Address_name`, `Address_field`) VALUES ('$Address_name', '$Address_field')";

		// execute the query
		$result = $db->query($sql);

		if ($result == TRUE) {
			echo "New address created successfully.";
		}else{
			echo "Error:". $sql . "<br>". $db->error;
		}

		$db->close();

	}
?>

<!DOCTYPE html>
<html>
<body>

<h2 style="text-align:center;">Insert New Address</h2>

<form action="" method="POST">
  <fieldset style="text-align:center;">
    Address name:<br>
    <input type="text" name="Address_name">
    <br>
    Address Field:<br>
    <input type="text" name="Address_field">
    <br>
    <input type="submit" name="submit2" value="Add Address">
  </fieldset>
</form>

</body>
</html>

    <?php 



?>