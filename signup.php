
	<?php
	require_once "./script/log.header.php"
	?>
	<div class="container log">
		<div class="login-content">
			<form action="script/signup.inc.php" method="POST">
				<img src="images/profile.svg">
				<h2 class="title">REGISTRE </h2>
           		<div class="input-div user">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input name="user" type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div email">
           		   <div class="i"> 
                      <i class="fas fa-envelope"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Email</h5>
           		    	<input name="mail" type="email" class="input">
            	   </div>
                </div>
                <div class="input-div pwd">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input name="pwd" type="password" class="input">
            	   </div>
				</div>
				<div class="input-div re-pwd">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Repeat Password</h5>
           		    	<input name="re-pwd" type="password" class="input">
            	   </div>
            	</div>
            	<a href="login.php">already have an account?</a>
            	<input name="signup-submit" type="submit" class="btn" value="Sign up">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="script/main.js"></script>
</body>
</html>