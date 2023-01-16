<?php
include 'config.php';?>

<select name="ids">

<?php

$sql_command = "SELECT * FROM Address";

$myresult = mysqli_query($db, $sql_command);

while($id_rows = mysqli_fetch_assoc($myresult))
{
    $addressid = $id_rows['addressid'];
    $Address_name = $id_rows['Address_name'];

    echo "<option value=$addressid>"."id: ".$addressid."  name: ".$Address_name."</option>";
}

?>
</select>

