<?php
    class Admission_qry extends CI_Controller{
        public function index(){

            $data['title'] = 'Admission Query';
            $data['adqry'] = $this->admissionqry_model->get_adqry();
            print_r($data['adqry']);
            //echo 'this is test print';

            $this->load->view('templates/header');
            $this->load->view('admission_qry/create', $data);
            $this->load->view('templates/footer');
        }

        public function create(){
            $data['title'] = 'Create Admission Query';
            $data['adqry'] = $this->pages_model->get_adqry();
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('phone','Phone','required');
            $this->form_validation->set_rules('course','Course','required');
            $this->form_validation->set_rules('message','Message','required');

            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/header');
                $this->load->view('admission_qry/create', $data);
                $this->load->view('templates/footer');
            }else{
                echo 'this is working';
                $this->admissionqry_model->create_adqry();
                redirect('admission_qry');
            }
        }
    }
