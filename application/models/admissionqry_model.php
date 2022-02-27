<?php
    class admissionqry_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function get_adqry($slug=FALSE){
            if($slug === FALSE){
                $query = $this->db->get('adqry');
               // return $query->result_array();
            }
            $query = $this->db->get_where('adqry',array('slug'=>$slug));
            //return $query->row_array();
        }
        
        public function create_adqry(){
            $slug = url_title($this->input->post('name'));

            $data = array(
                'adq_name' => $this->input->post('name'),
                'slug' => $slug,
                'adq_ph' => $this->input->post('phone'),
                'adq_crs' => $this->input->post('course'),
                'adq_msg' => $this->input->post('message')
            );

            return $this->db->insert('adqry', $data);
        }


    }