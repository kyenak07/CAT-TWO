<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 10/25/18
 * Time: 10:48 AM
 */
if(isset($_GET['Name1'])){
    $connect = mysqli_connect("localhost","root","","Cat Imbo");
    if (!$connect){
        echo "Failed To Connect To Database";
    }else {
        $Fname = $_GET['Name1'];
        $Sname = $_GET['Name2'];
        $Email = $_GET['Email'];
        $Number = $_GET['Number'];
        $Username = $_GET['Username'];
        $Password = $_GET['Password'];
        $insert = "INSERT INTO `CatDetails`(`Id`, `First Name`, `Second Name`, `Email`, `Number`, `Username`, `Password`) VALUES (null,'$Fname','$Sname','$Email','$Username','$Number','$Password')";
        $query = mysqli_query($connect,$insert);
        if ($query){
            echo "Data Saved Successfully";
            header("location:LoginForm.php");
        }else{
            echo "Failed To Save";
        }
    }
}







?>