
<?php
include 'config.php';
$id = $_GET['id'];
$categories_query = "SELECT * FROM Product_ctgry WHERE pid = $id";
$result = mysqli_query($db,$categories_query);
while($row = mysqli_fetch_assoc($result)){
	$pid = $row['pid'];
	$pname = $row['pname'];
	$rating = $row['rating'];
	$price = $row['price'];
	$desc = $row['description'];
    $imagename = $row['imagename'];

	echo $price;
}
?>
