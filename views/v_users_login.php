<div id="loginframe">
	<form id= "loginform" method='POST' action='/users/p_login'>

		Email<br>
		<input type='text' name='email'>

		<br><br>

		Password<br>
		<input type='password' name='password'>

		<br><br>

		<?php if(isset($error)): ?>
			<div class='error'>
				Login failed. Please double check your email and password.
			</div>
			<br>
		<?php endif; ?>
		
		
		<input type='submit' value='Log in'>
	</form>

	<div id="welcometextdiv">
		<p>Welcome to My 2 Cents.  If you have an account already, please sign in.  If you do not have an account, 
		please sign up to start giving the rest of the world a piece of your mind.</p>
		
				<div align= right><a href='/users/signup'><img  src="/images/signuptoday.png"></a></li></div>
	</div>
	
	
	
</div>
