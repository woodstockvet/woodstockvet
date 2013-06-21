<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Useradmin_model extends CI_Model {
    
    /*need functions to add
     * delete, and update.
     */
    
    function addUserToDB($form_data1,$form_data2){
        $this->load->database('woodstoc_vetgroup1');
        
        $this->db->trans_start();
        $this->db->insert('User_T',$form_data1);
       
         $form_data2['Staff_ID']= $this->db->insert_id();
        
        $this->db->insert('Staff_T',$form_data2);
        $this->db->trans_complete();   

    }
    
      function customerCheck($email,$password){
        $this->load->database('woodstoc_vetgroup1');
        $validUserQuery = $this->db->get_where('Customer_T',array('Email'=>$email,'Password'=>$password));
      
       return $validUserQuery->num_rows();}
}
?>
