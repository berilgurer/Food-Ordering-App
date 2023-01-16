<?php
include 'config.php';
$id = $_GET['id'];
$categories_query = "SELECT * FROM Category C WHERE C.catid = $id";
$result = mysqli_query($db,$categories_query);
while($row = mysqli_fetch_assoc($result)){
    $ID = $row['catid'];
    $name = $row['catname'];
    
    $find_product_of_category = "SELECT * FROM Product_ctgry P WHERE P.catid =$id";
	$res = mysqli_query($db,$find_product_of_category);

	while ($r = mysqli_fetch_assoc($res)) {
		$pid = $r['pid'];
		$pname = $r['pname'];
		$rating = $r['rating'];
		$price = $r['price'];
		$desc = $r['description'];
		echo "<li>"."<a href=''>".$pname."</a>"."</li>";
	}
}



?>
