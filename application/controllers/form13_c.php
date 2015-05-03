<?php

class Form13_C extends CI_Controller{

	public function __construct()  // load the model
	{
		parent::__construct();
		$this->load->model('form13_model');
		$this->load->model('form16_model');
	}

	public function form13($request)
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
				$user = $this->ion_auth->user()->row();
				//save username to be data
				$data['username'] = $user->username;
				//save request to be data
				$data['request'] = $request; 

				if($request == 41){
					$data['form16'] = $this->form16_model->get_all_form16($user->id);
				}
				//open form13
				$this->load->view('pages/forms/form13',$data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}

	public function preview13()
	{

		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;

			$data['request'] = $this->input->post('req');
			//open preview form13
			$this->load->view('pages/previews/preview13',$data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}


	public function status($req){
		$user = $this->ion_auth->user()->row();
		//save username to be data
		$data['username'] = $user->username;
		$id['id'] = $user->id;

		$data['checks'] = $this->form13_model->get_stat13($id['id'], $req);
		$data['formNameId'] = 'form13_Id';
		$data['activer'] = 3;
			
		$this->load->view('pages/status/status',$data);
	}

	public function statusoff($req){

		$user = $this->ion_auth->user()->row();
		//save username to be data
		$data['username'] = $user->username;
		$id['id'] = $user->id;		
		$data['checks'] = $this->form13_model->get_allform13($req);
		$data['formNameId'] = 'form13_Id';
		$data['activer'] = 3;
			
		$this->load->view('officers/status',$data);
	}


	public function save13()
	{

		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			//load user
			$user = $this->ion_auth->user()->row();

			if($this->input->post('req') == 41){
				$data13 = array(
					//add userId form user
					'form16_Id' => $this->input->post('form16'),
					'userId' => $user->id,
					'fplace' => $this->input->post('fplace'),
					'fname' => $this->input->post('fname'),
					'fbd' => $this->input->post('fbd'),
					'fnation' => $this->input->post('fnation'),
					'fother' => $this->input->post('fother'),
					'faddress' => $this->input->post('faddress'),

					'fname2' => $this->input->post('fname2'),
					'fname3' => $this->input->post('fname3'),
					'fnurse' => $this->input->post('fnurse'),
					'ftrans' => $this->input->post('ftrans'),
					'fvalue' => $this->input->post('fvalue'),
					'fentry' => $this->input->post('fentry'),
					'request' => $this->input->post('request'),
					
					);

					if($this->form13_model->save_form13($data13))
					{
						redirect('auth', 'refresh');
					}else{
						show_404();
					}

			} else {
				$data13 = array(
					//add userId form user
					'userId' => $user->id,
					'fplace' => $this->input->post('fplace'),
					'fname' => $this->input->post('fname'),
					'fbd' => $this->input->post('fbd'),
					'fnation' => $this->input->post('fnation'),
					'fother' => $this->input->post('fother'),
					'faddress' => $this->input->post('faddress'),

					'fname2' => $this->input->post('fname2'),
					'fname3' => $this->input->post('fname3'),
					'fnurse' => $this->input->post('fnurse'),
					'ftrans' => $this->input->post('ftrans'),
					'fvalue' => $this->input->post('fvalue'),
					'fentry' => $this->input->post('fentry'),
					'request' => $this->input->post('request'),
					
					);

					if($this->form13_model->save_form13($data13))
					{
						redirect('auth', 'refresh');
					}else{
						show_404();
					}
			}

			// //open preview form13
			// $this->load->view('pages/previews/preview13');
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
		
	}


	/*
	 *	OFFICER
	 *
	 */


	// public function list13($request)
	// {
	// 	if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
	// 	{
	// 		$user = $this->ion_auth->user()->row();
	// 		//save username to be data
	// 		$data['username'] = $user->username;
	// 		//save request to be data
	// 		$data['request'] = $request;
	// 		//load db table form13
	// 		$data['form13'] = $this->form13_model->get_listform13($request);
	// 		//open quqery form13
	// 		$this->load->view('officers/form13/list13',$data);
	// 	} else{
	// 		//redirect them to the login page
	// 	 	redirect('auth', 'refresh');
	// 	}
		
	// }
	public function show13($formId)
	{
		if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save from to data
			$data['form13'] = $this->form13_model->get_showform13($formId);
			if (empty($data['form13'])){
				show_404();
			}
			$data['request'] = $data['form13']['request'];
			$this->load->view('officers/forms/form13', $data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}


	// public function update_stat13(){

	// 	// if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
	// 	if ($this->ion_auth->is_officer() )
	// 	{
	// 		$array = array('status' => $this->input->post('stat'),
	// 						'comment' => $this->input->post('comment'));
	// 		$id =array('form13_Id' => $this->input->post('form13_Id'));
	// 		$this->form13_model->update_stat_form13($id,$array);
			
	// 		$user = $this->ion_auth->user()->row();

	// 			//save username to be data
	// 		$data['username'] = $user->username;
	// 		$data['form13'] = $this->form13_model->get_listform13('11');

	// 		//open quqery form13
	// 		// $this->load->view('officers/form13/list13',$data);
	// 		// $segments = array('form16', 'submitForm16', $data['form13'] );
	// 		$segments = anchor('form16/submitForm16', 'form13',$data['form13'] );
	// 		redirect($segments);
	// 	}
	// 	else{
	// 		redirect('auth', 'refresh');
	// 	}

	// }

}