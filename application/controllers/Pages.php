<?php
	class Pages extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('news_model');
			$this->load->helper('url_helper');
		}
		public function view($page='index')
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


?>