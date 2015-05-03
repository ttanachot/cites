<?php

class Form19_C extends CI_Controller{

	public function __construct()  // load the model
	{
		parent::__construct();
		$this->load->model('form19_model');

	}

	public function form19($request)
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
				$user = $this->ion_auth->user()->row();
				//save username to be data
				$data['username'] = $user->username;
				//save request to be data
				$data['request'] = $request; 
				//open form19
				$this->load->view('pages/forms/form19',$data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}

	public function preview19()
	{

		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open preview form19
			$this->load->view('pages/previews/preview19',$data);
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

		$data['checks'] = $this->form19_model->get_stat19($id['id']);
		$data['formNameId'] = 'form19_Id';
		$data['activer'] = 2;
			
		$this->load->view('pages/status/status',$data);
	}

	public function statusoff(){
		$user = $this->ion_auth->user()->row();
		//save username to be data
		$data['username'] = $user->username;
		$id['id'] = $user->id;

		$data['checks'] = $this->form19_model->get_allform19();
		$data['formNameId'] = 'form19_Id';
		$data['activer'] = 2;
			
		$this->load->view('officers/status',$data);
	}


	public function save19()
	{

		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			//load user
			$user = $this->ion_auth->user()->row();


			$data19 = array(
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
				'fmail' => $this->input->post('fmail'),

				'fnumber' => $this->input->post('fnumber'),
				'fname2' => $this->input->post('fname2'),
				'frname' => $this->input->post('frname'),
				'faddress2' => $this->input->post('faddress2'),
				'fstreet2' => $this->input->post('fstreet2'),
				'fprovince2' => $this->input->post('fprovince2'),
				'fzipcode2' => $this->input->post('fzipcode2'),
				'ftel2' => $this->input->post('ftel2'),
				'fphone2' => $this->input->post('ffax2'),
				'ffax2' => $this->input->post('ffax2'),

				'fname3' => $this->input->post('fname3'),
				'faddress3' => $this->input->post('faddress3'),
				'fstreet3' => $this->input->post('fstreet3'),
				'fprovince3' => $this->input->post('fprovince3'),
				'fzipcode3' => $this->input->post('fzipcode3'),
				'ftel3' => $this->input->post('ftel3'),
				'fphone3' => $this->input->post('fphone3'),
				'ffax3' => $this->input->post('ffax3'),
				'request' => 22,
				);

				if($this->form19_model->save_form19($data19))
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
	public function show19($formId)
	{
		if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save from to data
			$data['form19'] = $this->form19_model->get_showform19($formId);
			if (empty($data['form19'])){
				show_404();
			}
			$this->load->view('officers/forms/form19', $data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}


	public function update_stat22(){

		// if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
		if ($this->ion_auth->is_officer() )
		{
			
			$user = $this->ion_auth->user()->row();
			$ida = array( 'form19_Id' => $this->input->post('form19_Id')); 
			$array = array('status' => $this->input->post('stat'),
							'comment' => $this->input->post('comment'));
			$this->form19_model->update_stat_form19($ida,$array);
			// $this->load->view('officers/form15/list15', $data);
			redirect('officers/status/22');
			
			
		}
		else{
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