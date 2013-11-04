<?php  if (empty($posts) ): ?>
	<div class = "mainframe">
		<p> the people you are following have no opinions... please follow some other <a href="/posts/users/">people</a> </p>
	</div>
<?php endif; ?>

<?php foreach($posts as $post): ?>

<div class = "post">
	<article>		
		<p id="post_author"><?=$post['first_name']?> <?=$post['last_name']?></p>
		<time id="post_time" datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
			<?=Time::display($post['created'])?>
		</time>
		
		<p id="post_content"><?=$post['content']?></p>
		

		<div id="post_submenu" align= right> 
			<ul>
				<!-- Display Delete button only for own posts -->
				<?php if($user->user_id == $post['post_user_id']): ?>
				<li><a href='/posts/delete/<?=$post['post_id']?>'><img src="/images/delete.png" alt="delete this post"></a> </li>
				<?php endif; ?>					
				<li><a href='/posts/like/<?=$post['post_id']?>/<?=$user->user_id?>'> <img id="like_img" src="/images/like.png" alt="like this post"></a></li>

				<!-- If there are any likes for this post -->
				<?php foreach ($likes as $like): ?>
					<?php if ($like['post_id'] == $post['post_id']): ?>
						<li><p id="likes_count">likes: <?=$like['num_likes']?> </p></li>	
					<?php endif; ?>		
				<?php endforeach; ?>



			</ul>
		</div>


	</article>
</div>

<?php endforeach; ?>