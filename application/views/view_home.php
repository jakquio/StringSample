<?php
		$this->load->view('/elements/header');
		$this->load->view('/elements/myLinks');
?>

<div id="container">
	<h1>Welcome to my Website!</h1>
	<div id="body">
		<p> This website is created using CodeIgniter version 2.1.4 </p>
		<p>This website is found at: </p>
			<code><?php echo site_url(); ?></code>
		<p>Feel free to explore!</p>
	</div>

<?php $this->load->view('/elements/footer'); ?>