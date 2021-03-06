<!DOCTYPE html>
<html>
<head>
	<title>COMPANY PORTAL</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/material-kit.css">
	<script src="<?php echo base_url()?>assets/js/material-kit.js"></script>
	<style>
		table, th ,td{
			text-align: center;
			font-size: 16px;
		}
	</style>
</head>
<body>
	<h1 align="center" class="card-title">WELCOME COMPANY</h1><br><br>
	<div hidden="" align="right"><?php echo $session_data['com_email']?><?php echo $session_data['com_pass']?></div>

	<div class="card text-center">
	  <div class="card-header card-header-primary">
	    <ul class="nav nav-tabs">
	      <li class="nav-item">
	      	<div class="input-group-prepend">
                <span class="input-group-text">
              		<i class="material-icons">dashboard</i>
                </span>
                <a class="nav-link" href="<?php echo base_url()?>index.php/Company">DASHBOARD</a>
          	</div>
	      </li>
	      <li class="nav-item">
	      	<div class="input-group-prepend">
                <span class="input-group-text">
              		<i class="material-icons">person</i>
                </span>
	       		<a class="nav-link active" href="<?php echo base_url()?>index.php/Company/Profile">PROFILE</a>
	       	</div>
	      </li>
	      <li class="nav-item" >
	        <div align="text-right">
	        	<a class="nav-link" href="<?php echo base_url()?>index.php/Login/logout">LOGOUT</a>
	        </div>
	      </li>
	    </ul>
	  </div>
	  <div class="card-body">		  	  
	    <table class="table table-hover table-bordered">
	    	<h2 class="card-title">Company Profile</h2><br><br>
		<thead>
			<tr>
				<th> ID </th>
				<th> NAME </th>
				<th> EMAIL </th>
				<th> PASSWORD </th>				
				<th> PHONE </th>
				<th> LOCATION </th>
				<th> WEBSITE </th>
				<th> NO OF YEARS OF EXPERIENCE </th>
				<th> WILLING TO PAY </th>
				<th> EXPERTISE </th>
				<th> DESCRIPTION </th>
				<th> EDIT </th>
			</tr>
		</thead>
		<?php foreach($GetDataCom as $data){?>
			<tr>
				<td><?php echo $data['com_id']?></td>
				<td><?php echo $data['com_name']?></td>
				<td><?php echo $data['com_email']?></td>
				<td><?php echo $data['com_pass']?></td>
				<td><?php echo $data['com_phone']?></td>
				<td><?php echo $data['com_loc']?></td>
				<td><?php echo $data['com_website']?></td>
				<td><?php echo $data['com_no_exp']?></td>
				<td><?php echo $data['com_pay_willing']?></td>
				<td><?php echo $data['com_expertise']?></td>
				<td><?php echo $data['com_descp']?></td>
				<td><a href="<?php echo base_url()?>index.php/Company/EditCom"><span class="input-group-text"><i class="material-icons">edit</i></span></a></td>
			</tr>		
		<?php }?>
		</table>
	  </div>
	</div>
</body>
</html>