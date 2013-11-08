
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Strings_test extends CI_controller 
{


	public function index() 
	{
		if ( $this->form_validation->run() == FALSE) 
		{
			$data['title'] = 'Your Results!';
			$this->load->view('view_search.php', $data);
		}
		else 
		{
			redirect($this->index, 'refresh');
		}

	}

	function reverse_string() 
	{
		$user_input = $this->input->post('user_string');

		if (!$user_input)
		{
			$this->form_validation->set_message('reverse_string', 'Try again! No data was submitted or invalid.');
			return false;
		}
		else
		{
			echo "Thank you for your string! Your sentence: " + $user_input;
			return true;
		}

	}



}