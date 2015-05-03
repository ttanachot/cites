<?php

class Pages_C extends CI_Controller{

	public function __construct()  // load the model
	{
		parent::__construct();
		// $this->load->model('form_model');
	}

	public function index()
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open home page
			$this->load->view('pages/home',$data);
		} else{
		 	redirect('auth', 'refresh');
		}
	}

	// public function status($form){
	// 	$formdb = $form."_c";
	// 	redirect($formdb."/status");
	// }

	public function status($req){
		if($req == 11){
			redirect("form15_c/status");
		} else if($req == 21){
			redirect("form21_c/status");
		} else if($req == 22){
			redirect("form19_c/status");
		} elseif ($req == 23) {
			redirect("form20_c/status");
		} elseif ($req == 24) {
			redirect("form17_c/status");
		} elseif ($req == 25) {
			redirect("form18_c/status");
		} elseif ($req == 31) {
			redirect("form13_c/status/31");
		} elseif ($req == 32) {
			redirect("form13_c/status/32");
		} elseif ($req == 33) {
			redirect("form13_c/status/33");
		} elseif ($req == 61) {
			redirect("formhybrid_c/status/13");
		}
	}


	public function about()
	{
		$this->load->view('pages/about');
	}

	
}