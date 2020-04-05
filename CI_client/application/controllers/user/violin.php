<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class violin extends CI_Controller {
    
        public function __construct()
        {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('login_model');
        $this->load->model('violin_model');

        
        

        if($this->session->userdata('level')!="user"){
            redirect('login','refresh');
        }

        }

        public function index()
        {
            $data['title']='MUSIC SHOP';
            $data['name']='$name';
            $data['violin'] = $this->violin_model->getViolinData();
            if($this->input->post('keyword')){
                $data['violin']=$this->violin_model->searchData();
            }
            $this->load->view('template/header_user', $data);
            $this->load->view('user/violin/index', $data);
            $this->load->view('template/footer_user');
        }

        public function detail($id)
        {
            $data['title']='Detail Data';
            $data['violin'] = $this->violin_model->getViolinID($id);
            $this->load->view('template/header_user', $data);
            $this->load->view('user/violin/detail', $data);
            $this->load->view('template/footer_user');
        }
    
    }
    
    /* End of file user.php */
