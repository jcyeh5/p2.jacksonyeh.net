<div class="mainframe">
	<h1>Welcome to <?=APP_NAME?><?php if($user) echo ', '.$user->first_name; ?></h1>

	<ul>
		<li><h2>Name: <?=$user->first_name?> <?=$user->last_name?></h2></li>
		<li><h3>Email: <?=$user->email?> </h2></li>
		<li><h3>Number of posts: <?=$posts['num_posts']?> </h3></li>
		<li><h3>Number of followers: <?=$followers['num_followers']?> </h3></li>
		<li><h3>Latest post: 	<time datetime="<?=Time::display($lastpost['created'],'Y-m-d G:i')?>"> <?=Time::display($lastpost['created'])?> </time> </h3></li>
	</ul>
</div>


