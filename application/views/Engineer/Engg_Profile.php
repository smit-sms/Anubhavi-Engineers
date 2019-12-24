<!DOCTYPE html>
<html>
<head>
	<title>ENGINEER PORTAL</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/material-kit.css">
	<script src="<?php echo base_url()?>assets/js/material-kit.js"></script>
	<style>
		table, th ,td{
			text-align: center;
			font-size: 15px;
		}
	</style>
</head>
<body>
	<div hidden="" align="right"><?php echo $session_data['email']?><?php echo $session_data['pass']?></div>
	<h1 align="center" class="card-title">WELCOME ENGINEER</h1><br><br>
	

	<div class="card text-center">
	  <div class="card-header card-header-primary">
	    <ul class="nav nav-tabs">
	      <li class="nav-item">
	      	<div class="input-group-prepend">
                <span class="input-group-text">
              		<i class="material-icons">dashboard</i>
                </span>
                <a class="nav-link" href="<?php echo base_url()?>index.php/Engineer">DASHBOARD</a>
          	</div>
	      </li>
	      <li class="nav-item">
	      	<div class="input-group-prepend">
                <span class="input-group-text">
              		<i class="material-icons">person</i>
                </span>
	       		<a class="nav-link active" href="<?php echo base_url()?>index.php/Engineer/Profile">PROFILE</a>
	       	</div>
	      </li>
	      <li class="nav-item" >
	        <div align="text-right">
	        	<a class="nav-link" href="<?php echo base_url()?>index.php/Login/logout">LOGOUT</a>
	        </div>
	      </li>
	    </ul>
	  </div>
	  <div class="card-body" align="center">		  	  
	    <table class="table table-hover table-bordered">
	    	<h2 class="card-title" align="center">My Profile</h2><br><br> 
		<thead>
			<tr>
			<th>&nbsp; ID &nbsp;</th>
			<th>&nbsp; NAME &nbsp;</th>
			<th>&nbsp; EMAIL &nbsp;</th>
			<th>&nbsp; PASSWORD &nbsp;</th>
			<th>&nbsp; AGE &nbsp;</th>
			<th>&nbsp; NO. OF YEARS OF EXPERIENCE &nbsp;</th>
			<th>&nbsp; PAYMENT LOOKING FOR &nbsp;</th>
			<th>&nbsp; LOCATION &nbsp;</th>
			<th>&nbsp; EXPERTISE &nbsp;</th>
			<th>&nbsp; DESCRIPTION &nbsp;</th>
			<th>&nbsp; EDIT &nbsp;</th>
		</tr>
		</thead>
		<?php foreach($GetDataEngg as $data){?>
			<tr>
				<td><?php echo $data['engg_id']?></td>
				<td><?php echo $data['engg_name']?></td>
				<td><?php echo $data['email']?></td>
				<td><?php echo $data['pass']?></td>
				<td><?php echo $data['age']?></td>
				<td><?php echo $data['no_exp']?></td>
				<td><?php echo $data['pay_looking']?></td>
				<td><?php echo $data['location']?></td>
				<td><?php echo $data['expertise']?></td>
				<td><?php echo $data['descp']?></td>
				<td><a href="<?php echo base_url()?>index.php/Engineer/EditEngg"><span class="input-group-text"><i class="material-icons">edit</i></span></a></td>
			</tr>		
		<?php }?>
		</table>
	  </div>
	</div>
	
</body>
</html>