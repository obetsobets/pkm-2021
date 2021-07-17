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
	public function viewForm()
	{
		@$id_provinsi = $this->input->post('id_provinsi');

		if($id_provinsi){ //not null
			$this->session->set_userdata('id_provinsi', $id_provinsi);
			$this->session->set_userdata('status_simpan', 'update');
		}
		else{
			$this->session->set_userdata('id_provinsi', null);
			$this->session->set_userdata('status_simpan', 'insert');
		}

		$this->load->view('admin/form_provinsi');
	}

	public function getDataBySessionId(){
		$retval = array();
		$id_provinsi = $this->session->userdata('id_provinsi');
		$data = $this->M_Provinsi->getDataById($id_provinsi);

		$retval['id_provinsi'] = $id_provinsi;
		$retval['data'] = $data;

		echo json_encode($retval);
	}

	public function getListData(){
		$retval = array();		

		$listData = array();
		$listData = $this->M_Provinsi->getListDatav2();

		$retval['listData'] = $listData;

		echo json_encode($retval);
	}

	public function simpan(){
		$retval = array();
		$post_data = $this->input->post(); //CI
		$retval['post_data'] = $post_data;

		$id_provinsi = $this->session->userdata('id_provinsi');
		$status_simpan = $this->session->userdata('status_simpan');

		if($status_simpan=='insert'){
			$sukses = $this->M_Provinsi->insert($post_data) ? 1 : false;
		}
		else if('update'){
			$sukses = $this->M_Provinsi->update($id_provinsi, $post_data) ? 2 : false;
		}
		else{
			$sukses = false;
		}
		

		$retval['sukses'] = $sukses; //status simpan
		echo json_encode($retval);
	}

	
}
