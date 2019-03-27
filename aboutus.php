<!DOCTYPE html>
<html>
	<head>
		<title> Web Dev Noodle House </title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
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
				<svg height="200" width="500">
					<defs>
						<linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
							<stop offset="0%"
							style="stop-color:rgb(172,191,234);stop-opacity:1" />
							<stop offset="100%"
							style="stop-color:rgb(203,232,201);stop-opacity:1" />
						</linearGradient>
					</defs>
					<ellipse id="logo" cx="100" cy="70" rx="85" ry="55" fill="url(#grad1)" />
					<text fill="#996688" font-size="40" x="50" y="90">
						Noodle House
					</text>
				<svg>
				
				<main>
				<br></br>
				<h1> About Us</h1>
				<h2> Home of Authentic Vietnamese Cuisine Since 2019 </h2>
					<div>
						Noodle House is a traditional Vietnamese restaurant.
					</div>
				</main>
			</div>
		</div>
	</body>
</html>