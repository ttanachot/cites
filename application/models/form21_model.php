<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form21_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function save_form21($data)
	{
		$this->db->insert('form21', $data);
		return 'true';
	}

	public function update_stat_form21($id,$data)
	{
		$this->db->update('form21', $data,$id);
		return 'true';
	}

	public function get_stat21($userId){
		// $query = $this->db->get('form21');
		$query = $this->db->get_where('form21', array('userId' => $userId));
		return $query->result_array();
	}

	public function get_allform21()
	{
		$query = $this->db->get_where('form21');
		return $query->result_array();
	}
	// public function get_listform21($slug){
	// 	$query = $this->db->get_where('form21', array('request' => $slug));
	// 	return $query->result_array();
	// }

	public function get_listidform21($slug, $id){
		$query = $this->db->get_where('form21', array('request' => $slug, 'form21_Id' => $id));
		return $query->row_array();
	}

	public function get_showform21($slug){
		$query = $this->db->get_where('form21', array('form21_Id' => $slug));
		return $query->row_array();
	}

}