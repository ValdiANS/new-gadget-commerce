<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "G-Comm | Landing Page";
		$data['page'] = 'home';
		$this->load->view('home', $data);
	}

	public function about()
	{
		$data['title'] = "About Us | Gadget Commerce";
		$data['page'] = 'about';
		$this->load->view('about/index', $data);
	}

	public function contact()
	{
		$data['title'] = "Contact | Gadget Commerce";
		$data['page'] = 'contact';
		$this->load->view('about/contact', $data);
	}
}
