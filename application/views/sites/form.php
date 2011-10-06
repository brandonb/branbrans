<?php if(isset($site->id)){echo form_hidden('id', $site->id);} ?>
<p>
	<label for="name">Name:</label><br>
	<input name="name" id="name"<?php if(isset($site->name)){echo " value=\"$site->name\"";} ?>>
</p>
<p>
	<label for="url">URL:</label><br>
	<input name="url" id="url"<?php if(isset($site->url)){echo " value='$site->url'";} ?>>
</p>
<p>
	<label for="body">Body:</label><br>
	<textarea name="body" id="body"><?php if(isset($site->body)){echo $site->body;} ?></textarea>
</p>
<p>
	<label for="slug">Slug:</label><br>
	<input name="slug" id="slug"<?php if(isset($site->slug)){echo " value='$site->slug'";} ?>>
</p>
<fieldset>
	<legend>Meta Information:</legend>
	<p>
		<label for="title">Title:</label><br>
		<input name="title" id="title"<?php if(isset($site->title)){echo " value=\"$site->title\"";} ?>>
	</p>
	<p>
		<label for="description">Description:</label><br>
		<textarea name="description" id="description"><?php if(isset($site->description)){echo $site->description;} ?></textarea>
	</p>
	<p>
		<label for="keywords">Keywords:</label><br>
		<input name="keywords" id="keywords"<?php if(isset($site->keywords)){echo " value='$site->keywords'";} ?>>
	</p>
</fieldset>
<button type="submit">Submit</button> <?php if(isset($site->slug)){echo anchor('site/'. $site->slug, 'Cancel');}else{echo anchor('sites', 'Cancel');} ?>