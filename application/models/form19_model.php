<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form19_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function save_form19($data)
	{
		$this->db->insert('form19', $data);
		return 'true';
	}

	public function update_stat_form19($id,$data)
	{
		$this->db->update('form19', $data,$id);
		return 'true';
	}

	public function get_stat19($userId){
		// $query = $this->db->get('form19');
		$query = $this->db->get_where('form19', array('userId' => $userId));
		return $query->result_array();
	}

	public function get_allform19()
	{
		$query = $this->db->get_where('form19');
		return $query->result_array();
	}
	// public function get_listform19($slug){
	// 	$query = $this->db->get_where('form19', array('request' => $slug));
	// 	return $query->result_array();
	// }

	public function get_listidform19($slug, $id){
		$query = $this->db->get_where('form19', array('request' => $slug, 'form19_Id' => $id));
		return $query->row_array();
	}

	public function get_showform19($slug){
		$query = $this->db->get_where('form19', array('form19_Id' => $slug));
		return $query->row_array();
	}

}