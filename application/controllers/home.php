<?php

class Home extends CI_Controller
{
	public function index()
	{
		$data['judul'] = 'Halaman Home';
		$this->load->view('templates/navbar', $data);
		$this->load->view('home/index_header');
		$this->load->view('home/index_main');
		$this->load->view('templates/footer');
	}
}
