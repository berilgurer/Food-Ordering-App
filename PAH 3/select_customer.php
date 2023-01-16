<div class="container">
<h1 class="text-center" >SELECT OPERATION FOR CUSTOMER</h1> 
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
        <tr>
            <th  scope="col">Customer ID</th>
            <th  scope="col">Customer Name</th>

        </tr>  
        </thead>
        <tbody>
            <tr>
<?php 

include "config.php";


if (isset($_POST['ids'])){

$selection_id = $_POST['ids'];

$sql_statement = "SELECT * FROM Customer WHERE customer_id = $selection_id";
$result = mysqli_query($db, $sql_statement);

while($row= mysqli_fetch_assoc($result)){
    
    $customer_id = $row['customer_id'];                
    $Customer_name = $row['Customer_name'];        
    
    echo "<tr >";
    echo " <th scope='row' >{$customer_id}</th>";
    echo " <td > {$Customer_name}</td>";

        }  

    }
else
{

	echo "The form is not set.";

}

?>

