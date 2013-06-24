  <div class="content"><p>
<?php echo validation_errors();
 echo $this->calendar->generate($this->uri->segment(4), $this->uri->segment(5),$data);
 echo "</p>";

$timeArray = array ("9:00:00","9:30:00","10:30:00","11:00:00","11:30:00","13:00:00","13:30:00","14:00:00","14:30:00","15:00:00","15:30:00","16:00:00","16:30:00");

?>


<form method="post" action="addUser" />


 <?php if ($this->session->userdata('logged_in') ) { ?>

<table> 
    <caption><b></b></caption>
     
    <tr>  
        <td>Select a time</td><td>  </td>
    </tr>
    
    <?php foreach ($timeArray as $theTime) {
      $regexTheTime = "/".$theTime."/";
    if (!preg_match($regexTheTime,$data["regex"])){?>
    
       <tr>  
        <td>  </td><td><input type="radio" name="appt_time" value ="<?php $theTime ?>"/><?php echo substr($theTime,0,strlen($theTime)-3); ?></td>
     </tr> 
        </table>
<input type ="submit">
</form>
        
     <?php   
        
    }
}
 }
 else
     {
     echo "Please login to select an appointment time. </br>";
     echo "<a href=".base_url()."/front_end/login/login1>Click here to login</a>";
 
     }
 
  ?>
     


   
     </div>     