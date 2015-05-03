<?php

class Form18_C extends CI_Controller{

	public function __construct()  // load the model
	{
		parent::__construct();
		$this->load->model('form18_model');

	}

	public function form18($request)
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
				$user = $this->ion_auth->user()->row();
				//save username to be data
				$data['username'] = $user->username;
				//save request to be data
				$data['request'] = $request; 
				//open form19
				$this->load->view('pages/forms/form18',$data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}

	public function preview18()
	{

		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open preview form19
			$this->load->view('pages/previews/preview18',$data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}


	public function status(){
		$user = $this->ion_auth->user()->row();
		//save username to be data
		$data['username'] = $user->username;
		$id['id'] = $user->id;

		$data['checks'] = $this->form18_model->get_stat18($id['id']);
		$data['formNameId'] = 'form18_Id';
		$data['activer'] = 2;
			
		$this->load->view('pages/status/status',$data);
	}

	public function statusoff(){
		$user = $this->ion_auth->user()->row();
		//save username to be data
		$data['username'] = $user->username;
		$id['id'] = $user->id;

		$data['checks'] = $this->form18_model->get_allform18();
		$data['formNameId'] = 'form18_Id';
		$data['activer'] = 2;
			
		$this->load->view('officers/status',$data);
	}


	public function save18()
	{

		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			//load user
			$user = $this->ion_auth->user()->row();


			$data18 = array(
				//add userId form user
				'userId' => $user->id,
				'fname' => $this->input->post('numname'),
				'datename' => $this->input->post('datename'),
				'plantname' => $this->input->post('plantname'),
				'sname' => $this->input->post('sname'),
				'numberbreed' => $this->input->post('numbreed'),
				'numbercom' => $this->input->post('numbercom'),
				'source' => $this->input->post('source'),
				'ab' => $this->input->post('ab'),

				'request' => 25,
				);

				if($this->form18_model->save_form18($data18))
				{
					redirect('auth', 'refresh');
				}else{
					show_404();
				}


			// //open preview form19
			// $this->load->view('pages/previews/preview19');
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
		
	}


	/*
	 *	OFFICER
	 *
	 */


	// public function list19($request)
	// {
	// 	if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
	// 	{
	// 		$user = $this->ion_auth->user()->row();
	// 		//save username to be data
	// 		$data['username'] = $user->username;
	// 		//save request to be data
	// 		$data['request'] = $request;
	// 		//load db table form19
	// 		$data['form19'] = $this->form19_model->get_listform19($request);
	// 		//open quqery form19
	// 		$this->load->view('officers/form19/list19',$data);
	// 	} else{
	// 		//redirect them to the login page
	// 	 	redirect('auth', 'refresh');
	// 	}
		
	// }
	public function show18($formId)
	{
		if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save from to data
			$data['form18'] = $this->form18_model->get_showform18($formId);
			if (empty($data['form18'])){
				show_404();
			}
			$this->load->view('officers/forms/form18', $data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}


	// public function update_stat19(){

	// 	// if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
	// 	if ($this->ion_auth->is_officer() )
	// 	{
	// 		$array = array('status' => $this->input->post('stat'),
	// 						'comment' => $this->input->post('comment'));
	// 		$id =array('form19_Id' => $this->input->post('form19_Id'));
	// 		$this->form19_model->update_stat_form19($id,$array);
			
	// 		$user = $this->ion_auth->user()->row();

	// 			//save username to be data
	// 		$data['username'] = $user->username;
	// 		$data['form19'] = $this->form19_model->get_listform19('11');

	// 		//open quqery form19
	// 		// $this->load->view('officers/form19/list19',$data);
	// 		// $segments = array('form16', 'submitForm16', $data['form19'] );
	// 		$segments = anchor('form16/submitForm16', 'form19',$data['form19'] );
	// 		redirect($segments);
	// 	}
	// 	else{
	// 		redirect('auth', 'refresh');
	// 	}

	// }

}