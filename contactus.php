<?php 

//create a session for all the pages
	session_start();

?>




<!DOCTYPE html>
<html>
	<head>
		<title> Web Dev Noodle House </title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
        <link href="https://fonts.googleapis.com/css?family=Cardo:400,700|Oswald" rel="stylesheet">
		<script src="js/tinymce/tinymce.min.js"></script>
		<script> tinymce.init({selector: 'textarea'}); </script>
	</head>
	
	<body>
	<div class="container-left">
            <br>
            <div class="title">Noodle House</div>
            <div class="aside-block login">
               <?php
				
					if(isset($_SESSION['userid'])){
			
						echo '<form action="includes/logout.inc.php" method="post">

							<button type="submit" name="logout-submit">Logout</button>
				
							</form>';
			
			
					}
				
				?>
            </div>
            <br>
            <div class="menu">
                <nav>
                    <ul class="page-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                       
                    </ul>
                </nav>
            </div>
        </div>
			</nav>
			<div class="container-right">
				<main>
				<h1> Contact Us</h1>
					<div class="tq">
					  <form action="contacted.php" method="POST">
						<fieldset>
						  <legend>Contact Us</legenD>
						  <p class="ques">Email Address</p>
						  <input type="hidden" name="var" value="value" />
						  <input type="text" name="email" placeholder="email address"></input><br />
						  
						  <p class="ques">Message</p>
						  <input type="hidden" name="var" value="value" />
						  <textarea name="message" rows="4" cols="20" placeholder="message"></textarea><br />
						  <input type="submit" name="Button1" value="Submit" />
						  <input type="reset" value="Reset" />
						</fieldset>
					  </form>
					  
					
					</div>
				</main>
			</div>
		</div>
	</body>
</html>