<?php

class M_Provinsi extends CI_model{
	public function getListData(){
		$query = "SELECT * FROM provinsi";
		$res = $this->db->query($query);

		return $res->result_array();
	}	
}

?>