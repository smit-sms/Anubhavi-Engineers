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
			font-size: 17px;
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
	    	<h2 class="card-title">Edit Company Profile</h2><br><br>
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
				<th> SAVE </th>
			</tr>
		</thead>
		<?php foreach($GetDataCom as $data){?>
			<tr>
				<td><?php echo $data['com_id']?></td>
				<?php }?>
				<td><input type="text" class="form-control" size="10" name="com_name" id="com_name"></td>
				<td><?php echo $session_data['com_email']?></td>
				<td><?php echo $session_data['com_pass']?></td>
				<form method="post">
					<td><input type="text" class="form-control" size="10" name="com_phone" id="com_phone"></td>
					<td><input type="text" class="form-control" size="10" name="com_loc" id="com_loc"></td>
					<td><input type="text" class="form-control" size="10" name="com_website" id="com_website"></td>
					<td><input type="text" class="form-control" size="10" name="com_no_exp" id="com_no_exp"></td>
					<td><input type="text" class="form-control" size="10" name="com_pay_willing" id="com_pay_willing"></td>
					<td>
						<select class="form-control selectpicker" name="com_expertise" id="com_expertise">
							<option value="">SELECT AN AREA OF EXPERTISE</option>
							<option value="MECHANICAL">MECHANICAL</option>
							<option value="SOFTWARE">SOFTWARE</option>
							<option value="CIVIL">CIVIL</option>
							<option value="HARDWARE">HARDWARE</option>
						</select>
					<td><input type="text" class="form-control" size="10" name="com_descp" id="com_descp"></td>
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
		var com_name=$("#com_name").val();
		var com_email='<?php echo $session_data['com_email']?>';
		var com_pass='<?php echo $session_data['com_pass']?>';
		var com_phone=$("#com_phone").val();
		var com_loc=$("#com_loc").val();
		var com_website=$("#com_website").val();
		var com_no_exp=$("#com_no_exp").val();
		var com_pay_willing=$("#com_pay_willing").val();		
		var com_expertise=$("#com_expertise").val();
		var com_descp=$("#com_descp").val();
				
		if (com_name!="" && com_email!="" && com_pass!="" && com_phone!="" && com_loc!="" && com_website!="" && com_no_exp!="" && com_pay_willing!=""  && com_expertise!="" && com_descp!="") {
			$.post("<?php echo base_url('index.php/Company/Edit_Com');?>",{
				com_name:com_name,
				com_email:com_email,
				com_pass:com_pass,
				com_phone:com_phone,
				com_loc:com_loc,
				com_website:com_website,
				com_no_exp:com_no_exp,
				com_pay_willing:com_pay_willing,
				com_expertise:com_expertise,
				com_descp:com_descp,

				},function(data){
					alert("UPDATED SUCCESSFULLY!");
					window.location.href = "<?php echo base_url()?>index.php/Company/Profile";
				})
		}
		else{
			alert("ALL FIELDS ARE MANDATARY. \n KINDLY FILL AGAIN.");
			window.location.reload();
		}
	});
</script>