<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Form14_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function save_form14($data)
	{
		// print_r($data);
		$this->db->insert('form14', $data);
		return 'true';
	}

	public function get_form14($req_Id, $req)
	{
		$query = $this->db->get_where('form14', array('request' => $req, 'req_Id' => $req_Id ));
		return $query->row_array();
	}

}