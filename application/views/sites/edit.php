<h2>Edit: <?php echo $site->name ?></h2>
<div>
<?php echo form_open('sites/update_site') ?>

<?php $this->load->view('sites/form') ?>

</form>
</div>