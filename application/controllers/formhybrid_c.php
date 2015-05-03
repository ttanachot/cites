<?php

class Formhybrid_C extends CI_Controller{

	public function __construct()  // load the model
	{
		parent::__construct();
		$this->load->model('formhybrid_model');

	}

	public function formhybrid($request)
	{
		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
				$user = $this->ion_auth->user()->row();
				//save username to be data
				$data['username'] = $user->username;
				//save request to be data
				$data['request'] = $request; 
				//open formhybrid
				$this->load->view('pages/forms/hybrid',$data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}

	public function previewhybrid()
	{

		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//open preview formhybrid
			$this->load->view('pages/previews/previewhybrid',$data);
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

		$data['checks'] = $this->formhybrid_model->get_stathybrid($id['id']);
		$data['formNameId'] = 'formhybrid_Id';
		$data['activer'] = 6;
			
		$this->load->view('pages/status/status',$data);
	}

	public function statusoff(){
		$user = $this->ion_auth->user()->row();
		//save username to be data
		$data['username'] = $user->username;
		$id['id'] = $user->id;

		$data['checks'] = $this->formhybrid_model->get_allformhybrid();
		$data['formNameId'] = 'formhybrid_Id';
		$data['activer'] = 6;
			
		$this->load->view('officers/status',$data);
	}


	public function savehybrid()
	{

		if ($this->ion_auth->logged_in() && !$this->ion_auth->is_officer())
		{
			//load user
			$user = $this->ion_auth->user()->row();


			$datahybrid = array(
				//add userId form user
				'userId' => $user->id,
				'fname' => $this->input->post('fname'),
				'fbd' => $this->input->post('fbd'),
				'fnation' => $this->input->post('fnation'),
				
				
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

				'fname3' => $this->input->post('fname3'),
				'faddress3' => $this->input->post('faddress3'),
				'fstreet3' => $this->input->post('fstreet3'),
				'fprovince3' => $this->input->post('fprovince3'),
				'fzipcode3' => $this->input->post('fzipcode3'),
				'ftel3' => $this->input->post('ftel3'),
				'fphone3' => $this->input->post('fphone3'),
				'ffax3' => $this->input->post('ffax3'),

				'fmark' => $this->input->post('fmark'),
				'value' => $this->input->post('value'),
				'transportby' => $this->input->post('transportby'),
				'exportto' => $this->input->post('exportto'),
				'estarrivedate' => $this->input->post('estarrivedate'),
				
				'request' => 61,
				);

				if($this->formhybrid_model->save_formhybrid($datahybrid))
				{
					redirect('auth', 'refresh');
				}else{
					show_404();
				}


			// //open preview formhybrid
			// $this->load->view('pages/previews/previewhybrid');
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
		
	}


	/*
	 *	OFFICER
	 *
	 */


	// public function listhybrid($request)
	// {
	// 	if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
	// 	{
	// 		$user = $this->ion_auth->user()->row();
	// 		//save username to be data
	// 		$data['username'] = $user->username;
	// 		//save request to be data
	// 		$data['request'] = $request;
	// 		//load db table formhybrid
	// 		$data['formhybrid'] = $this->formhybrid_model->get_listformhybrid($request);
	// 		//open quqery formhybrid
	// 		$this->load->view('officers/formhybrid/listhybrid',$data);
	// 	} else{
	// 		//redirect them to the login page
	// 	 	redirect('auth', 'refresh');
	// 	}
		
	// }
	public function showhybrid($formId)
	{
		if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
		{
			$user = $this->ion_auth->user()->row();
			//save username to be data
			$data['username'] = $user->username;
			//save from to data
			$data['formhybrid'] = $this->formhybrid_model->get_showformhybrid($formId);
			if (empty($data['formhybrid'])){
				show_404();
			}
			$this->load->view('officers/forms/formhybrid', $data);
		} else{
			//redirect them to the login page
		 	redirect('auth', 'refresh');
		}
	}

	

}