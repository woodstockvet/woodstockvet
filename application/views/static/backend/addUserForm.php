
<?php echo validation_errors(); ?>
<form method="post" action="addUser" />


<table> 
    <caption><b>Add New Woodstock User</b></caption>
     <tr>   
        <td>First Name</td><td><input type="text" name="first_name" value =""/> </td>
     </tr>
    <tr>  
        <td>Last Name</td><td><input type="text" name="last_name" value =""/>  </td>
    </tr>
    <tr>  
        <td>Phone</td><td><input type="text" name="phone" value= ""/>  </td>
    </tr>
     <tr>  
        <td>Email</td><td><input type="text" name="email" value= ""/>  </td>
    </tr>
    <tr>  
        <td>Position</td><td><input type="text" name="position" value= ""/>  </td>
    </tr>
    _____________________
    <tr>  
        <td>User Name</td><td><input type="text" name="username" value =""/> </td>
    </tr>
    <tr>  
        <td>User Password</td><td><input type="password" name="password" value =""/>  </td>
    </tr>
    <tr>  
        <td>Password Check </td><td><input type="password" name="password_check" value =""/>  </td>
    </tr>
    <tr>  
        <td>User Type</td><td><input type="text" name="user_type" value=""/> </td>
    </tr>
</table>
<input type ="submit">
</form>
        
        
        