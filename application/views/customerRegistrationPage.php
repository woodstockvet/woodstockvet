 <div class="content">
<?php echo validation_errors(); ?>
<form method="post" action="./register" />


<table> 
    <caption><b>Customer Registration Page</b></caption>
     <tr>   
        <td>First Name</td><td><input type="text" name="first_name" value =""/> </td>
     </tr>
    <tr>  
        <td>Last Name</td><td><input type="text" name="last_name" value =""/>  </td>
    </tr>
    <tr>  
        <td>Street Number </td><td><input type="text" name="street_number" value= ""/>  </td>
    </tr>
   <tr>  
        <td>Street Address</td><td><input type="text" name="street_address" value= ""/>  </td>
    </tr>
    
    <tr>  
        <td>City</td><td><input type="text" name="city" value= ""/>  </td>
    </tr>
    
       <tr>  
        <td>State</td><td><input type="text" name="state" value= ""/>  </td>
    </tr>
    
          <tr>  
        <td>Zip</td><td><input type="text" name="zip" value= ""/>  </td>
    </tr>
 
    
   
 ______________
    <tr>  
        <td>Email Address</td><td><input type="text" name="email" value =""/> </td>
    </tr>
    <tr>  
        <td>User Password</td><td><input type="password" name="password" value =""/>  </td>
    </tr>
    <tr>  
        <td>Password Check </td><td><input type="password" name="password_check" value =""/>  </td>
    </tr>
 
</table>
<input type ="submit">
</form>
        
        
 </div>     