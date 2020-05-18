<?php include ('server.php') ?>

<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <link rel="stylesheet" type="text/css" href="registerlogin.css">
</head>
<body>
    <nav>
        <label class="logo">JD-ADA</label>
        <ul id="right-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">Sell</a></li>
            <li><a href="shopdisplayonly.php">Shop</a></li>
            <li><a href="index.php">Favorite</a></li>
            <li><a href="index.php">Profile</a></li>
        </ul>
    </nav>

    <div class="align">
        <div class="card">
            <div class="head">
                <div>
                </div>
                <a id="login" href="#login" action="registerlogin.php" method="post" >Log In</a>
                <a id="register"href="#register"  action="registerlogin.php" method="post">Register</a>
                <div></div>
            </div>
            <div class="tabs" action="registerlogin.php" method="post">
                <form action="registerlogin.php" method="post">
                    <? php include ('eror.php') ?>
					<div class="inputs">
						<div class="input">
							<input placeholder="Username" type="text" name="username" required>
							<img src="img/user.svg">
						</div>
						<div class="input">
							<input placeholder="Password" type="password"name="password" required>
							<img src="img/pass.svg">
						</div>
					</div>
					<button type="submit" name="login_btn" value="Login">Login</button>
                </form>
                <form  method="post" action="registerlogin.php" >
                    <? php include ('eror.php') ?>
					<div class="inputs">
						<div class="input">
							<input placeholder="Email" type="email" name="email" class="textInput" required>
							<img src="img/mail.svg">
						</div>
						<div class="input">
							<input placeholder="Username" type="text" name="username" class="textInput" required>
							<img src="img/user.svg">s
                        </div>
                        <div class="input">
							<input placeholder="Phone" type="number" name="phone" class="textInput" required>
							<img src="img/phone.svg">
						</div>
						<div class="input">
							<input placeholder="Password" type="password" name="password" class="textInput" required>
							<img src="img/pass.svg">
						</div>
					</div>
					<button type="submit" name="register_btn"  value="Register">Register</button>
				</form>
            </div>
        </div>

    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>