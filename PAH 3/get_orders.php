<?php
include 'config.php';
$id = $_GET['id'];
$sql_statement = "INSERT INTO Orders(purid,pid,cuid)
                    VALUES ('1','$id','1')";

$result = mysqli_query($db, $sql_statement);




?>
