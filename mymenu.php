<div class="span-24">
   <div id="underlinemenu">
	<ul>
	<?php
	$user=$_SESSION['asset_user_type'];
	if($user=='STUDENT'){?>
		<li><a href="<?php echo WEB_ROOT."?user=".$user; ?>" title="Home">Home</a></li>
		<li><a href="<?php echo WEB_ROOT; ?>menu.php?v=USER&user=<?php echo $user?>" title="Manage Users">Complaints</a></li>
	<?php }
	if($user=='LABIN'){?>
		<li><a href="<?php echo WEB_ROOT."?user=".$user; ?>" title="Home">Home</a></li>
		<li><a href="<?php echo WEB_ROOT; ?>menu.php?v=USER&user=<?php echo $user?>" title="Manage Users">Manage Users</a></li>
		<li><a href="<?php echo WEB_ROOT; ?>menu.php?v=LABS&user=<?php echo $user?>" title="Manage Labs">Manage Labs</a></li>
		<li><a href="<?php echo WEB_ROOT; ?>menu.php?v=STCK&user=<?php echo $user?>" title="Manage Stocks">Stocks</a></li>
	<?php } ?>
	
	</ul>
	</div>
</div>