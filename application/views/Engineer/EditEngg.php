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
	    	<h2 class="card-title" align="center">Edit Profile</h2><br><br> 
		<thead>
			<tr>
			<th> ID </th>
			<th> NAME </th>
			<th> EMAIL </th>
			<th> PASSWORD </th>
			<th> AGE </th>
			<th> NO. OF YEARS OF EXPERIENCE </th>
			<th> PAYMENT LOOKING FOR </th>
			<th> LOCATION </th>
			<th> EXPERTISE </th>
			<th> DESCRIPTION </th>
			<th> SAVE </th>
		</tr>
		</thead>
		<?php foreach($GetDataEngg as $data){?>
			<tr>
				<td><?php echo $data['engg_id']?></td>
				<?php }?>
				<td><input type="text" class="form-control" size="10" name="name" id="name"></td>
				<td><?php echo $session_data['email']?></td>
				<td><?php echo $session_data['pass']?></td>
				<form method="post">
					<td><input type="text" class="form-control" size="10" name="age" id="age"></td>
					<td><input type="text" class="form-control" size="10" name="no_exp" id="no_exp"></td>
					<td><input type="text" class="form-control" size="10" name="pay_looking" id="pay_looking"></td>
					<td><input type="text" class="form-control" size="10" name="location" id="location"></td>
					<td>
						<select class="form-control selectpicker" name="expertise" id="expertise">
							<option value="">SELECT AN AREA OF EXPERTISE</option>
							<option value="MECHANICAL">MECHANICAL</option>
							<option value="SOFTWARE">SOFTWARE</option>
							<option value="CIVIL">CIVIL</option>
							<option value="HARDWARE">HARDWARE</option>
						</select>
					</td>
					<td><input type="text" class="form-control" size="10" name="descp" id="descp"></td>
					<td><input type="button" class="btn btn-primary" name="submit" id="submit" value="UPDATE"></td>
				</form>
			</tr>
		</table>
	  </div>
	</div>
	
</body>
</html>
<script>
	$("#submit").on('click',function(){
		var email='<?php echo $session_data['email']?>';
		var pass='<?php echo $session_data['pass']?>';
		var name=$("#name").val();
		var age=$("#age").val();
		var no_exp=$("#no_exp").val();
		var pay_looking=$("#pay_looking").val();
		var location=$("#location").val();
		var expertise=$("#expertise").val();
		var descp=$("#descp").val();		
		
		if (name!="" && email!="" && pass!="" && age!="" && no_exp!="" && pay_looking!="" && location!="" && expertise!="" && descp!="") {
			$.post("<?php echo base_url('index.php/Engineer/Edit_Engg');?>",{
				name:name,
				email:email,
				pass:pass,
				age:age,
				no_exp:no_exp,
				pay_looking:pay_looking,
				location:location,
				expertise:expertise,
				descp:descp,

			},function(data){
				alert("UPDATED SUCCESSFULLY!");
				window.location.href = "<?php echo base_url()?>index.php/Engineer/Profile";
			})
		}
		else{
			alert("ALL FIELDS ARE MANDATARY. \n KINDLY FILL AGAIN.");
			window.location.reload();	
		}
	});
</script>