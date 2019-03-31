<!DOCTYPE html>
<html>
	<head>
		<title> Web Dev Noodle House </title>
		<link rel="stylesheet" type="text/css" href="signup-style.css"/>
		<link rel="stylesheet" type="text/css" href="logo.css"/>
        <link href="https://fonts.googleapis.com/css?family=Cardo:400,700|Oswald" rel="stylesheet">
	</head>
	<body>
		<div class="container-left">
			<br>
			<div class="title">Noodle House</div>
			<div class="aside-block login">
				<form class="form-login" action="#" method="POST">
					<h2>Login</h2>
					<p>
						<label for="username">Username</label>
						<input id="username" type="text" name="username"/>
					</p>
					<p>
						<label for="password">Password</label>
						<input id="password" type="password" name="password"/>
					</p>
					<button type = "submit">Login</button>
					<a class="button" href="/createaccount">Create Account</a>
				</form>
			</div>
			<br>
			<div class="menu">
				<nav>
					<ul class="page-nav">
						<li><a href="/">Home</a></li>
						<li><a href="index.html">Home</a></li>
                        			<li><a href="menu-index.html">Menu</a></li>
                        			<li><a href="aboutus.php">About Us</a></li>
                        			<li><a href="contactus.html">Contact Us</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="container-right">
		<h1>Signup</h1>
			<form class="signup" action="includes/signup.inc.php" method="post">
				<input type="text" name="uid" placeholder="Username">
				<input type="text" name="mail" placeholder="E-mail">
				<input type="password" name="pwd" placeholder="Password">
				<input type="password" name="pwd-repeat" placeholder="Confirm Password">
				<button type="submit" name="signup-submit">Signup</button>
			</form>
		</div>
	</body>
</html>
