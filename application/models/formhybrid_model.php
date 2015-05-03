<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Formhybrid_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function save_formhybrid($data)
	{
		$this->db->insert('formhybrid', $data);
		return 'true';
	}

	public function update_stat_formhybrid($id,$data)
	{
		$this->db->update('formhybrid', $data,$id);
		return 'true';
	}

	public function get_stathybrid($userId){
		// $query = $this->db->get('formhybrid');
		$query = $this->db->get_where('formhybrid', array('userId' => $userId));
		return $query->result_array();
	}

	public function get_allformhybrid()
	{
		$query = $this->db->get_where('formhybrid');
		return $query->result_array();
	}
	// public function get_listformhybrid($slug){
	// 	$query = $this->db->get_where('formhybrid', array('request' => $slug));
	// 	return $query->result_array();
	// }

	public function get_listidformhybrid($slug, $id){
		$query = $this->db->get_where('formhybrid', array('request' => $slug, 'formhybrid_Id' => $id));
		return $query->row_array();
	}

	public function get_showformhybrid($slug){
		$query = $this->db->get_where('formhybrid', array('formhybrid_Id' => $slug));
		return $query->row_array();
	}

}