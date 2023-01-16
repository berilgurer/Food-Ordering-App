<?php 

include "config.php";
header("Location: admin.php");

if (isset($_POST['ids'])){

$selection_id = $_POST['ids'];

$sql_statement = "DELETE FROM Customer WHERE customer_id = $selection_id";

$result = mysqli_query($db, $sql_statement);

//header ("Location: homeCustomer.php");

}

else
{

	echo "The form is not set.";

}

?>

