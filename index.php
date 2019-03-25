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
				
							</form>
							
							<div class="menu">
					<nav>
					
						<ul class="page-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="menu.php">Menu</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                        
                    </ul>
                </nav>
            </div>';
			
			
					}else{
			
						echo '<form class="form-login" action="includes/login.inc.php" method="post">
							
								<h2>Login</h2>
					
							<p>
								<label for="username">Username</label>
					
								<input type="text" name="mailuid" placeholder="Username/E-mail...">
							</p>
							
							<p>
								<label for="password">Password</label>
					
								<input type="password" name="pwd" placeholder="Password...">
							</p>
							
						<button type="submit" name="login-submit">Login</button>
					
						</form>
						
						
						<div class="menu">
                <nav>
                    <ul class="page-nav">
                        <li><a href="index.php">Home</a></li>
                    
                        
                    </ul>
                </nav>
            </div>';
			
					}
				
				?>
			
					<a class="button" href="signup.php">Signup</a>
				
            </div>
            </br>
            
        </div>
        
        <div class="container-right">
                <div class="midsection-picture">
                    <img class="myslide" src="http://runawayrice.com/wp-content/uploads/2017/11/Vietnamese-Beef-Noodle-Soup-Pho-Bo-Recipe.jpg">
                    <img class="myslide" src="https://cms.splendidtable.org/sites/default/files/styles/w2000/public/Pho-Cookbook_Seafood-Pho-LEDE_0.jpg?itok=n5h7VTZG">
                    <img class="myslide" src="http://aromasian.com/wp-content/uploads/2017/08/vietnamese-beef-noodle-Pho-Bo.jpg">
                </div>
            <script>
                var ind= 0;
                slideshow();

                function slideshow(n) {
                    var i;
                    var x = document.getElementsByClassName("myslide");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    
                    ind++;
                    if (ind > x.length) {ind = 1}    
                    x[ind-1].style.display = "block";  
                    setTimeout(slideshow, 4000);
                }
            </script>


					<main>
					<article>

			<?php
			
			
			if(isset($_SESSION['userid'])){
				
				echo '<h1> 
						Welcome to Noodle House, since you are logined in, you get access to our members only menu ! ! ! 
					</h1>
					<p> 
					The number one spot to order a taste of Vietnam\'s heavenly meals Try out our famous pho noodle soups or hop on in to get a freshly made salads! 
					
					';
				
			}else{
				
				
				echo'<h1>Sorry, this is a members only restaurant, in order to get access to our website, please login if you are a member, otherwise simply click Signup.</h1>';
				
				
			}
		
			
			?>
            
				
						
					</article>
				</main>
			</div>
	</body>
</html>
