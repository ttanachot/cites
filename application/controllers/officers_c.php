<?php

class Officers_C extends CI_Controller{

	public function __construct()  // load the model
	{
		parent::__construct();
		// $this->load->model('form_model');
	}

	public function index()
	{
		if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open home page
			$this->load->view('officers/home',$data);
		} else{
		 	redirect('auth', 'refresh');
		}


		// $this->load->view('officers/home');
	}

	public function about()
	{
		$this->load->view('pages/about');
	}

	public function status($req){
		if($req == 11){
			// redirect("form15_c/statusoff");
			redirect("officers/form15/status");
		} else if($req == 21){
			// redirect("form21_c/statusoff");
			redirect("officers/form21/status");
		} else if($req == 22){
			redirect("officers/form19/status");
		} else if($req == 23){
			redirect("officers/form20/status");
		} elseif ($req == 24) {
			redirect("officers/form17/status");
		} elseif ($req == 25) {
			redirect("officers/form18/status");
		} elseif ($req == 31) {
			redirect("officers/form13/status/31");
		} elseif ($req == 32) {
			redirect("officers/form13/status/32");
		} elseif ($req == 33) {
			redirect("officers/form13/status/33");
		}
	}

	public function getAllUser()
	{
		$user = $this->ion_auth->user()->row();
			//save username to be data
		$data['username'] = $user->username;
		$data['users'] = $this->ion_auth_model->getAllUser();

		$this->load->view('officers/report/users-report', $data);
	}

	public function getAllOfficer()
	{
		$user = $this->ion_auth->user()->row();
			//save username to be data
		$data['username'] = $user->username;
		$data['officers'] = $this->ion_auth_model->getAllOfficer();

		$this->load->view('officers/report/officers-report', $data);
	}
	
	// public function lists($request)
	// {
	// 	if($request == "11"){
	// 		// $segments = array('officers', 'form15', 'list15', $request);
	// 		redirect("form15/list15/".$request);
	// 	}else{
	// 		echo "test";
	// 	}
	// }
	

	
	

}