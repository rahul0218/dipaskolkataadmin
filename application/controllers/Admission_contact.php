<?php
    class Admission_contact extends CI_Controller{
        public function index(){
            
            

            $data['title'] = 'Admission Query';

            $this->load->view('templates/header');
            $this->load->view('admission_contact/index', $data);
            $this->load->view('templates/footer');
        }
    }
