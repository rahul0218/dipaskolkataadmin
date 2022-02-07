<?php
    class Pages_model extends CI_Model{
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

        public function create_adqry(){
            //$slug = url_title($this->input->adqry('name'));

            $data = array(
                'name' => $this->input->adqry('name'),
                //'slug' => $slug,
                'phone' => $this->input->adqry('phone'),
                'course' => $this->input->adqry('course'),
                'message' => $this->input->adqry('message')
            );

            return $this->db->insert('adqry', $data);
        }
        
    }