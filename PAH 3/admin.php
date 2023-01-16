<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
  <body>
</html>
<?php

include "config.php";
include "admin_control.php";


?>
<body style="background-color:rgb(179, 204, 204);">
<head>
        <title>PAH</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
<body>
  </div>
  <div style="background-color:rgb(41, 61, 61);">	
    <div style="margin:0 auto; width:66%;height:50px;display: flex;">
        <div style="width:50%;height: 100%;height: 100%;">
            <a href="index.php">
                <img src="images/logo1.png" style="max-width: 35%;margin: 10px;display:inline-block">
            </a>
        </div>
        <div style="width:50%;height: 100%;margin: 30px;">
                <a href="admin_chat.php" class="button-top-right" >Admin Chat</a>
            </div> 
        <div style="width:50%;height: 100%;margin: 30px;">
                <a href="logout.php" class="button-top-right" >Logout</a>
            </div> 
    </div>
    <div style="width:100%; background-color:rgb(41, 61, 61); height:70px;"></div>	
    </div>
        </div> 
  <div class="container">

    <h1 class="text-center" >CUSTOMER TABLE</h1>
 
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
            $query="SELECT * FROM Customer";               // SQL query to fetch all table data
            $view_users= mysqli_query($db,$query);    // sending the query to the database
 
            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
              $customer_id = $row['customer_id'];                
              $Customer_name = $row['Customer_name'];              
              echo "<tr >";
              echo " <td >{$customer_id}</th>";
              echo " <td > {$Customer_name}</th>";
 
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>
 

<?php include "insert_customer.php"?>
<div style="text-align:center">
<form action="delete_customer.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT customer_id FROM Customer";

$myresult = mysqli_query($db, $sql_command);


while($cid_rows = mysqli_fetch_assoc($myresult))
{
	$customer_id = $cid_rows['customer_id'];
	echo "<option value=$customer_id>".$customer_id."</option>";
}

?>

</select>
<button>DELETE</button>
</form>


<form action="select_customer.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT customer_id FROM Customer";

$myresult = mysqli_query($db, $sql_command);

while($cid_rows = mysqli_fetch_assoc($myresult))
{
	$customer_id = $cid_rows['customer_id'];
	echo "<option value=$customer_id>".$customer_id."</option>";
}

?>
</select>

<button>SELECT</button>
</form>
</div>

<?php include "config.php"?>
 
  <div class="container">
    <h1 class="text-center" >ADDRESS TABLE</h1>
      <a href="addresses_options.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i></a>
 
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
            $query="SELECT * FROM Address";               // SQL query to fetch all table data
            $view_users= mysqli_query($db,$query);    // sending the query to the database
 
            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
              $addressid = $row['addressid'];                
              $Address_name = $row['Address_name'];                
              $Address_field = $row['Address_field'];              
              echo "<tr >";
              echo " <td > {$addressid}</th>";
              echo " <td >{$Address_name}</th>";
              echo " <td > {$Address_field}</th>";
 
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>

<?php include "insert_address.php"?>
<div style="text-align:center">
<form action="delete_address.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT addressid, Address_name FROM Address";

$myresult = mysqli_query($db, $sql_command);

while($cid_rows = mysqli_fetch_assoc($myresult))
{
	$addressid = $cid_rows['addressid'];
    $Address_name = $cid_rows['Address_name'];

	echo "<option value=$addressid>"."id: ".$addressid." Address name: ".$Address_name."</option>";
}

?>
</select>

<button>DELETE</button>
</form>

<form action="select_address.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT addressid, Address_name FROM Address";

$myresult = mysqli_query($db, $sql_command);

while($cid_rows = mysqli_fetch_assoc($myresult))
{
	$addressid = $cid_rows['addressid'];
    $Address_name = $cid_rows['Address_name'];

	echo "<option value=$addressid>"."id: ".$addressid." Address name: ".$Address_name."</option>";
}

?>
</select>
<button>SELECT</button>
</form>
</div>

 
  <div class="container">
    <h1 class="text-center" >Customer Address Relationship TABLE (Belongs) </h1>
      <a href="addresses_options.php" class='btn btn-outline-dark mb-2'> <i class="bi bi-person-plus"></i></a>
 
        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">Customer ID</th>
              <th  scope="col">Address ID</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
  
          <?php
            $query="SELECT * FROM Belongs";               // SQL query to fetch all table data
            $view_users= mysqli_query($db,$query);    // sending the query to the database
 
            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
              $customer_id = $row['customer_id'];                
              $Address_id = $row['Address_id'];                
              echo "<tr >";
              echo " <td > {$customer_id}</th>";
              echo " <td >{$Address_id}</th>";
 
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>

<?php include "insert_belong.php"?>
<div style="text-align:center">
<form action="delete_belong.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT customer_id, Address_id FROM Belongs";

$myresult = mysqli_query($db, $sql_command);

while($cid_rows = mysqli_fetch_assoc($myresult))
{
	$customer_id = $cid_rows['customer_id'];
    $Address_id = $cid_rows['Address_id'];

	echo "<option value=$customer_id>"."c_id: ".$customer_id." a_id: ".$Address_id."</option>";
}

