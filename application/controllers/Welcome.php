<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		 parent::__construct();
		 $this->load->helper (array('form','url'));
		 $this->load->library('form_validation');
		 // More code goes here...
	}
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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
            // echo "this is a index controller";
			$this->load->view('newone');
			
	}

	public function neww()
	{
		echo "this is a neww controller";
		
	
		
     $this->form_validation->set_rules('fname','username','required');
     $this->form_validation->set_rules('lname','password','required');
 
	 if ($this->form_validation->run() == FALSE)
	 {
			 $this->load->view('newone');
	 }
	 else
	 {
			 $this->load->view('message');
	 }
	
	}

}
