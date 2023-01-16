
<?php
include 'config.php';
$id = $_GET['id'];
$categories_query = "SELECT * FROM Product_ctgry WHERE catid = $id";
$result = mysqli_query($db,$categories_query);
while($row = mysqli_fetch_assoc($result)){
	$pid = $row['pid'];
	$pname = $row['pname'];
	$rating = $row['rating'];
	$price = $row['price'];
	$desc = $row['description'];
   	$imagename = $row['imagename'];
	echo "<tr>"."<td style='width: 15%;' >"."<img src='" . $imagename . "'height = 100 width = 100 alt='img'>"."</td>"." <td style='width: 75%;' >"."<a href='checkout.php?id={$id}'>".$pname."</a>"."</td>"."<td style='width: 10%;' >"."<span>₺".$price."</span>"."</td>"."</tr>";
}
?>
