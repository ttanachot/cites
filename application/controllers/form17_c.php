<?php

class Form17_C extends CI_Controller{

	public function __construct()  // load the model
	{
		parent::__construct();
		$this->load->model('form17_model');

	}

	public function form17($request)
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
				$user = $this->ion_auth->user()->row();
				//save username to be data
				$data['username'] = $user->username;
				//save request to be data
				$data['request'] = $request; 
				//open form19
				$this->load->view('pages/forms/form17',$data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}

	public function preview17()
	{

		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open preview form19
			$this->load->view('pages/previews/preview17',$data);
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

		$data['checks'] = $this->form17_model->get_stat17($id['id']);
		$data['formNameId'] = 'form17_Id';
		$data['activer'] = 2;
			
		$this->load->view('pages/status/status',$data);
	}

	public function statusoff(){
		$user = $this->ion_auth->user()->row();
		//save username to be data
		$data['username'] = $user->username;
		$id['id'] = $user->id;

		$data['checks'] = $this->form17_model->get_allform17();
		$data['formNameId'] = 'form17_Id';
		$data['activer'] = 2;
			
		$this->load->view('officers/status',$data);
	}


	public function save17()
	{

		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			//load user
			$user = $this->ion_auth->user()->row();


			$data17 = array(
				//add userId form user
				'userId' => $user->id,
				'fname' => $this->input->post('fname'),
				'fdate' => $this->input->post('fdate'),
				'fdate2' => $this->input->post('fdate2'),
				'fyear' => $this->input->post('fyear'),
				'plantname' => $this->input->post('plantname'),
				'sname' => $this->input->post('sname'),
				'numberbreed' => $this->input->post('numbreed'),
				'source' => $this->input->post('source'),
				'ab' => $this->input->post('ab'),

				'plantname2' => $this->input->post('plantname2'),
				'sname2' => $this->input->post('sname2'),
				'numberbreed2' => $this->input->post('numberbreed2'),
				'numbercom2' => $this->input->post('numbercom2'),
				'source2' => $this->input->post('source2'),
				'ab2' => $this->input->post('ab2'),

				'plantname3' => $this->input->post('plantname3'),
				'sname3' => $this->input->post('sname3'),
				'numberbreed3' => $this->input->post('numberbreed3'),
				'numbercom3' => $this->input->post('numbercom3'),
				'source3' => $this->input->post('source3'),
				'ab3' => $this->input->post('ab3'),

				'request' => 24,
				);

				if($this->form17_model->save_form17($data17))
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
	public function show17($formId)
	{
		if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save from to data
			$data['form17'] = $this->form17_model->get_showform17($formId);
			if (empty($data['form17'])){
				show_404();
			}
			$this->load->view('officers/forms/form17', $data);
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