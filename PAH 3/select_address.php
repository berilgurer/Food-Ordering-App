<div class="container">
<h1 class="text-center" >SELECT OPERATION FOR ADDRESS</h1> 
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
        <tr>
            <th  scope="col">Address ID</th>
            <th  scope="col">Address Name</th>
            <th  scope="col">Address Field</th>

        </tr>  
        </thead>
        <tbody>
            <tr>
<?php 

include "config.php";


if (isset($_POST['ids'])){

$selection_id = $_POST['ids'];

$sql_statement = "SELECT * FROM Address WHERE addressid = $selection_id";
$result = mysqli_query($db, $sql_statement);

while($row= mysqli_fetch_assoc($result)){
    
    $addressid = $row['addressid'];                
    $Address_name = $row['Address_name'];        
    $Address_field = $row['Address_field'];        

    echo "<tr >";
    echo " <th scope='row' >{$addressid}</th>";
    echo " <td > {$Address_name}</td>";
    echo " <td > {$Address_field}</td>";


        }  

    }
else
{

	echo "The form is not set.";

}

?>

