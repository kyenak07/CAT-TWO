
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="Design.css">
</head>
<body class="log2">
<div class="box1">
    <h2>Login</h2>
    <form action="Regprocess2.php" method="get">
        <!--        <div class="inputbox">-->
        <!--            <input type="text" name="Username" required>-->
        <!--            <label for="">Username</label>-->
        <!--        </div>-->
        <div class="inputbox">
            <input type="email" name="Email" required>
            <label for="">Email</label>
        </div>
        <div class="inputbox">
            <input type="password" name="Password" required>
            <label for="">Password</label>
        </div>
        <input type="submit" name="btn_submit" value="Submit">
    </form>
</div>
</body>
</html>