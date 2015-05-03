<?php

class Form16_C extends CI_Controller{

	public function __construct()  // load the model
	{
		parent::__construct();
		$this->load->model('form15_model');
		$this->load->model('form16_model');
		$this->load->model('form17_model');
		$this->load->model('form20_model');
		$this->load->model('form21_model');
	}


	public function update_stat11(){

		// if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
		if ($this->ion_auth->is_officer() )
		{
			
			$user = $this->ion_auth->user()->row();
			$ida = array( 'form15_Id' => $this->input->post('form15_Id')); 

			if($this->input->post('stat') == "Denied")
			{
				$array = array('status' => $this->input->post('stat'),
							'comment' => $this->input->post('comment'));
				$this->form15_model->update_stat_form15($ida,$array);
				// $this->load->view('officers/form15/list15', $data);
				redirect('officers/status/11');
			} else 
				{

				$id = $ida['form15_Id'];
					//save username to be data
				$data['username'] = $user->username;
				$data['form15'] = $this->form15_model->get_listidform15('11', $id);
				$data['form15']['req_Id'] = $data['form15']['form15_Id'];
				unset($data['form15']['form15_Id'],
					$data['form15']['status'],
					$data['form15']['comment']);
				
				// open quqery form15
				// $this->load->view('officers/form15/list15',$data);
				if($this->form16_model->save_form16($data['form15']))
				{
					$array = array('status' => $this->input->post('stat'),
								'comment' => $this->input->post('comment'));
					$this->form15_model->update_stat_form15($ida,$array);
					// $this->load->view('officers/form15/list15', $data);
					redirect('officers/status/11');
				}else{
					show_404();
				}
			}
		}
		else{
			redirect('auth', 'refresh');
		}

	}

	public function update_stat21(){

		// if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
		if ($this->ion_auth->is_officer() )
		{
			$user = $this->ion_auth->user()->row();
			$ida = array( 'form21_Id' => $this->input->post('form21_Id')); 
			
			if($this->input->post('stat') == "Denied")
			{
				$array = array('status' => $this->input->post('stat'),
							'comment' => $this->input->post('comment'));
				$this->form21_model->update_stat_form21($ida,$array);
				// $this->load->view('officers/form15/list15', $data);
				redirect('officers/status/21');
			} else 
			{
				
				// $user = $this->ion_auth->user()->row();
				// $ida = array( 'form21_Id' => $this->input->post('form21_Id')); 
				$id = $ida['form21_Id'];
					//save username to be data
				$data['username'] = $user->username;
				$data['form21'] = $this->form21_model->get_listidform21('21', $id);
				$data['form21']['req_Id'] = $data['form21']['form21_Id'];
				unset($data['form21']['form21_Id'],
					$data['form21']['status'],
					$data['form21']['comment'],
					$data['form21']['fregisNum'],
					$data['form21']['fname3'],
					$data['form21']['fimnum'],
					$data['form21']['fformdate'],
					$data['form21']['fformdateend']);
				
				// open quqery form15
				// $this->load->view('officers/form15/list15',$data);
				if($this->form16_model->save_form16($data['form21']))
				{
					$array = array('status' => $this->input->post('stat'),
								'comment' => $this->input->post('comment'));
					$this->form21_model->update_stat_form21($ida,$array);
					// $this->load->view('officers/form15/list15', $data);
					redirect('officers/status/21');
				}else{
					show_404();
				}
			}
		}
		else{
			redirect('auth', 'refresh');
		}

	}

	public function update_stat23()
	{

		// if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
		if ($this->ion_auth->is_officer() )
		{
			$user = $this->ion_auth->user()->row();
			$ida = array( 'form20_Id' => $this->input->post('form20_Id')); 

			if($this->input->post('stat') == "Denied")
			{
				$array = array('status' => $this->input->post('stat'),
							'comment' => $this->input->post('comment'));
				$this->form20_model->update_stat_form20($ida,$array);
				// $this->load->view('officers/form15/list15', $data);
				redirect('officers/status/23');
			} else 
			{

				$id = $ida['form20_Id'];
					//save username to be data
				$data['username'] = $user->username;
				$data['form20'] = $this->form20_model->get_listidform20('23', $id);
				$data['form20']['req_Id'] = $data['form20']['form20_Id'];

				unset($data['form20']['form20_Id'],
					$data['form20']['status'],
					$data['form20']['comment'],
					$data['form20']['tname'],
					$data['form20']['fname3'],
					$data['form20']['fcause']);
				
				// open quqery form15
				// $this->load->view('officers/form15/list15',$data);
				if($this->form16_model->save_form16($data['form20']))
				{
					$array = array('status' => $this->input->post('stat'),
								'comment' => $this->input->post('comment'));
					$this->form20_model->update_stat_form20($ida,$array);
					// $this->load->view('officers/form15/list15', $data);
					redirect('officers/status/23');
				}else{
					show_404();
				}
			}
		}
		else{
			redirect('auth', 'refresh');
		}

	}

	public function update_stat24()
	{

		// if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
	
		if ($this->ion_auth->is_officer() )
		{
			$user = $this->ion_auth->user()->row();
			$ida = array( 'form17_Id' => $this->input->post('form17_Id')); 

			if($this->input->post('stat') == "Denied")
			{
				$array = array('status' => $this->input->post('stat'),
							'comment' => $this->input->post('comment'));
				$this->form17_model->update_stat_form17($ida,$array);
				// $this->load->view('officers/form15/list15', $data);
				redirect('officers/status/24');
			} else 
			{

				$id = $ida['form17_Id'];
					//save username to be data
				$data['username'] = $user->username;
				$data['form17'] = $this->form17_model->get_listidform17('24', $id);
				$data['form17']['req_Id'] = $data['form17']['form17_Id'];
				$data['form17']['fdates'] = $data['form17']['fdate'];
				unset($data['form17']['form17_Id'],
					$data['form17']['status'],
					$data['form17']['comment'],
					$data['form17']['fdate'],
					$data['form17']['fdate2'],
					$data['form17']['fyear'],
					$data['form17']['plantname2'],
					$data['form17']['plantname3'],
					$data['form17']['sname2'],
					$data['form17']['numberbreed2'],
					$data['form17']['numbercom2'],
					$data['form17']['source2'],
					$data['form17']['ab2'],
					$data['form17']['sname3'],
					$data['form17']['numberbreed3'],
					$data['form17']['numbercom3'],
					$data['form17']['source3'],
					$data['form17']['ab3']);
				
				// open quqery form15
				// $this->load->view('officers/form15/list15',$data);
				if($this->form16_model->save_form16($data['form17']))
				{
					$array = array('status' => $this->input->post('stat'),
								'comment' => $this->input->post('comment'));
					$this->form17_model->update_stat_form17($ida,$array);
					// $this->load->view('officers/form15/list15', $data);
					redirect('officers/status/24');
				}else{
					show_404();
				}
			}
		}
		else
		{
			redirect('auth', 'refresh');
		}

	}


	public function view16($req_Id, $req){
		if(!$this->ion_auth->logged_in()){
			redirect('auth', 'refresh');
		}

		$data['form16'] = $this->form16_model->get_form16($req_Id, $req);
		$user = $this->ion_auth->user()->row();
			//save username to be data
		$data['username'] = $user->username;
		$this->load->view('pages/previews/preview16', $data);

	}



}