?>
</select>

<button>DELETE</button>
</form>

<form action="select_belong.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT customer_id FROM Belongs";

$myresult = mysqli_query($db, $sql_command);

while($cid_rows = mysqli_fetch_assoc($myresult))
{
	$customer_id = $cid_rows['customer_id'];

	echo "<option value=$customer_id>"."c_id: ".$customer_id."</option>";
}

?>
</select>

<button>SELECT</button>
</form>
</div>

<?php include "config.php"?>
 
  <div class="container">
    <h1 class="text-center" >Customer Product Relationship TABLE (Orders) </h1> 
        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th  scope="col">Order ID</th>
              <th  scope="col">Customer ID</th>
              <th  scope="col">Product ID</th>
            </tr>  
          </thead>
            <tbody>
              <tr>
  
          <?php
            $query="SELECT * FROM Orders";               // SQL query to fetch all table data
            $view_users= mysqli_query($db,$query);    // sending the query to the database
 
            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
              $purid = $row['purid'];                
              $cuid = $row['cuid'];                
              $pid = $row['pid'];                
              echo "<tr >";
              echo " <td > {$purid}</th>";
              echo " <td > {$cuid}</th>";
              echo " <td >{$pid}</th>";
 
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>
<?php include "insert_orders.php"?>
<div style="text-align:center">
<form action="delete_orders.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT cuid, pid FROM Orders";

$myresult = mysqli_query($db, $sql_command);

while($cid_rows = mysqli_fetch_assoc($myresult))
{
	$cuid = $cid_rows['cuid'];
    $pid = $cid_rows['pid'];

	echo "<option value=$cuid>"."c_id: ".$cuid." a_id: ".$pid."</option>";
}

?>
</select>

<button>DELETE</button>
</form>

<form action="select_orders.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT cuid FROM Orders";

$myresult = mysqli_query($db, $sql_command);

while($cid_rows = mysqli_fetch_assoc($myresult))
{
	$cuid = $cid_rows['cuid'];

	echo "<option value=$cuid>"."c_id: ".$cuid."</option>";
}

?>
</select>

<button>SELECT</button>
</form>
</div>


<?php include "config.php"?>
 
  <div class="container">
    <h1 class="text-center" > Product Courier Relationship TABLE (Sent With) </h1> 
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
            $query="SELECT * FROM SentWith";               // SQL query to fetch all table data
            $view_users= mysqli_query($db,$query);    // sending the query to the database
 
            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
              $product_id = $row['product_id'];                
              $courrier_id = $row['courrier_id'];                
              echo "<tr >";
              echo " <td > {$product_id}</th>";
              echo " <td > {$courrier_id}</th>"; 
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>
<?php include "insert_SentWith.php"?>
<div style="text-align:center">
<form action="delete_SentWith.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT product_id, courrier_id FROM SentWith";

$myresult = mysqli_query($db, $sql_command);

while($cid_rows = mysqli_fetch_assoc($myresult))
{
	$product_id = $cid_rows['product_id'];
    $courrier_id = $cid_rows['courrier_id'];

	echo "<option value=$product_id>"."p_id: ".$product_id." c_id: ".$courrier_id."</option>";
}

?>
</select>

<button>DELETE</button>
</form>

<form action="select_SentWith.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT product_id FROM SentWith";

$myresult = mysqli_query($db, $sql_command);

while($cid_rows = mysqli_fetch_assoc($myresult))
{
	$product_id = $cid_rows['product_id'];

	echo "<option value=$product_id>"."p_id: ".$product_id."</option>";
}

?>
</select>

<button>SELECT</button>
</form>
</div>

<?php include "config.php"?>
 
  <div class="container">
    <h1 class="text-center" > Product Ingredient Relationship TABLE (Needs) </h1> 
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
            $query="SELECT * FROM Needs";               // SQL query to fetch all table data
            $view_users= mysqli_query($db,$query);    // sending the query to the database
 
            //  displaying all the data retrieved from the database using while loop
            while($row= mysqli_fetch_assoc($view_users)){
              $pid = $row['pid'];                
              $iid = $row['iid'];                
              echo "<tr >";
              echo " <td > {$pid}</th>";
              echo " <td > {$iid}</th>"; 
                  }  
                ?>
              </tr>  
            </tbody>
        </table>
  </div>
<?php include "insert_Needs.php"?>
<div style="text-align:center">
<form action="delete_Needs.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT pid, iid FROM Needs";

$myresult = mysqli_query($db, $sql_command);

while($cid_rows = mysqli_fetch_assoc($myresult))
{
	$pid = $cid_rows['pid'];
    $iid = $cid_rows['iid'];

	echo "<option value=$pid>"."p_id: ".$pid." i_id: ".$iid."</option>";
}

?>
</select>

<button>DELETE</button>
</form>

<form action="select_Needs.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT pid FROM Needs";

$myresult = mysqli_query($db, $sql_command);

while($cid_rows = mysqli_fetch_assoc($myresult))
{
	$pid = $cid_rows['pid'];

	echo "<option value=$pid>"."p_id: ".$pid."</option>";
}

?>
</select>

<button>SELECT</button>
</form>
</div>
</body>
