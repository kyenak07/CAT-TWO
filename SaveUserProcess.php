<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 10/18/18
 * Time: 10:28 AM
 */
if (isset($_GET['btnsave'])){
    $connected = mysqli_connect("localhost","root","","Students");
    if (!$connected){
        echo "Failed to Connect to the Database";
    }else{
        $name = $_GET['Name'];
        $email = $_GET['Mail'];
        $phone = $_GET['Number'];
        $insert = "INSERT INTO `Details`(`Id`, `Jina`, `Arafa`, `Simu`) VALUES (null,'$name','$email','$phone')";
        $query = mysqli_query($connected,$insert);
        if ($query){
            echo "Saved Successfully";
            header("location:SaveUser.php");
        }else{
            echo "Failed to save";
        }
    }
}
?>