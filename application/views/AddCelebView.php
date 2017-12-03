<!DOCTYPE html> 
<!DOCTYPE html>
<html lang = "en"> 

   <head> 
      <meta charset = "utf-8"> 
      <title>Add Celeb View</title> 

      <link href="<?= base_url();?>css/bootstrap/css/bootstrap.css" rel="stylesheet">
   </head>
	
   <body> 
          <h4 align="center" valign="middle">Add a new Celebrity</h4>
        <form method="post" action="<?php echo site_url('CelebVotingController/add_celeb'); ?>">  
        <table class="table" >  
            <tr>  
                <td align="center" valign="middle">Name:</td>   
                <td align="center" valign="middle"><input type="text" id="name" name="name"></td>  
            </tr>  
            <tr>  
                <td align="center" valign="middle">Image URL:</td>  
                <td align="center" valign="middle"><input type="text" id="imgURL" name="imgURL"></td>  
            </tr>  
            
            <tr>  
                <td align="center" valign="middle"><input type="submit" name="submit" value="Save"> </td> 
            </tr>  
        </table>  
    </form>  

   </body>
	
</html>