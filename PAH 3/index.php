<html>
    <head>
        <title>PAH</title>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
        <div style="margin:0 auto; width:66%;height:50px;display: flex;">
            <div style="width:100%;height: 100%;height: 100%;">
                <a href="index.php">
                    <img src="images/logo1.png" style="max-width: 20%;margin: 4px;display:inline-block" >
                </a>
            </div>        
            <div style="width:50%;height: 100%;">
                <a href="addresses.php" class="button-top-right" >Adresses</a>
            </div> 
            <div style="width:50%;height: 100%;">
                <a href="client_chat.php" class="button-top-right" >Chat</a>
            </div> 
            <div style="width:50%;height: 100%;">
                <a href="loginNew.php" class="button-top-right" >Admin</a>
            </div> 
            
        </div>

        <div style="width:100%; background-color:rgb(223, 234, 241); height:60px;"></div>

        <div style="margin:0 auto; width:66%; height:260%;display:flex;background-color: rgb(231, 228, 228);">
            <div style="width:20%;display:inline-block">
                <h3 style="margin-left:10px">Categories</h3>
                <ul class="left-menu">
                    <?php include 'category.php'; ?>
                </ul>
            </div>
            <div style="width:80%;display:inline-block;background-color: rgb(247, 246, 250);">
                <table style="width: 100%;margin-top: 20px;">
                    <tr>
                        <th colspan="3">All Products</th>
                    </tr>
                    <?php include 'all.php'; ?>
                </table>
            </div>
        </div>

 <div style="width: 100%;background-color:rgb(66, 83, 99);color:wheat;height: 60px;">
        <div style="margin:0 auto; width:66%; height:50%;display:flex">
            <div style="display: inline-block; width: 33%;">
                <ul>
                    <li><a class="footer-link" href="#">About Us</a> </li>
                    <li><a class="footer-link" href="#">Contact Info</a> </li>
                </ul>
            </div>
        </div>
    </div>

        
    </body>
</html>
