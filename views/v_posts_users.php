<?php foreach($users as $user): ?>



    <!-- If there exists a connection with this user, show a unfollow link -->
    <?php if(isset($connections[$user['user_id']])): ?>
        <a href='/posts/unfollow/<?=$user['user_id']?>'><img src="/images/unfollow.png"></a>

    <!-- Otherwise, show the follow link -->
    <?php else: ?>
        <a href='/posts/follow/<?=$user['user_id']?>'><img src="/images/follow.png"></a>
    <?php endif; ?>
    <!-- Print this user's name -->
    <?php echo "  "?><?=$user['first_name']?> <?=$user['last_name']?>
    <br><br>

<?php endforeach; ?>
