<!DOCTYPE html> 
<html lang = "en"> 

<head> 
   <meta charset = "utf-8"> 
   <title>Vote fior celeb view</title> 
   <link href="<?= base_url();?>css/bootstrap/css/bootstrap.css" rel="stylesheet">
   <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body> 


   
      <div align="center" valign="middle">
        <h4 align="center" valign="middle">Choose your favourite celeb!!</h4>
      <form method="post" action="<?php echo site_url('CelebVotingController/vote_celeb'); ?>">
        <table class="table">

         <tr>
            <?php foreach($VOTE as $celebV){?>

            <td align="center" valign="middle"><?=$celebV->name;?></td>

            <?php }?>
         </tr>
         <tr>
            <!-- //check the onclick method and how to pass data to php function here without AJAX -->
           <?php foreach($VOTE as $celebV){?>
           <td  align="center" valign="middle"><button type="submit" id="<?=$celebV->id;?>" name="btnVote" value="<?=$celebV->id;?>"><img src="<?=$celebV->imgURL;?>"></button></td>
           <?php }?>
        </tr>         
     </table>
  </form>
  </div> 


<script language="Javascript">

  /*function vote(id) {
   //Do something with id
      //var id = id
      alert(id);
      $.ajax({
         type: "POST",
      //url: "<?php echo base_url('CelebVotingController/vote_celeb');?>",
      //url: "../../index.php/CelebVotingController/vote_celeb",
      url: "http://localhost/CW1/index.php/CelebVotingController/vote_celeb",
      //url: "<?php echo site_url('CelebVotingController/vote_celeb');?>",
      //dataType:"jsonp",
      data: {id:id},
      success: function(data){
         console.log(data); 
         console.log("sent some BS no idea if it's being parsed");
      },
      failure: function (errMsg) {
       console.log(errMsg);
       console.log("motherfucker die in the shithole you crawled out from")
    }
 });

   }*/

</script>

</body>

</html>