<?php 

include "config.php";
header("Location: admin.php");

if (isset($_POST['ids'])){

$selection_id = $_POST['ids'];

$sql_statement = "DELETE FROM Orders WHERE cuid = $selection_id";

$result = mysqli_query($db, $sql_statement);

//header ("Location: homeCustomer.php");

}

else
{

	echo "The form is not set.";

}

?>