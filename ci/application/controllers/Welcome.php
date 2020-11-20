<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data["title"] = "Page d'accueil";

		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}


	public function propos()
	{
		$this->load->view('header');
		$this->load->view('propos');
		$this->load->view('footer');
    }

    public function contact()
	{
		$this->load->view('header');
		$this->load->view('contact');
		$this->load->view('footer');
    }
    
}
