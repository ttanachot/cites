<?php

class Trans_C extends CI_Controller{

	public function __construct()  // load the model
	{
		parent::__construct();
		$this->load->model('form15_model');

	}

	public function trans1()
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			// $data['request'] = $request; 
			//open form15
			$this->load->view('pages/trans/trans1',$data);
		} else if($this->ion_auth->is_officer()) {
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			// $data['request'] = $request; 
			//open form15
			$this->load->view('officers/trans/trans1',$data);

		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}

	public function trans2()
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			// $data['request'] = $request; 
			//open form15
			$this->load->view('pages/trans/trans2',$data);
		} else if($this->ion_auth->is_officer()) {
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			// $data['request'] = $request; 
			//open form15
			$this->load->view('officers/trans/trans2',$data);

		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}

	public function trans3()
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			// $data['request'] = $request; 
			//open form15
			$this->load->view('pages/trans/trans3',$data);
		} else if($this->ion_auth->is_officer()) {
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			// $data['request'] = $request; 
			//open form15
			$this->load->view('officers/trans/trans3',$data);

		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}

	public function trans4()
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			// $data['request'] = $request; 
			//open form15
			$this->load->view('pages/trans/trans4',$data);
		} else if($this->ion_auth->is_officer()) {
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			// $data['request'] = $request; 
			//open form15
			$this->load->view('officers/trans/trans4',$data);

		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}

	public function trans5()
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			// $data['request'] = $request; 
			//open form15
			$this->load->view('pages/trans/trans5',$data);
		} else if($this->ion_auth->is_officer()) {
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			// $data['request'] = $request; 
			//open form15
			$this->load->view('officers/trans/trans5',$data);

		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}

	public function trans6()
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			// $data['request'] = $request; 
			//open form15
			$this->load->view('pages/trans/trans6',$data);
		} else if($this->ion_auth->is_officer()) {
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			// $data['request'] = $request; 
			//open form15
			$this->load->view('officers/trans/trans6',$data);

		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}

	public function report()
	{
		if($this->ion_auth->is_officer()){
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			// $data['request'] = $request; 
			//open form15
			$this->load->view('officers/trans/transreport',$data);
		} else {
			echo "You are not an officers";
		}
	}
}