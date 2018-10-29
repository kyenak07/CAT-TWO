<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/Design.css">

</head>
<body>
<h1 class="h">Users</h1>
<hr>
<a href="SaveUser.php"><button class="btn btn-primary">Add User</button></a>
<table>
    <tr>
        <th>Names</th>
        <th>Emails</th>
        <th>Phone Numbers</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>

    <?php
    /**
     * Created by PhpStorm.
     * User: emobilis
     * Date: 10/18/18
     * Time: 11:17 AM
     */
$connect = mysqli_connect("localhost","root","","Students");
$fetch = mysqli_query($connect,"select * from Details");
while ($row = mysqli_fetch_assoc($fetch)){
//    $majina = $_POST['Jina'];
//    $email = $_POST['Arafa'];
//    $namba = $_POST['Simu'];
    extract($row);
   echo
   "<tr>
<td>$Jina</td>
<td>$Arafa</td>
<td>$Simu</td>

<td><a href='Delete.php?x=$Id'><button class='btn btn-danger'>Delete</button></a></td>
<td><a href='Update.php?x=$Id'><button class='btn btn-primary'>Update</button></a></td>
</tr>";
}

    ?>
</table>
</body>
</html>