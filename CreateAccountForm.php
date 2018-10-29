<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Account</title>
    <link rel="stylesheet" href="Design.css">
</head>
<body class="log2">
<div class="box">
    <h2>Create Account</h2>
    <form action="RegistrationProcess.php" method="get">
        <div class="inputbox">
            <input type="text" name="Name1" required>
            <label for="">First Name</label>
        </div>
        <div class="inputbox">
            <input type="text" name="Name2" required>
            <label for="">Second Name</label>
        </div>
        <div class="inputbox">
            <input type="email" name="Email" required>
            <label for="">Email</label>
        </div>
        <div class="inputbox">
            <input type="number" name="Number" required>
            <label for="">Phone No.</label>
        </div>
        <div class="inputbox">
            <input type="text" name="Username" required>
            <label for="">Username</label>
        </div>
        <div class="inputbox">
            <input type="password" name="Password" required>
            <label for="">Password</label>
        </div>
        <input type="submit" name="" value="Submit">
    </form>
</div>
</body>
</html>