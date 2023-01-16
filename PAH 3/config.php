<?php 
$db = mysqli_connect('localhost', 'root', '', 'PAH');

if ($db->connect_errno > 0) {
	die('Unable to open database! [' . $db->connect_errno . ']');
}
?>