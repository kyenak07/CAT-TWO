<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saving</title>
</head>
<body>
<h1>Welcome</h1>
<hr>
<form action="SaveUserProcess.php" method="get">
    <input type="text" name="Name" placeholder="Student's Name" required>
    <input type="email" name="Mail" placeholder="Enter Email" required>
    <input type="number" name="Number" placeholder="Enter Number" required>
    <input type="submit" name="btnsave" value="Save">
</form>
<a href="ShowUsers.php"><button>Show Users</button></a>
</body>
</html>