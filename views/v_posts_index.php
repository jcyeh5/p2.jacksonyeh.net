<?php foreach($posts as $post): ?>

<div class = "post">
	<article>		
		<p id="post_author"><?=$post['first_name']?> <?=$post['last_name']?></p>
		<time id="post_time" datetime="<?=Time::display($post['created'],'Y-m-d G:i')?>">
			<?=Time::display($post['created'])?>
		</time>
		
		<p id="post_content"><?=$post['content']?></p>
		


		<!-- Display Delete button only for own posts -->
	    <?php if($user->user_id == $post['post_user_id']): ?>
			<div align= right> <a href='/posts/delete/<?=$post['post_id']?>'><img src="/images/delete.png"></a> </div>
		<?php endif; ?>	

	</article>
</div>

<?php endforeach; ?>