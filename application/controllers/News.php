<?php
	class News extends CI_Controller{

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

		public function index(){
			if(!$this->ion_auth->logged_in())
			{
				redirect('auth/login', 'refresh');
			}
			else
			{
				$data['news']=$this->news_model->get_news();
				$data['title']='News Archive';

				$this->load->view('Templates/header',$data);
				$this->load->view('news/index',$data);
				$this->load->view('Templates/footer',$data);
			}
		}

		public function view($slug=NULL){
			$data['news_item'] = $this->news_model->get_news($slug);
	        if (empty($data['news_item']))
	        {
	                show_404();
	        }

	        $data['title'] = $data['news_item']['title'];

	        $this->load->view('Templates/header', $data);
	        $this->load->view('news/view', $data);
	        $this->load->view('Templates/footer');
		}

		public function create(){
			$this->load->helper('form');
			$this->load->library('form_validation');

			$data['title']='Create a news item';

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('text', 'Text', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('Templates/header', $data);
				$this->load->view('news/create');
				$this->load->view('Templates/footer');
			}
			else{
				$this->news_model->set_news();
				redirect('','refresh');
			}
		}

	}

	

?>