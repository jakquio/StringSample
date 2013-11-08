
<?php
		$this->load->view('/elements/header');
		$this->load->view('/elements/myLinks');
?>

<div id='container'>

<?php echo form_open("strings_test"); ?> 
	<h2> &nbsp; Enter any string: 
		<?php echo form_input('myString'); ?> 
		<?php echo form_submit("mySubmit", "Enter!"); ?>
	</h2>

<?php echo form_close(); ?>


</div>


<?php $this->load->view('/elements/footer'); ?>