<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form13_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function save_form13($data)
	{
		$this->db->insert('form13', $data);
		return 'true';
	}

	public function update_stat_form13($id,$data)
	{
		$this->db->update('form13', $data,$id);
		return 'true';
	}

	public function get_stat13($userId, $req){
		// $query = $this->db->get('form13');
		$query = $this->db->get_where('form13', array('userId' => $userId, 'request' => $req));
		return $query->result_array();
	}

	public function get_allform13($req)
	{
		$query = $this->db->get_where('form13', array('request' => $req ));
		return $query->result_array();
	}
	// public function get_listform13($slug){
	// 	$query = $this->db->get_where('form13', array('request' => $slug));
	// 	return $query->result_array();
	// }

	public function get_listidform13($slug, $id){
		$query = $this->db->get_where('form13', array('request' => $slug, 'form13_Id' => $id));
		return $query->row_array();
	}

	public function get_showform13($slug){
		$query = $this->db->get_where('form13', array('form13_Id' => $slug));
		return $query->row_array();
	}

}