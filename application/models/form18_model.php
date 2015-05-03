<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form18_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function save_form18($data)
	{
		$this->db->insert('form18', $data);
		return 'true';
	}

	public function update_stat_form18($id,$data)
	{
		$this->db->update('form18', $data,$id);
		return 'true';
	}

	public function get_stat18($userId){
		// $query = $this->db->get('form18');
		$query = $this->db->get_where('form18', array('userId' => $userId));
		return $query->result_array();
	}

	public function get_allform18()
	{
		$query = $this->db->get_where('form18');
		return $query->result_array();
	}
	// public function get_listform18($slug){
	// 	$query = $this->db->get_where('form18', array('request' => $slug));
	// 	return $query->result_array();
	// }

	public function get_listidform18($slug, $id){
		$query = $this->db->get_where('form18', array('request' => $slug, 'form18_Id' => $id));
		return $query->row_array();
	}

	public function get_showform18($slug){
		$query = $this->db->get_where('form18', array('form18_Id' => $slug));
		return $query->row_array();
	}

}