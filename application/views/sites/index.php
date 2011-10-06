<ul id="site_list">
<?php foreach($sites as $site): ?>
	<?php 
		$parse_url = parse_url($site->url);
		$favicon = "http://". $parse_url['host'] ."/favicon.ico";
	?>
	<li style="background-image: url(<?php echo $favicon ?>)">
	<?php echo anchor('site/'.$site->slug,$site->name) ?>
	</li>
<?php endforeach; ?>
</ul>
<p><?php echo anchor('sites/new_site', 'Create a New Site') ?></p>