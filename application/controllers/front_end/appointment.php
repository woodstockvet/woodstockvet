<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Appointment extends CI_Controller {

   public function schedule(){
        	$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
               
                $this->load->model('Appointment_model');
                
               	$this->load->view('defaultPageHeader');
                $this->load->view('defaultPageSidebar');
               
                
                
                  $regexTime="";
                 if ($this->uri->segment(5))
                 
                 {  $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $this->uri->segment(5),$this->uri->segment(4));
                        
                       $selectedDate= $this->uri->segment(4).'-'.$this->uri->segment(5).'-'.$this->uri->segment(6);
                       $apptTimes = $this->Appointment_model->getAppointmentsByDate($selectedDate,'Apt_Time');
                      
                       $regexTime ="";
                       foreach ($apptTimes as $eachTime)
                       {
                           $regexTime = $regexTime.$eachTime["Apt_Time"]."|";}
                                             

                           $regexTime = trim($regexTime,"-");
                    
                              for ($day=1;$day<=$daysInMonth;$day++){ 
              $data[$day] = base_url()."index.php/front_end/appointment/schedule/".$this->uri->segment(4)."/".$this->uri->segment(5)."/".$day;
                 }
             
                 }
                  else
                  {   $today = getdate();
                      $month = $today['mon'];
                      $year = $today['year'];
                      $daysInMonth = cal_days_in_month(CAL_GREGORIAN,$month,$year);    
                      for ($day=1;$day<=$daysInMonth;$day++){ 
                  
              $data[$day] = base_url()."index.php/front_end/appointment/schedule/".$year."/".$month."/".$day;
                 }}
                
                 $next_prev_url = base_url()."index.php/front_end/appointment/schedule";
               
                 
                
                 
          
                 
                          $prefs = array (
               'show_next_prev'  => TRUE,
              'next_prev_url'   => $next_prev_url
             );
                          
                          
                $prefs['template'] = '

   {table_open}<table border="1" cellpadding="0" cellspacing="5">{/table_open}

   {heading_row_start}<tr>{/heading_row_start}

   {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
   {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
   {heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

   {heading_row_end}</tr>{/heading_row_end}

   {week_row_start}<tr>{/week_row_start}
   {week_day_cell}<td>{week_day}</td>{/week_day_cell}
   {week_row_end}</tr>{/week_row_end}

   {cal_row_start}<tr>{/cal_row_start}
   {cal_cell_start}<td>{/cal_cell_start}

   {cal_cell_content}<a href="{content}">{day}</a>{/cal_cell_content}
   {cal_cell_content_today}<div class="highlight"><a href="{content}">{day}</a></div>{/cal_cell_content_today}

   {cal_cell_no_content}{day}{/cal_cell_no_content}
   {cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

   {cal_cell_blank}&nbsp;{/cal_cell_blank}

   {cal_cell_end}</td>{/cal_cell_end}
   {cal_row_end}</tr>{/cal_row_end}

   {table_close}</table>{/table_close}
';
                 
                 $data['regex']=$regexTime;
                
                 $this->load->library('calendar',$prefs);
                $this->load->view('appointmentForm',array('data' => $data));
            
                $this->load->view('defaultPageFooter');
                
                
/*$this->output->enable_profiler(TRUE);

  $this->form_validation->set_rules("first_name","First Name","required|alpha");
  $this->form_validation->set_rules("last_name","Last  Name","required|alpha");
 

  $this->form_validation->set_rules("phone","Phone","alpha_dash");
  $this->form_validation->set_rules("email","Email","valid_email");

  $this->form_validation->set_rules("pet_name","Pet Name","alphanum");
  $this->form_validation->set_rules("pet_type","Pet Type","alpha");
  $this->form_validation->set_rules("requested_date","Requested Date","valid_email");
  $this->form_validation->set_rules("requested_time","Requested Time","valid_email");

  
  
  
  $this->form_validation->set_rules("username","Username","required|alpha_numeric|is_unique[User_T.User_name]");
  $this->form_validation->set_rules("password","Password","required|alpha_numeric|matches[password_check");
  $this->form_validation->set_rules("user_type","User Type","require|alpha");
  
		if ($this->form_validation->run() == FALSE) 
                    {
        	$this->load->view('defaultPageHeader');
                $this->load->view('addUserForm');
                $this->load->view('defaultPageFooter');
                    }
                else
                {
                     //Load data base. print success page.
                    $form_data_staff = 
                           array('First_Name' => $this->input->post('first_name'),
   				'Last_Name' => $this->input->post('last_name'),
   				'Phone' => $this->input->post('phone'),
                                'Email' => $this->input->post('email'),
   				'Position' => $this->input->post('position'));
                    
   		     $form_data_user = 
                           array('User_Name' => $this->input->post('username'),
   				'User_Password' => $this->input->post('passw0rd'),
   				'User_Type' => $this->input->post('user_type')
			//	'uUserID' => $this->Rsupm->_getUserID()) ;
                     );
                     $this->Useradmin_model->addUserToDB($form_data_user,$form_data_staff);
                     echo "hello"; 
                }*/
    }
}
?>

