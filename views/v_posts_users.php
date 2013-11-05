<div class="mainframe">
	<?php foreach($users as $user): ?>

		<span id="post_users_name">
		
		<!-- If there exists a connection with this user, show a unfollow link -->
		<?php if(isset($connections[$user['user_id']])): ?>
			<a href='/posts/unfollow/<?=$user['user_id']?>'><img height=15 width=47 class="followbutton" src="/images/unfollow.png" alt="click to unfollow"></a>

		<!-- Otherwise, show the follow link -->
		<?php else: ?>
			<a href='/posts/follow/<?=$user['user_id']?>'><img height=15 width=47 src="/images/follow.png" alt="click to follow"></a>
		<?php endif; ?>
	 
		<!-- Print this user's name -->
		<?php echo "  "?><?=$user['first_name']?> <?=$user['last_name']?></span>
		<br><br>	
		
		
	<?php endforeach; ?>
</div>
