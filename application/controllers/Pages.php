<?php
    class Pages extends CI_Controller{
        public function view($page = 'home'){
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }

            $data['title'] = ucfirst($page);
            $data['adqry'] = $this->pages_model->get_adqry();
            $this->load->view('templates/header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
        }

        public function admission_contact(){
            $data['title'] = 'Create Admission Query';
            $data['adqry'] = $this->pages_model->get_adqry();
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('phone','Phone','required');
            $this->form_validation->set_rules('course','Course','required');
            $this->form_validation->set_rules('message','Message','required');
            
            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('pages/admission_contact', $data);
                $this->load->view('templates/footer');
                echo 'this is working';
            }else{
                echo 'this is working';
                $this->pages_model->create_adqry();
                redirect('pages');
            }
            
            
        }
    }
