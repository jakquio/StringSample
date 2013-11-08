<?php
		$this->load->view('/elements/header');
		$this->load->view('/elements/myLinks');
?>
	
	
<div id='container'>
	<h2> This page is not fully functional yet. </h2>
	<h3 id='myHeading1'> &nbsp;&nbsp; Play with some Jquery here! </h3>

		<?php
			$inputOptions = array(
				'name'	=> 'myString',
				'id'	=> 'myString',
				'maxlength'	=> 150,
				'size'	=> 50,
				'style' => '75%', 
				'value' => '',
				);

			$submitOptions = array(
				'name' => 'submit',
				'id' => 'submit',
				'value' => 'Submit!',
				);
			
			// Open a form text submit tag for Jquery testing
			echo form_open();
			echo form_input($inputOptions);
			echo form_submit($submitOptions);
			echo form_close();
		?>
</div>

<?php $this->load->view('/elements/footer'); ?>