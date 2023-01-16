<html>
    <head>
        <title>PAH</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <div style="margin:0 auto; width:66%;height:50px;display: flex;">
            <div style="width:50%;height: 100%;height: 100%;">
                <a href="index.php">
                    <img src="images/logo1.png" style="max-width: 20%;margin: 4px;display:inline-block" >
                </a>
            </div>        
            <div style="width:50%;height: 100%;">
                <a href="addresses.php" class="button-top-right" >Addresses</a>
            </div>        
        </div>

        <div style="width:100%; background-color:rgb(223, 234, 241); height:60px;"></div>

        <div style="margin:0 auto; width:66%; height:100%;display:flex;background-color: rgb(231, 228, 228);">
            <div style="width:20%;display:inline-block">
                <h3 style="margin-left:10px">Categories</h3>
                <ul class="left-menu">
                </ul>
            </div>
            <div style="width:80%;display:inline-block;background-color: rgb(247, 246, 250);">
                <table style="width: 100%;margin-top: 20px;">
                    <tr>
                        <th colspan="3"></th>
                    </tr>
                    <?php include 'get_orders.php'; ?>
                </table>
            </div>
        </div>

       
    </body>
</html>
