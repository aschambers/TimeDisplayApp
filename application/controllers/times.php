<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Times extends CI_Controller {

	// pass date and time variables to index.php view
	public function main()
	{
		$this->session->set_userdata('date', date("F d, Y i:s A"));
		$this->load->view('index', array('date' => $this->session->userdata('date')));
	}
}









