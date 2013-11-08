
<?php

$config = array(

	'strings_test/index' => array(
		'field' => 'user_string',
		'label' => 'User String',
		'rules' => 'max_length[90]|xss_clean|alpha_numeric|callback_reverse_string'
		), // End of strings_test config
); // End of Config Array

?>