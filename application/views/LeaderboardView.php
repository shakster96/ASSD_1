<!DOCTYPE html> 
<html lang = "en"> 

   <head> 
      <meta charset = "utf-8"> 
      <title>LeaderBoard View</title> 

      <link href="<?= base_url();?>css/bootstrap/css/bootstrap.css" rel="stylesheet">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   </head>

   <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <p class="navbar-text">Celebrity Vote!</p>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?php echo base_url(); ?>index.php/CelebVotingController">Vote</a></li>
      <li><a href="<?php echo base_url(); ?>index.php/CelebVotingController/load_leaderboard">Leaderboard</a></li>
      <li><a href="<?php echo base_url(); ?>index.php/CelebVotingController/load_new_celeb">Add a new Celeb</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li> <p class="navbar-text"><span class="glyphicon glyphicon-user"></span><?php echo $user['name']; ?></p></li>
      <li><a href="<?php echo base_url(); ?>index.php/UserController/logout"><span class="glyphicon glyphicon-log-out logoutBtn"></span> Logout</a></li>
    </ul>
  </div>
</nav>
	
   <body> 
      <div class="row">
   <div style="width:100%;margin:50px;" >
    <h4>Display Records From Database Using Codeigniter</h4>
    <table class="table table-striped">
     <tr><td><strong>Image URL</strong></td>
     	<td><strong>Name</strong></td><td><strong>Votes</strong></td></tr> 
     <?php foreach($CELEB as $celeb){?>
     <tr><td><img src="<?=$celeb->imgURL;?>" width="214" height="317"></td>
     	<td><?=$celeb->name;?></td>
     	<td><?=$celeb->vote;?></td></tr>     
        <?php }?>  
    </table>
   </div> 
  </div> 
   </body>
	
</html>