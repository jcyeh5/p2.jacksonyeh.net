<div class="mainframe">
	<h2>Welcome to My 2 Cents.  Please register to start sharing your opinions with the rest of the world</h2>

	<form method='POST' action='/users/p_signup'>

		First Name<br>
	   <input type='text' name='first_name' 
			<?php if (isset($profile['first_name'])): ?>
				value="<?=$profile['first_name']?>">
			<?php else: ?>
				>
			<?php endif; ?>
			<?php if ($first_name_error <> ""):?> 
				<font color="red"><?=$first_name_error?></font>
			<?php endif;?>
		<br><br>

		Last Name<br>
	   <input type='text' name='last_name' 
			<?php if (isset($profile['last_name'])): ?>
				value="<?=$profile['last_name']?>">
			<?php else: ?>
				>
			<?php endif; ?>	   
			<?php if ($last_name_error <> ""):?> 
				<font color="red"><?=$last_name_error?></font>
			<?php endif;?>	
		<br><br>

		Email<br>
	   <input type='text' name='email' 
			<?php if (isset($profile['email'])): ?>
				value="<?=$profile['email']?>">
			<?php else: ?>
				>
			<?php endif; ?>	  	   
			<?php if ($email_error <> ""):?> 
				<font color="red"><?=$email_error?></font>
			<?php endif;?>
		<br><br>

		Password<br>
		<input type='password' name='password'
			<?php if (isset($profile['password'])): ?>
				value="<?=$profile['password']?>">
			<?php else: ?>
				>
			<?php endif; ?>	  		
			<?php if ($password_error <> ""):?> 
				<font color="red"><?=$password_error?></font>
			<?php endif;?>			
		<br><br>

		<input type='hidden' name='timezone'>

		<script>
			$('input[name=timezone]').val(jstz.determine().name());
		</script>

		<?php if(isset($error)): ?>
			<div class='error'>
				There is an existing account with that email address.  Please use another.
			</div>
			<br>
		<?php endif; ?>	
		
		<input type='submit' value='Sign up'>

	</form>

</div>

