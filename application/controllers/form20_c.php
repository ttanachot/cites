<?php

class Form20_C extends CI_Controller{

	public function __construct()  // load the model
	{
		parent::__construct();
		$this->load->model('form20_model');

	}

	public function form20($request)
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
				$user = $this->ion_auth->user()->row();
				//save username to be data
				$data['username'] = $user->username;
				//save request to be data
				$data['request'] = $request; 
				//open form20
				$this->load->view('pages/forms/form20',$data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}

	public function preview20()
	{

		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open preview form20
			$this->load->view('pages/previews/preview20',$data);
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

		$data['checks'] = $this->form20_model->get_stat20($id['id']);
		$data['formNameId'] = 'form20_Id';
		$data['activer'] = 2;
			
		$this->load->view('pages/status/status',$data);
	}

	public function statusoff(){
		$user = $this->ion_auth->user()->row();
		//save username to be data
		$data['username'] = $user->username;
		$id['id'] = $user->id;

		$data['checks'] = $this->form20_model->get_allform20();
		$data['formNameId'] = 'form20_Id';
		$data['activer'] = 2;
			
		$this->load->view('officers/status',$data);
	}


	public function save20()
	{

		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			//load user
			$user = $this->ion_auth->user()->row();


			$data20 = array(
				//add userId form user
				'userId' => $user->id,
				'fname' => $this->input->post('fname'),
				'fbd' => $this->input->post('fbd'),
				'fnation' => $this->input->post('fnation'),
				'fpassport' => $this->input->post('fpassport'),
				'fissue' => $this->input->post('fissue'),
				'faddress' => $this->input->post('faddress'),
				'fstreet' => $this->input->post('fstreet'),
				'fprovince' => $this->input->post('fprovince'),
				'fzipcode'=> $this->input->post('fzipcode'),
				'ftel' => $this->input->post('ftel'),
				'fphone' => $this->input->post('fphone'),
				'ffax' => $this->input->post('ffax'),

				'fname2' => $this->input->post('fname2'),
				'fname3' => $this->input->post('fname3'),
				'faddress2' => $this->input->post('faddress2'),
				'fstreet2' => $this->input->post('fstreet2'),
				'fprovince2' => $this->input->post('fprovince2'),
				'fzipcode2' => $this->input->post('fzipcode2'),
				'ftel2' => $this->input->post('ftel2'),
				'fphone2' => $this->input->post('ffax2'),
				'ffax2' => $this->input->post('ffax2'),
				'fcause' => $this->input->post('fcause'),
				'request' => 23,
				);

				if($this->form20_model->save_form20($data20))
				{
					redirect('auth', 'refresh');
				}else{
					show_404();
				}


			// //open preview form20
			// $this->load->view('pages/previews/preview20');
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
		
	}


	/*
	 *	OFFICER
	 *
	 */


	// public function list20($request)
	// {
	// 	if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
	// 	{
	// 		$user = $this->ion_auth->user()->row();
	// 		//save username to be data
	// 		$data['username'] = $user->username;
	// 		//save request to be data
	// 		$data['request'] = $request;
	// 		//load db table form20
	// 		$data['form20'] = $this->form20_model->get_listform20($request);
	// 		//open quqery form20
	// 		$this->load->view('officers/form20/list20',$data);
	// 	} else{
	// 		//redirect them to the login page
	// 	 	redirect('auth', 'refresh');
	// 	}
		
	// }
	public function show20($formId)
	{
		if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save from to data
			$data['form20'] = $this->form20_model->get_showform20($formId);
			if (empty($data['form20'])){
				show_404();
			}
			$this->load->view('officers/forms/form20', $data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}


	// public function update_stat20(){

	// 	// if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
	// 	if ($this->ion_auth->is_officer() )
	// 	{
	// 		$array = array('status' => $this->input->post('stat'),
	// 						'comment' => $this->input->post('comment'));
	// 		$id =array('form20_Id' => $this->input->post('form20_Id'));
	// 		$this->form20_model->update_stat_form20($id,$array);
			
	// 		$user = $this->ion_auth->user()->row();

	// 			//save username to be data
	// 		$data['username'] = $user->username;
	// 		$data['form20'] = $this->form20_model->get_listform20('11');

	// 		//open quqery form20
	// 		// $this->load->view('officers/form20/list20',$data);
	// 		// $segments = array('form16', 'submitForm16', $data['form20'] );
	// 		$segments = anchor('form16/submitForm16', 'form20',$data['form20'] );
	// 		redirect($segments);
	// 	}
	// 	else{
	// 		redirect('auth', 'refresh');
	// 	}

	// }

}