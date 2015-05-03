<?php

class Stats_C extends CI_Controller{

	public function __construct()  // load the model
	{
		parent::__construct();
		$this->load->model('form15_model');

	}
	public function home()
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			// $data['request'] = $request; 
			//open form15
			$this->load->view('pages/stats/stats_home',$data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}
	
	public function stats1()
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			// $data['request'] = $request; 
			//open form15
			$this->load->view('pages/stats/stats1',$data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}

	public function stats2()
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			// $data['request'] = $request; 
			//open form15
			$this->load->view('pages/stats/stats2',$data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}

	public function stats3()
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			// $data['request'] = $request; 
			//open form15
			$this->load->view('pages/stats/stats3',$data);

		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}

	public function stats4()
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			// $data['request'] = $request; 
			//open form15
			$this->load->view('pages/stats/stats4',$data);

		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}

	public function stats5()
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			// $data['request'] = $request; 
			//open form15
			$this->load->view('pages/stats/stats5',$data);

		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}

	public function stats6()
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save request to be data
			// $data['request'] = $request; 
			//open form15
			$this->load->view('pages/stats/stats6',$data);

		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}
}