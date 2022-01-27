<?php
    class Admissionqry_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_adqry($slug=FALSE){
            if($slug === FALSE){
                $query = $this->db->get('adqry');
                return $query->result_array();
            }
            $query = $this->db->get_where('adqry',array('slug'=>$slug));
            return $query->row_array();
        }
    }