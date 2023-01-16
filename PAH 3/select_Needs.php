<div class="container">
<h1 class="text-center" >SELECT OPERATION FOR Product & Ingredient Relationship</h1> 
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
        <tr>
            <th  scope="col">Product ID</th>
            <th  scope="col">Ingredient ID</th>

        </tr>  
        </thead>
        <tbody>
            <tr>
<?php 

include "config.php";


if (isset($_POST['ids'])){

$selection_id = $_POST['ids'];

$sql_statement = "SELECT * FROM SentWith WHERE pid = $selection_id";
$result = mysqli_query($db, $sql_statement);

while($row= mysqli_fetch_assoc($result)){
    
    $pid = $row['pid'];                
    $iid = $row['iid'];        

    echo "<tr >";
    echo " <th scope='row' >{$pid}</th>";
    echo " <td > {$iid}</td>";


        }  

    }
else
{

	echo "The form is not set.";

}

?>

