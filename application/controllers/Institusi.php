<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institusi extends CI_Controller {
	var $vhome;
	var $model;
	
	public function __construct(){
		parent::__construct();
		$this->vhome = 'admin/institusi';
		$this->model = 'M_Institusi';

		$this->load->model(["M_Institusi"]);
	}

	public function index()
	{
		$this->load->view($this->vhome);
	}
	public function viewForm()
	{
		@$id_institusi = $this->input->post('id_institusi');

		if($id_institusi){ //not null
			$this->session->set_userdata('id_institusi', $id_institusi);
			$this->session->set_userdata('status_simpan', 'update');
		}
		else{
			$this->session->set_userdata('id_institusi', null);
			$this->session->set_userdata('status_simpan', 'insert');
		}

		$this->load->view('admin/form_institusi');
	}

	public function getDataBySessionId(){
		$retval = array();
		$id_institusi = $this->session->userdata('id_institusi');
		$data = $this->M_Institusi->getDataById($id_institusi);

		$retval['id_institusi'] = $id_institusi;
		$retval['data'] = $data;

		echo json_encode($retval);
	}

	public function getDataById(){
		$retval = array();
		@$id_institusi = $this->input->post('id_institusi');
		$data = $this->M_Institusi->getDataById($id_institusi);

		$retval['id_institusi'] = $id_institusi;
		$retval['data'] = $data;

		echo json_encode($retval);
	}

	public function getListData(){
		$retval = array();		

		$listData = array();
		$listData = $this->M_Institusi->getListDatav3();

		$retval['listData'] = $listData;

		echo json_encode($retval);
	}

	public function simpan(){
		$retval = array();
		$post_data = $this->input->post(); //CI
		$retval['post_data'] = $post_data;

		$id_institusi = $this->session->userdata('id_institusi');
		$status_simpan = $this->session->userdata('status_simpan');

		if($status_simpan=='insert'){
			$sukses = $this->M_Institusi->insert($post_data) ? 1 : false;
		}
		else if('update'){
			$sukses = $this->M_Institusi->update($id_institusi, $post_data) ? 2 : false;
		}
		else{
			$sukses = false;
		}
		

		$retval['sukses'] = $sukses; //status simpan
		echo json_encode($retval);
	}

	public function hapus(){
		$retval = array();
		@$id_institusi = $this->input->post('id_institusi');
		$data = $this->M_Institusi->hapus($id_institusi);

		$retval['id_institusi'] = $id_institusi;
		$retval['data'] = $data;

		echo json_encode($retval);
	}
	
}
