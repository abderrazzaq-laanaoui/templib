<?php
 	require_once "./script/log.header.php"
 ?>
	
	 <div class="container log">
		<div class="login-content">
			<form action="script/login.inc.php" method="POST">
				<img src="images/profile.svg">
				<h2 class="title">WELCOME</h2>
           		<div class="input-div user">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input name="user" type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input name="pwd" type="password" class="input">
            	   </div>
            	</div>
				<a href="signup.php">Create an account?</a>
            	<input name="login-submit" type="submit" class="btn" value="Login">
            </form> 
		</div>
    <script type="text/javascript" src="script/main.js"></script>
</body>
</html>