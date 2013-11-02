<h2>Welcome to My 2 Cents.  Please register to start sharing your opinions with the rest of the world</h2>

<form method='POST' action='/users/p_signup'>

    First Name<br>
    <input type='text' name='first_name'>
    <br><br>

    Last Name<br>
    <input type='text' name='last_name'>
    <br><br>

    Email<br>
    <input type='text' name='email'>
    <br><br>

    Password<br>
    <input type='password' name='password'>
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



