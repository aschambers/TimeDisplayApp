<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	// automatically loaded if no method is specified
	public function index()
	{
		if(!isset($this->session->userdata['number']))
		{
			$this->session->set_userdata('number', rand(1,100));
		}
		$this->load->view('index');
	}

	// check the value of number in session, and check your guess
	public function checksession()
	{
		// var_dump($this->input->post());
		// die();

		// if guess is too low
		if($this->input->post('guess') < $this->session->userdata['number'])
		{
			$this->session->set_flashdata('result', 'Too Low');
		}

		// if guess is too high
		if($this->input->post('guess') > $this->session->userdata['number'])
		{
			$this->session->set_flashdata('result', 'Too High');
		}

		// if guess is correct
		if($this->input->post('guess') == $this->session->userdata['number'])
		{
			$this->session->set_flashdata('correct', 'You got it!');
		}
		redirect('/');
	}
	
	// reset the number upon button click
	public function reset()
	{
		$this->session->unset_userdata('number');
		redirect('/');
	}
}









