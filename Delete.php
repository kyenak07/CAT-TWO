<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 10/22/18
 * Time: 10:52 AM
 */
$connect = mysqli_connect("localhost","root","","Students");
if (isset($_GET['x'])){
    $Id = $_GET['x'];
    mysqli_query($connect,"delete from Details where Id=$Id");
    header("location:ShowUsers.php");
}
?>