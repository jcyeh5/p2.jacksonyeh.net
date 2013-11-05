<div class="mainframe">
	<h1>Welcome to <?=APP_NAME?><?php if($user) echo ', '.$user->first_name; ?></h1>

	<ul>
		<li><h2>Name: <span class="stat"><?=$user->first_name?> <?=$user->last_name?></span></h2></li>
		<li><h3>Email: <span class="stat"> <?=$user->email?> </span></h3></li>
		<li><h3>Number of posts:  <span class="stat"><?=$posts['num_posts']?> </span></h3></li>
		<li><h3>Number of followers:  <span class="stat"><?=$followers['num_followers']?> </span></h3></li>
		<li><h3>Latest post: 	 <span class="stat"><time datetime="<?=Time::display($lastpost['created'],'Y-m-d G:i')?>"> <?=Time::display($lastpost['created'])?> </time> </span></h3></li>
	</ul>
</div>


