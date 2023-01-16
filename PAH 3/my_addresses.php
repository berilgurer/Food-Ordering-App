<!DOCTYPE html>
<html>
<head>
	<title></title>
		<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<table>
	<?php
include 'config.php';

$add_sql = "SELECT * FROM Address";
$result = mysqli_query($db,$add_sql);
echo "<tr>"."<th>".'ID'."</th>"."<th>".'Address Name'."</th>"."<th>".'Address'."</th>"."</tr>";
while ($row = mysqli_fetch_assoc($result)) {
	$id = $row['addressid'];
	$add_name = $row['Address_name'];
	$address = $row['Address_field'];

	echo "<tr>"."<td>".$id."</td>"."<td>".$add_name."</td>"."<td>".$address."</td>"."</tr>";
}
?>
</table>
</body>
</html>
