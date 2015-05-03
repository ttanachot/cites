<?php

class Form14_C extends CI_Controller{

	public function __construct()  // load the model
	{
		parent::__construct();
		$this->load->model('form13_model');
		$this->load->model('form14_model');
	}


	public function update_stat3($req){

		// if ($this->ion_auth->logged_in() && $this->ion_auth->is_officer())
		if ($this->ion_auth->is_officer() )
		{
			
			$user = $this->ion_auth->user()->row();
			$ida = array( 'form13_Id' => $this->input->post('form13_Id')); 

			if($this->input->post('stat') == "Denied")
			{
				$array = array('status' => $this->input->post('stat'),
							'comment' => $this->input->post('comment'));
				$this->form13_model->update_stat_form13($ida,$array);
				// $this->load->view('officers/form15/list15', $data);
				redirect('officers/status/'.$req);
			} else 
				{

				$id = $ida['form13_Id'];
					//save username to be data
				$data['username'] = $user->username;
				$data['form13'] = $this->form13_model->get_listidform13($req, $id);
				$data['form13']['req_Id'] = $data['form13']['form13_Id'];
				unset($data['form13']['form13_Id'],
					$data['form13']['status'],
					$data['form13']['comment'],
					$data['form13']['fplace'],
					$data['form13']['fdate'],
					$data['form13']['fbd'],
					$data['form13']['fnation'],
					$data['form13']['fother'],
					$data['form13']['fname3'],
					$data['form13']['fnurse'],
					$data['form13']['fnurseno'],
					$data['form13']['ftrans'],
					$data['form13']['fvalue'],
					$data['form13']['fentry'],
					$data['form13']['fdel']);
				
				// open quqery form15
				// $this->load->view('officers/form15/list15',$data);
				if($this->form14_model->save_form14($data['form13']))
				{
					$array = array('status' => $this->input->post('stat'),
								'comment' => $this->input->post('comment'));
					$this->form13_model->update_stat_form13($ida,$array);
					// $this->load->view('officers/form15/list15', $data);
					redirect('officers/status/'.$req);
				}else{
					show_404();
				}
			}
		}
		else{
			redirect('auth', 'refresh');
		}

	}



	public function view14($req_Id, $req){
		if(!$this->ion_auth->logged_in()){
			redirect('auth', 'refresh');
		}

		$data['form14'] = $this->form14_model->get_form14($req_Id, $req);
		$user = $this->ion_auth->user()->row();
			//save username to be data
		$data['username'] = $user->username;
		$this->load->view('pages/previews/preview14', $data);

	}



}