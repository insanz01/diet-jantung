<?php

class App extends CI_Controller {
	private $data = array();

	public function __construct() {
		parent::__construct();

		$this->data['is_user'] = true;
	}

	// landing page
	public function index() {
		$this->load->view('templates/header');
		$this->load->view('templates/user/navbar');
		$this->load->view('user/landing');
		$this->load->view('templates/footer', $this->data);
	}

	public function landing() {
		redirect('user/App');
	}

	// artikel
	public function artikel() {
		$this->load->view('templates/header');
		$this->load->view('templates/user/navbar');
		$this->load->view('user/artikel/index');
		$this->load->view('templates/footer', $this->data);
	}

	public function detail($artikel_id) {
		$data['id_artikel'] = $artikel_id;

		$this->load->view('templates/header');
		$this->load->view('templates/user/navbar');
		$this->load->view('user/artikel/detail', $data);
		$this->load->view('templates/footer', $this->data);
	}

	// kalkulator app
	public function kalkulator() {
		$data['is_result'] = false;

		$this->form_validation->set_rules('nama', 'Nama', 'required');

		if($this->form_validation->run() === TRUE) {
			$data['is_result'] = true;
		}

		$this->load->view('templates/header');
		$this->load->view('templates/user/navbar');
		$this->load->view('user/aplikasi/index', $data);
		$this->load->view('templates/footer', $this->data);
	}
}