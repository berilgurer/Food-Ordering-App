<?php
include 'config.php';?>

<select name="ids">

<?php

$sql_command = "SELECT * FROM Courrier";

$myresult = mysqli_query($db, $sql_command);

while($id_rows = mysqli_fetch_assoc($myresult))
{
    $id = $id_rows['coid'];
    $name = $id_rows['company'];
    $eta = $id_rows['eta'];


    echo "<option value=$id>"."id: ".$id."  name: ".$name."</option>" ;
    echo "Expected Time of Delivery: ".$eta." Days";
}

?>
</select>

