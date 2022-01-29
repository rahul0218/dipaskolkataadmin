<?php
    class Admin extends CI_Controller{
        public function view($page = 'index'){
            if (!file_exists(APPPATH.'views/admin/'.$page.'.php')) {
				show_404();
			}
           $data['title'] = ucfirst($page);
           $data['adqry'] = $this->pages_model->get_adqry();

           $this->load->view('admin/header');
			$this->load->view('admin/'.$page, $data);
			$this->load->view('admin/footer');
        }
        public function index(){

            $data['title'] = 'Admission Query';
            $data['adqry'] = $this->pages_model->get_adqry();
            //print_r($data['adqry']);
            //echo 'this is test print';

            $this->load->view('admin/header');
            $this->load->view('admin/index', $data);
            $this->load->view('admin/footer');
        }
    }