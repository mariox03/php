<?php require('session.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
</head>

<?php
if (logged_in()) {
?>
    <script type="text/javascript">
            window.location = "index.php";
    </script>
    <?php
}
?>

<body>
    <h3>Please Sign In</h3>
    <form action="processlogin.php" method="post">
            <input placeholder="E-mail" name="email" type="email" autofocus>
            <input placeholder="Password" name="password" type="password" value="">
            <div>
                <label>
                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                </label>
                </div>
            <button type="submit" name="btnlogin">Login</button> 
    </form>
    <a href="registration.php"><button type="submit">Sign Up</button> </a>

    <script src="js/jquery-1.11.0.js"></script>
</body>

</html>