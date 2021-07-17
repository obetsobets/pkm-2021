<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provinsi extends CI_Controller {
	var $vhome;
	var $model;
	
	public function __construct(){
		parent::__construct();
		$this->vhome = 'admin/provinsi';
		$this->model = 'M_Provinsi';

		$this->load->model(["M_Provinsi"]);
	}

	public function index()
	{
		$this->load->view($this->vhome);
	}

	public function getListData(){
		$retval = array();		

		$listData = array();
		$listData = $this->M_Provinsi->getListData();

		$retval['listData'] = $listData;

		echo json_encode($retval);
	}

	
}
