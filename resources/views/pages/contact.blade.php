<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name', 'PHPTestApp')}}</title>

</head>
<body>
	<nav>
		<ul class="nav justify-content-center">
			<li class="nav-item"><a class="nav-link" href="#">Home</a></li>			
			<li class="nav-item"><a class="nav-link" href="#">Contact</a>
		</ul>
		<div class="nav-login">
			<!-- display logout button if logged in, hide otherwise -->
			<?php 
				if(isset($_SESSION['loggedIn'])) { ?> 
					<!-- display if loggedIn-->
					<form action="#" method="POST">
						<p>You are logged in.</p>
						<input type="hidden" name="submitted" value="true">
						<input class="btn btn-primary" type="submit" name="submit">Logout</input>
					</form>
				 <?php } else { ; ?>
				<!-- Display; NOT loggedIn  -->
				<form action="#" method="POST">
					<!-- TODO: accept username or email for username -->
					<input type="text" name="username" placeholder="Email" required>						
					<input type="password" name="password" placeholder="password" required>
					<input type="hidden" name="submitted" value="true">
					<button class="btn btn-secondary" type="submit" name="submit">Login</button>
					
				</form>				
				<form>
					<button class="btn btn-warning"><a href="register.php"></a>Sign Up</button>	
				</form>
			 <?php }; ?>
		</div>
	</nav>

	<h2>Contact</h2>
	<p><span class="error">* required field</span></p>
	<form method="post" action="#">  
	  Name: <input type="text" name="name" value="">
	  <span class="error">* </span>
	  <br><br>
	  E-mail: <input type="text" name="email" value="">
	  <span class="error">* </span>
	  <br><br>  
	  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
	  <br><br>
	  
	  <input type="submit" name="submit" value="Submit">  
	</form>
</body>
</html>