<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 10/25/18
 * Time: 9:26 AM
 */
    if (isset($_POST['btn_submit']))
{
        if ((!empty($_POST['Email']))and(!empty($_POST['Password']))){
            $usernameOrEmail = $_POST['Email'];
            $password = $_POST['Password'];
            $conn = mysqli_connect("localhost","root","","Cat Imbo");

            $select = "SELECT `Id`, `First Name`, `Second Name`, `Email`, `Number`, `Username`, `Password` FROM `CatDetails` WHERE Password='$password' 
and (Username='$usernameOrEmail' or Email='$usernameOrEmail')";
            $query = mysqli_query($conn,$select);


            $rows = mysqli_num_rows($query);
            if ($rows >= 1) {
                $_SESSION["Email"] = "$usernameOrEmail";
                header("location:ShowUsers.php");
            }else {
//                header("location:LoginForm.php");
                $_SESSION["error"] = "Wrong Username or Password <br/><span style='color: #03a9f4'><nobr>Forgot Password?
<a href='#'>Reset Password</a></nobr></span>";
            }
}else
        {
//            header("location:LoginForm.php");
            $_SESSION['error'] = "Empty Email or Username";
        }
}

?>