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
public function login1() {
$this->load->helper(array('form', 'url'));
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

if ($this->Useradmin_model->customerCheck($this->input->post('username'), $this->input->post('password'))) {



$customer_info = array(
'username' => $this->input->post('username'),
 'logged_in' => TRUE
);
$this->session->set_userdata($customer_info);

$this->account();
} else {

    redirect(base_url()."staticPages/destination/loginErrPage");


}
}
}

public function login0() {
$this->load->helper(array('form', 'url'));

$this->session->sess_destroy();

$main_page = base_url();
redirect($main_page);
}

public function account() {


$this->load->view('defaultPageHeader');
$this->load->view('defaultPageSidebar');
$this->load->view('customerAccountPage');
$this->load->view('defaultPageFooter');
}

public function register() {

$this->load->helper(array('form', 'url'));
$this->load->library('form_validation');
$this->load->model('Customer_model');
$this->output->enable_profiler(TRUE);


$this->form_validation->set_rules("first_name", "First Name", "required|alpha");
$this->form_validation->set_rules("last_name", "Last  Name", "required|alpha");
$this->form_validation->set_rules("street_number", "Street Number", "required|numeric");
$this->form_validation->set_rules("street_address", "Street Address", "required|alphanumeric");
$this->form_validation->set_rules("city", "City", "required|alpha");

$this->form_validation->set_rules("phone", "Phone", "alpha_dash");

$this->form_validation->set_rules("email", "Email", "valid_email||is_unique[Customer_T.Email]");
$this->form_validation->set_rules("password", "Password", "required|alpha_numeric|matches[password_check]");

if ($this->form_validation->run() == FALSE)
    {
        $this->load->view('defaultPageHeader');
        $this->load->view('defaultPageSidebar');
        $this->load->view('customerRegistrationPage');
        $this->load->view('defaultPageFooter');
    }

    
    else
    {
        //Load data base. print success page.
        $form_data_customer =
         array('First_Name' => $this->input->post('first_name'),
         'Last_Name' => $this->input->post('last_name'),
         'Street_Number' => $this->input->post('street_number'),
         'Street_Name' => $this->input->post('street_address'),
         'City' => $this->input->post('city'),
         'State' => $this->input->post('state'),
         'Zip' => $this->input->post('zip'),
         'Phone' => $this->input->post('phone'),
         'Email' => $this->input->post('email'),
         'Password' => $this->input->post('password')
                       
                   );
        
          $this->Customer_model->addCustomerToDB($form_data_customer);
    }
}
}

/* End of file login.php */
/* Location: ./application/controllers/front_end/login.php */