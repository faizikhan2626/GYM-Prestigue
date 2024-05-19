<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class ="bodyStart">
        <div class="Gymlogo"><img src="images/logo.png" ></div>
        <h2>Login</h2>
        

        <form action="login.php" method="post">
            <?php if(isset ($_GET['error'])){?>
                <p class="error"><?php echo $_GET['error'];?></p>
           <?php }?>
            <div class="input-group">
                <label for="username">Username</label>
                <input type="text" id="uname" name="uname" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
