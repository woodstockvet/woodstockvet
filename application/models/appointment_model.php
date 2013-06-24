<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Appointment_model extends CI_Model {
    
    /*need functions to add
     * delete, and update.
     */
    
    function getAppointmentsByDate($YearMonthDay,$dataReturn){
        $this->load->database('woodstoc_vetgroup1');
        
        if ($dataReturn !="All"){
        $this->db->select($dataReturn);
        
        }
        
        $takenDatesQuery = $this->db->get_where('Apt_T', array('Apt_Date' => $YearMonthDay));
        
         return $takenDatesQuery->result_array();

}
}
?>
