<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10/23/2018
 * Time: 8:01 PM
 */
require_once ('Connect.php');
$connect = mysqli_connect("localhost","root","","Cat Imbo");
if (isset($_POST)& !empty($_GET)){
    $username = $_GET['Email'];
    $password = $_GET['Password'];

//    echo $name. $email . $number;
    $sql = "SELECT Username FROM `CatDetails` WHERE Email ='$username' ";
    $result =mysqli_query($connect,$sql);
    $count =mysqli_num_rows ($result);
//    $sql = $mysqli->query("SELECT * FROM users WHERE email='$email'");
//    $sql= "SELECT jina FROM details WHERE jina='$name'";

    if($count == 1){
//        echo "Welcome ". $name;
        $sql2="SELECT Password FROM `CatDetails` WHERE Password ='$password' ";
        $result2 =mysqli_query($connect,$sql2);
        $count2 =mysqli_num_rows ($result2);
        if($count2==1){

//            echo "Welcome ". $username;
            header("location:ShowUsers.php");
        }
        else{
            echo "Invalid Email or Password";
//            header("location:LoginForm.php");
        }
    }else{
        echo "Invalid Email or Password";
    }
}
?>
<!---->
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--<form action="log2.php" method="get">-->
<!--    <input type="name" name="username" placeholder="Username"><br>-->
<!---->
<!---->
<!---->
<!---->
<!--    <input type="password" name="password" placeholder="Password">-->
<!---->
<!---->
<!--    <input type="submit" name="btnsave" value="log in"><br>-->
<!--</form>-->
<!---->
<!--</body>-->
<!--</html>-->
