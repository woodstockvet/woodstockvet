  <div class="content"><p>
<?php echo validation_errors();
  echo $this->calendar->generate($this->uri->segment(4), $this->uri->segment(5)); ?></p>

 


<form method="post" action="addUser" />


<table> 
    <caption><b></b></caption>
     
    <tr>  
        <td>Select a time</td><td>  </td>
    </tr>
     <tr>  
        <td>  </td><td><input type="radio" name="appt_time" value ="9:00"/>9:00</td>
     </tr>
     <tr>
        <td>  </td><td><input type="radio" name="appt_time" value ="9:30"/>9:30</td>
     </tr>
     <tr> 
        <td>  </td><td><input type="radio" name="appt_time" value ="10:00"/>10:00</td>
     </tr>
     <tr> 
        <td>  </td><td><input type="radio" name="appt_time" value ="10:30"/>10:30</td>
    </tr>
     <tr>  
        <td>  </td><td><input type="radio" name="appt_time" value ="11:00"/>11:00</td>
    </tr>
     <tr> 
        <td>  </td><td><input type="radio" name="appt_time" value ="11:30"/>11:30</td>
    </tr>
     <tr> 
        <td>  </td><td><input type="radio" name="appt_time" value ="1:00"/>1:00</td>
    </tr>
     <tr> 
        <td>  </td><td><input type="radio" name="appt_time" value ="1:30"/>1:30</td>     
     </tr>
     <tr>
        <td>  </td><td><input type="radio" name="appt_time" value ="2:00"/>2:00</td>
     </tr>
     <tr> 
        <td>  </td><td><input type="radio" name="appt_time" value ="2:30"/>2:30</td>
     </tr>
     <tr>  
        <td>  </td><td><input type="radio" name="appt_time" value ="3:00"/>3:00</td>
     </tr>
     <tr> 
        <td>  </td><td><input type="radio" name="appt_time" value ="3:30"/>3:30</td>
     </tr>
     <tr>
        <td>  </td><td><input type="radio" name="appt_time" value ="4:00"/>4:00</td>
    </tr>

</table>
<input type ="submit">
</form>
        
   
     </div>     