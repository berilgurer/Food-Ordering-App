<div class="container">
<h1 class="text-center" >SELECT OPERATION FOR Product & Courier Relationship</h1> 
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
        <tr>
            <th  scope="col">Product ID</th>
            <th  scope="col">Courier ID</th>

        </tr>  
        </thead>
        <tbody>
            <tr>
<?php 

include "config.php";


if (isset($_POST['ids'])){

$selection_id = $_POST['ids'];

$sql_statement = "SELECT * FROM SentWith WHERE product_id = $selection_id";
$result = mysqli_query($db, $sql_statement);

while($row= mysqli_fetch_assoc($result)){
    
    $product_id = $row['product_id'];                
    $courrier_id = $row['courrier_id'];        

    echo "<tr >";
    echo " <th scope='row' >{$product_id}</th>";
    echo " <td > {$courrier_id}</td>";


        }  

    }
else
{

	echo "The form is not set.";

}

?>
