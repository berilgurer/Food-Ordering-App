



<html>
<head>
    <title>Checkout</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div style="margin:0 auto; width:66%;height:50px;display: flex;">
        <div style="width:50%;height: 100%;height: 100%;">
            <a href="index.php">
                <img src="images/logo1.png" style="max-width: 30;margin: 4px;display:inline-block">
            </a>
        </div>
        <div style="width:50%;height: 100%;">
            <a class="button-top-right">My Basket</a>
            <a class="button-top-right" href="addresses.php" class="button-top-right">My Addresses</a>
        </div>
    </div>

    <div style="width:100%; background-color:rgb(223, 234, 241); height:150px;"></div>

    <div style="margin:0 auto; padding:10px 0 50px; width:66%; border: 1px solid #ccc">
        <table style="width: 100%;">
            <tr><td><h2>Checkout</h2></td></tr>
            <tr>
                <td style="vertical-align: top;width: 80%;height: 250px; background-color: white; ">
                    <table style="border: 1px solid #ccc;width:100%; " cellspacing=0  cellpadding=0 >
                        <tr>
<td style="background-color:lightgray;padding:10px 0 10px 5px"> Image</td>
                            <td style="background-color:lightgray;padding:10px 0 10px 5px"> Product Name</td>
                           
                            <td style="background-color:lightgray;padding:10px 0 10px 5px;text-align: center;">Price</td>
                        </tr>
                        <tr>
                            <?php include 'checkoutproduct.php' ?>
                        </tr>
                    </table>    
                </td>
                <td style="width: 20%; border-left:1px solid whitesmoke;vertical-align: top;padding-left:15px;">
                    <div style="border-radius:15px; background-color:greenyellow;padding: 15px;">
                        <h3>Basket</h3> 
                        <div>₺<?php include 'checkoutprice.php'?></div>
                        <a class="button-top-right" href="orders.php?id={$id}">Submit</a>
                    </div>    
                </td>
            </tr>
            <tr>
                <td colspan="2" style="height: 300px; vertical-align: top;padding:30px 0 0 10px;border-top:1px solid whitesmoke" >

                    <div style="display: flex;width:100%;">
                        <div style="display: inline-block;float:left;width: 50%;">
                            <h3>Order Address</h3>
                            <table >
                                <tr>
                                    <td>Select Address </td>
                                    <td>:</td>
                                    <td>
                                        

                                            <?php include 'address_options.php'; ?>
                                        
                                    </td>
                                </tr>
                            </table>
                         

                            
                        </div>
                        <div style="display: inline-block;float:right;width: 50%;">
                            <h3>Order</h3>
                            <table>
                                <tr>
                                    <td>Select Courier </td>
                                    <td>:</td>

                                </tr>

                            </table>
<?php include 'shipping.php'; ?>

                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>

    <div style="width: 100%;background-color:rgb(66, 83, 99);color:wheat;height: 260px;">
        <div style="margin:0 auto; width:66%; height:100%;display:flex">
            <div style="display: inline-block; width: 33%;">
                <ul>
                    <li><a class="footer-link" href="#">Hakkımızda</a> </li>
                    <li><a class="footer-link" href="#">İletişim</a> </li>
                </ul>
            </div>
        </div>
    </div>

</body>
</html>
