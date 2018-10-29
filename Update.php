<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
<body>
<h1>Update Users</h1>
<a href="ShowUsers.php"><button>Cancel</button></a>
<hr>
<form action="UpdateProcess.php" method="post">
    <?php
    /**
     * Created by PhpStorm.
     * User: emobilis
     * Date: 10/23/18
     * Time: 10:32 AM
     */
    $connected = mysqli_connect("localhost","root","","Students");
//    extract($_GET);
    $Id = $_GET['x'];
    $fetch = mysqli_query($connected,"select * from Details where Id=$Id");
    $row = mysqli_fetch_assoc($fetch);
    extract($row);



    ?>
    <input type="text" name="name" value="<?php echo $Jina; ?>">
    <input type="email" name="email" value="<?php echo $Arafa;?>">
    <input type="number" name="number" value="<?php echo $Simu; ?>">
    <input type="number" name="Id" value="<?php echo $Id; ?>" hidden>
    <input type="submit" name="btn-save" value="Update">
</form>
</body>
</html>