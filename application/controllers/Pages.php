<?php
    class Pages extends CI_Controller{
        public function view($page = 'home'){
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }

            $data['title'] = ucfirst($page);

            $this->load->view('templates/header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
        }

        public function admission_contact(){
            $data['title'] = 'Create Admission Query';

            $this->load->view('templates/header');
            $this->load->view('pages/admission_contact', $data);
            $this->load->view('templates/footer');
        }
    }
