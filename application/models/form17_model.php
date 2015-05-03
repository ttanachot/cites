<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form17_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function save_form17($data)
	{
		$this->db->insert('form17', $data);
		return 'true';
	}

	public function update_stat_form17($id,$data)
	{
		$this->db->update('form17', $data,$id);
		return 'true';
	}

	public function get_stat17($userId){
		// $query = $this->db->get('form17');
		$query = $this->db->get_where('form17', array('userId' => $userId));
		return $query->result_array();
	}

	public function get_allform17()
	{
		$query = $this->db->get_where('form17');
		return $query->result_array();
	}
	// public function get_listform17($slug){
	// 	$query = $this->db->get_where('form17', array('request' => $slug));
	// 	return $query->result_array();
	// }

	public function get_listidform17($slug, $id){
		$query = $this->db->get_where('form17', array('request' => $slug, 'form17_Id' => $id));
		return $query->row_array();
	}

	public function get_showform17($slug){
		$query = $this->db->get_where('form17', array('form17_Id' => $slug));
		return $query->row_array();
	}

}