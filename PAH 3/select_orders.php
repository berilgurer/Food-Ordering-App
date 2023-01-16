<div class="container">
<h1 class="text-center" >SELECT OPERATION FOR Customer & Product Relationship</h1> 
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
        <tr>
            <th  scope="col">Customer ID</th>
            <th  scope="col">Product ID</th>

        </tr>  
        </thead>
        <tbody>
            <tr>
<?php 

include "config.php";


if (isset($_POST['ids'])){

$selection_id = $_POST['ids'];

$sql_statement = "SELECT * FROM Orders WHERE cuid = $selection_id";
$result = mysqli_query($db, $sql_statement);

while($row= mysqli_fetch_assoc($result)){
    
    $cuid = $row['cuid'];                
    $pid = $row['pid'];        

    echo "<tr >";
    echo " <th scope='row' >{$cuid}</th>";
    echo " <td > {$pid}</td>";


        }  

    }
else
{

	echo "The form is not set.";

}

?>
