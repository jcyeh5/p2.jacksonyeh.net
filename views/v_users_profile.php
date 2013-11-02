<h1>This is the profile of <?=$user->first_name?></h1>

<form method='POST' action='/users/p_profile'>


    First Name<br>
   <input type='text' name='first_name' value="<?php echo $profile['first_name'] ?>" >
    <br><br>

    Last Name<br>
   <input type='text' name='last_name' value='<?=$profile['last_name']?>'>
    <br><br>

    Email<br>
   <input type='text' name='email' value='<?=$profile['email']?>'>
    <br><br>

    Change Password<br>
    <input type='password' name='change_password'> <?php if ($change_password_error <> null) echo $change_password_error; ?>
    <br><br>

    Confirm Change Password<br>
    <input type='password' name='confirm_password'> 
    <br><br>	
	
	<input type='hidden' name='timezone'>

	<script>
		$('input[name=timezone]').val(jstz.determine().name());
	</script>

    <input type='submit' value='Update'>


</form>
