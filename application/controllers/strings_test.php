
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Strings_test extends CI_controller 
{


	public function index() 
	{
		$data['title'] = 'Your Results!';
		$this->load->view('string_results.php', $data);

	}

	function reverse_string() 
	{

	}



}