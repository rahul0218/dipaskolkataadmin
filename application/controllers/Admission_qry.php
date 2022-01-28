<?php
    class Admission_qry extends CI_Controller{
        public function index(){

            $data['title'] = 'Admission Query';
            $data['adqry'] = $this->admissionqry_model->get_adqry();
            //print_r($data['adqry']);
            //echo 'this is test print';

            $this->load->view('admin/header');
            $this->load->view('admission_qry/index', $data);
            $this->load->view('admin/footer');
        }

        
    }
