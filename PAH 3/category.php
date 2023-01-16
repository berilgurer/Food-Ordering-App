<?php
include 'config.php';
$categories_query = "SELECT * FROM Category";
$result = mysqli_query($db,$categories_query);
while($row = mysqli_fetch_assoc($result)){
    $id = $row['catid'];
    $name = $row['catname'];
    echo "<li>"."<a href='filter.php?id={$id}'>".$name."</a>"."</li>";
}
?>
