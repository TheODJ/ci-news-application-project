<?php
	class Pages extends CI_Controller{


		public function view($page='index')
		{
			if(!file_exists(APPPATH.'views/news/'.$page.'.php'))
			{
				show_404();
			}
			$data['title']=ucfirst($page);
			$this->load->view('Templates/header',$data);
			$this->load->view('news/'.$page,$data);
			$this->load->view('Templates/footer',$data);

		}
	}


?>