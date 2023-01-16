<?php 

session_start(); 

include "config.php";

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;
	}
    $uname = validate($_POST['username']);

    $pass = validate($_POST['Passwordname']);

    if (empty($uname)) {

        header("Location: loginNew.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: loginNew.php?error=Password is required");

        exit();

    }else{
   
        $sql = "SELECT * FROM admin WHERE username='$uname' AND Passwordname='$pass'";

        $result = mysqli_query($db, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $uname && $row ['Passwordname'] === $pass) {

                echo "Logged in!";

                $_SESSION['user_name'] = $row['username'];

                $_SESSION['id'] = $row['ID'];

                header("Location: admin.php");

                exit();

            }else{

                header("Location: loginNew.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: loginNew.php?error=Incorect User name or password");

            exit();

        }
 }