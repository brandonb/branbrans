<?php 
	$parse_url = parse_url($site->url);
	$favicon = "http://". $parse_url['host'] ."/favicon.ico";
?>

<img class="favicon" src="<?php echo $favicon ?>" alt="<?php echo $site->name ?>">
<h2><?php echo $site->name ?></h2>
<p><?php echo $site->body ?></p>
<p><?php echo auto_link($site->url) ?></p>

<p>
	<?php echo anchor('sites', 'Back to Sites') ?> | 
	<?php echo anchor('sites/edit_site/'. $site->slug, 'Edit Site') ?> | 
	<?php echo anchor('sites/delete_site/'. $site->slug, 'Delete Site') ?>
</p>