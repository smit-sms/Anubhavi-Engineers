<!DOCTYPE html>
<html>
<head>
	<title>ADMIN</title>
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
	<h1 align="center" class="card-title">WELCOME ADMIN</h1><br><br>
	<div hidden="" align="right"><?php echo $session_data['email']?></div>
		
	<div class="card text-center">
	  <div class="card-header card-header-primary">
	    <ul class="nav nav-tabs">
	      <li class="nav-item">
	      	<div class="input-group-prepend">
                <span class="input-group-text">
              		<i class="material-icons">supervisor_account</i>
                </span>
                <a  href="<?php echo base_url()?>index.php/Company"></a>
                <a class="nav-link" href="<?php echo base_url()?>index.php/Admin/Admin_engg">View Engineeers</a>
          	</div>
	      </li>
	      <li class="nav-item">
	      	<div class="input-group-prepend">
                <span class="input-group-text">
              		<i class="material-icons">business</i>
                </span>
	       		<a class="nav-link" href="<?php echo base_url()?>index.php/Admin/Admin_com">View Company</a>
	       	</div>
	      </li>
	      <li class="nav-item" >
	        <div align="text-right">
	        	<a class="nav-link" href="<?php echo base_url()?>index.php/Login/logout">LOGOUT</a>
	        </div>
	      </li>
	    </ul>
	  </div>
	</div>
	
</body>
</html>
