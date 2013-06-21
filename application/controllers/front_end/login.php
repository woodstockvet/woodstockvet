<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function login1(){
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');
        $this->load->model('Useradmin_model');
        $this->output->enable_profiler(TRUE);


        $this->form_validation->set_rules("username", "Email", "required|valid_email");
        $this->form_validation->set_rules("password", "Password", "required|alpha_numeric");


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('defaultPageHeader');
            $this->load->view('defaultPageSidebar');
            $this->load->view('loginPage');
            $this->load->view('defaultPageFooter');
        } else {
            //check db for valid user
           
            if ($this->Useradmin_model->customerCheck($this->input->post('username'),$this->input->post('password')))
            {
            
            
                
                $customer_info = array(
                   'username'  => $this->input->post('username'),
                   'logged_in' => TRUE
               );
                $this->session->set_userdata($customer_info);
               
               $this->account();
            } else
            {
                echo "You got knocked the !#@ out.";}
        }
        }
        
        public function login0(){
            $this->load->helper(array('form','url'));
   
            $this->session->sess_destroy();
            
            $main_page = base_url();
            redirect($main_page);
        }
        
        
         public function account(){
         
   
            $this->load->view('defaultPageHeader');
            $this->load->view('defaultPageSidebar');
            $this->load->view('customerAccountPage');
            $this->load->view('defaultPageFooter');
        }
    }

    /* End of file login.php */
    /* Location: ./application/controllers/front_end/login.php */