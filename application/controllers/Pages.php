<?php
	class Pages extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('news_model');
			$this->load->helper('url_helper');
			$this->load->database();
			$this->load->library(['ion_auth', 'form_validation']);
			$this->load->helper(['url', 'language']);

			$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));

			$this->lang->load('auth');
	
		}
		public function view($page='index')
		{
			if(!$this->ion_auth->logged_in())
			{
				redirect('auth/login', 'refresh');
			}
			else
			{
				if(!file_exists(APPPATH.'views/news/'.$page.'.php'))
				{
					show_404();
				}
				$data['news']=$this->news_model->get_news();
				$data['title']=ucfirst($page);
				$this->load->view('Templates/header',$data);
				$this->load->view('news/'.$page,$data);
				$this->load->view('Templates/footer',$data);
			}

		}
	}


?>