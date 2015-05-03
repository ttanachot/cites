<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form20_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function save_form20($data)
	{
		$this->db->insert('form20', $data);
		return 'true';
	}

	public function update_stat_form20($id,$data)
	{
		$this->db->update('form20', $data,$id);
		return 'true';
	}

	public function get_stat20($userId){
		// $query = $this->db->get('form20');
		$query = $this->db->get_where('form20', array('userId' => $userId));
		return $query->result_array();
	}

	public function get_allform20()
	{
		$query = $this->db->get_where('form20');
		return $query->result_array();
	}
	// public function get_listform20($slug){
	// 	$query = $this->db->get_where('form20', array('request' => $slug));
	// 	return $query->result_array();
	// }

	public function get_listidform20($slug, $id){
		$query = $this->db->get_where('form20', array('request' => $slug, 'form20_Id' => $id));
		return $query->row_array();
	}

	public function get_showform20($slug){
		$query = $this->db->get_where('form20', array('form20_Id' => $slug));
		return $query->row_array();
	}

}