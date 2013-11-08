<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

	// myComments: the Views/Elements folder contain custom view files for preloading pages

	public function index()
	{
		$data['title'] = 'Homepage';
		$this->load->view('view_home', $data);
	}

	public function about_me()
	{
		$data['title'] = 'About Me';
		$this->load->view('view_about', $data);
	}

	public function my_jquery_test()
	{ 
		$data['title'] = 'JQuery Fun!';
		$this->load->view('myJqueryTest', $data);
	}

	public function string_example() {

		/* 
			 Retrieve data from views and perform checks in controller
			 Validate input and nulls
			 Use a foreach loop to individually parse string as an array of characters
			 Write code to reverse the string of characters
		*/

		$data['title'] = 'Fun Strings!';
		$this->load->view('view_search', $data);


	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */