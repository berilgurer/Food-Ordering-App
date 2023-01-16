<html>
<head>
    <title>My Addresses</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div style="margin:0 auto; width:66%;height:50px;display: flex;">
        <div style="width:50%;height: 100%;height: 100%;">
            <a href="index.php">
                <img src="images/logo1.png" style="max-width: 16%;margin: 4px;display:inline-block">
            </a>
        </div>
    </div>
    <div style="width:100%; background-color:rgb(223, 234, 241); height:50px;"></div>

    <div
        style="margin:0 auto; padding:10px 0 50px; width:66%; min-height:500px;display:flex;background-color: rgb(231, 228, 228);">
        <div align="center" style="width:40%; margin:0 auto;border:1px solid #ccc; ">
            <form action="send_address.php" method="POST">
                <br><br>
                <input type="text" name="name" placeholder="Type your name: ">
                <br><br>
                <input type="text" name="add_name" placeholder="Type your address name: ">
                <br><br>
                <input type="text" name="add" placeholder="Type your address: ">
                <br><br>
                <button>ADD</button>
                <br><br>
                <?php include "my_addresses.php"; ?>
            </form>
        </div>

    </div>

    <div style="width: 100%;background-color:rgb(66, 83, 99);color:wheat;height: 260px;">
        <div style="margin:0 auto; width:66%; height:100%;display:flex">
            <div style="display: inline-block; width: 33%;">
                <ul>
                </ul>
            </div>
        </div>
    </div>

</body>
</html>
