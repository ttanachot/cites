<?php

class Form21_C extends CI_Controller{

	public function __construct()  // load the model
	{
		parent::__construct();
		$this->load->model('form21_model');

	}

	public function form21($request)
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
				$user = $this->ion_auth->user()->row();
				//save username to be data
				$data['username'] = $user->username;
				//save request to be data
				$data['request'] = $request; 
				//open form21
				$this->load->view('pages/forms/form21',$data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}

	public function preview21()
	{

		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open preview form21
			$this->load->view('pages/previews/preview21',$data);
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

		$data['checks'] = $this->form21_model->get_stat21($id['id']);
		$data['formNameId'] = 'form21_Id';
		$data['activer'] = 2;
			
		$this->load->view('pages/status/status',$data);
	}

	public function statusoff(){
		$user = $this->ion_auth->user()->row();
		//save username to be data
		$data['username'] = $user->username;
		$id['id'] = $user->id;

		$data['checks'] = $this->form21_model->get_allform21();
		$data['formNameId'] = 'form21_Id';
		$data['activer'] = 2;
			
		$this->load->view('officers/status',$data);
	}


	public function save21()
	{

		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			//load user
			$user = $this->ion_auth->user()->row();


			$data21 = array(
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
				'faddress2' => $this->input->post('faddress2'),
				'fstreet2' => $this->input->post('fstreet2'),
				'fprovince2' => $this->input->post('fprovince2'),
				'fzipcode2' => $this->input->post('fzipcode2'),
				'ftel2' => $this->input->post('ftel2'),
				'fphone2' => $this->input->post('ffax2'),
				'ffax2' => $this->input->post('ffax2'),

				'fregisNum' => $this->input->post('fregisNum'),
				'fname3' => $this->input->post('fname3'),
				'faddress3' => $this->input->post('faddress3'),
				'fstreet3' => $this->input->post('fstreet3'),
				'fprovince3' => $this->input->post('fprovince3'),
				'fzipcode3' => $this->input->post('fzipcode3'),
				'ftel3' => $this->input->post('ftel3'),
				'fphone3' => $this->input->post('fphone3'),
				'ffax3' => $this->input->post('ffax3'),

				'plantname' => $this->input->post('plantname'),
				'sname' => $this->input->post('sname'),
				'numberbreed' => $this->input->post('numberbreed'),
				'numbercom' => $this->input->post('numbercom'),
				'source' => $this->input->post('source'),
				'ab' => $this->input->post('ab'),
				'fimnum' => $this->input->post('fimnum'),
				'fformdate' => $this->input->post('fformdate'),
				'fformdateend' => $this->input->post('fformenddate'),
				'request' => 21,
				);

				if($this->form21_model->save_form21($data21))
				{
					redirect('auth', 'refresh');
				}else{
					show_404();
				}


			// //open preview form21
			// $this->load->view('pages/previews/preview21');
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
		
	}


	/*
	 *	OFFICER
	 *
	 */


	// public function list21($request)
	// {
	// 	if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
	// 	{
	// 		$user = $this->ion_auth->user()->row();
	// 		//save username to be data
	// 		$data['username'] = $user->username;
	// 		//save request to be data
	// 		$data['request'] = $request;
	// 		//load db table form21
	// 		$data['form21'] = $this->form21_model->get_listform21($request);
	// 		//open quqery form21
	// 		$this->load->view('officers/form21/list21',$data);
	// 	} else{
	// 		//redirect them to the login page
	// 	 	redirect('auth', 'refresh');
	// 	}
		
	// }
	public function show21($formId)
	{
		if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save from to data
			$data['form21'] = $this->form21_model->get_showform21($formId);
			if (empty($data['form21'])){
				show_404();
			}
			$this->load->view('officers/forms/form21', $data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}

	

}