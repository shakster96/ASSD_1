<!DOCTYPE html>
<html lang="en">  
<head>
<link href="<?php echo base_url(); ?>css/style.css" rel='stylesheet' type='text/css' />
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

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

<div class="container">
    <!-- validation -->
	<!-- <div class="grids">
		<div class="progressbar-heading grids-heading">
			<h2>User Account</h2>
		</div>
		
		<div class="forms-grids">
			<div class="forms3">
			<div class="w3agile-validation w3ls-validation">
				<div class="panel panel-widget agile-validation register-form">
					<div class="validation-grids widget-shadow" data-example-id="basic-forms">
						<a href="<?php echo base_url(); ?>index.php/UserController/logout" class="logoutBtn">Logout</a>
						<div class="input-info">
							<h3>Welcome <?php echo $user['name']; ?>!</h3>
						</div>
						<div class="account-info">
							<p><b>Name: </b><?php echo $user['name']; ?></p>
							<p><b>Email: </b><?php echo $user['email']; ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"> </div>
			</div>
		</div>
	</div> -->
	<!-- //validation -->
</div>
</body>
</html>