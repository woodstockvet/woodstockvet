<?php

class Customer_model extends CI_Model {
    
    /*need functions to add
     * delete, and update.
     */
    
    function addCustomerToDB($form_data1){
       // $this->load->database('woodstoc_vetgroup1');  
	   //databse is in the auto loader, this line not needed
	           
       
        $this->db->insert('Customer_T',$form_data1);

    }
}
?>
