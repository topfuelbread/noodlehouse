
<html>
	<head>
		<title> Web Dev Noodle House </title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
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
                        <a class="button" href="createaccount">Create Account</a>
                    </form>
            </div>
            <br>
            <div class="menu">
                <nav>
                    <ul class="page-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="contactus.html">Contact Us</a></li>
                        <li><a href="reservation.php">Reservation</a></li>
                    </ul>
                </nav>
            </div>
            
        </div>
        
        <div class="container-right">
			<main>
				<br>The message has been received.</br>
				<br>We will get back to you shortly.</br>
				<?php 
					$to = "kim13d@uwindsor.ca";
					$subject = "Noodle House";
					mail($to, $subject, $_POST["message"], $_POST["email"]);
				?>
			</main>
		</div>
	</body>
</html>