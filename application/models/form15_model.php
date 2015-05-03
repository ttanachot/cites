<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form15_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function save_form15($data)
	{
		$this->db->insert('form15', $data);
		return 'true';
	}

	public function update_stat_form15($id,$data)
	{
		$this->db->update('form15', $data,$id);
		return 'true';
	}

	public function get_stat15($userId){
		// $query = $this->db->get('form15');
		$query = $this->db->get_where('form15', array('userId' => $userId));
		return $query->result_array();
	}

	public function get_allform15()
	{
		$query = $this->db->get_where('form15');
		return $query->result_array();
	}

	// public function get_listform15($slug){
	// 	$query = $this->db->get_where('form15', array('request' => $slug));
	// 	return $query->result_array();
	// }

	public function get_listidform15($slug, $id){
		$query = $this->db->get_where('form15', array('request' => $slug, 'form15_Id' => $id));
		return $query->row_array();
	}

	public function get_showform15($slug){
		$query = $this->db->get_where('form15', array('form15_Id' => $slug));
		return $query->row_array();
	}

}