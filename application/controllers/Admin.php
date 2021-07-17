<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	var $vhome;
	
	public function __construct(){
		parent::__construct();
		$this->vhome = 'admin/home_admin';
	}

	public function index()
	{
		$this->load->view($this->vhome);
	}
	public function provinsi()
	{
		$this->load->view('admin/provinsi');
	}

	
}
