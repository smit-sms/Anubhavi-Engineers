<!DOCTYPE html>
<html>
<head>
	<title>COMPANY REGISTER</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/material-kit.css">
	<script src="<?php echo base_url()?>assets/js/material-kit.js"></script>
</head>
<body>
	<div class="container" style="margin-top: 15px;">
      <div class="row">
        <div class="col-lg-8 col-md-5 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="post">
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">REGISTER COMPANY HERE</h4>
              </div>
              <div class="card-body">
              	<div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">perm_identity</i>
                    </span>
                  </div>
                  <input type="text" class="form-control" name="com_name" id="com_name" placeholder="Name">
                </div>
              	<div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input type="email" class="form-control" name="com_email" id="com_email" placeholder="Email">
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control" name="com_pass" id="com_pass" placeholder="Password">
                </div>
                <div class="input-group">
                	<div class="container-fluid">
                  	<div class="row">
					    <div class="col">
					      <input type="text" class="form-control" name="com_phone" id="com_phone" placeholder="Phone Number">
					    </div>
					    <div class="col">
					    	<input type="text" class="form-control" name="com_loc" id="com_loc" placeholder="Location of company">
					    </div>
				  	</div>
				  </div>
                </div>
                <div class="input-group">
                	<div class="container-fluid">
                  	<div class="row">
					    <div class="col">
					      <input type="text" class="form-control" name="com_website" id="com_website" placeholder="Company website link">
					    </div>
					    <div class="col">
					    	<input type="text" class="form-control" name="com_no_exp" id="com_no_exp" placeholder="No. of years of experience">
					    </div>
				  	</div>
				  </div>
                </div>
                <div class="input-group">
                	<div class="container">
                  		<input type="text" class="form-control" name="com_pay_willing" id="com_pay_willing" placeholder="Pay Willing to provide">
                  	</div>
                </div>
                <div class="input-group">
                	<div class="container">
						<select class="form-control selectpicker" data-style="btn btn-link" name="com_expertise" id="com_expertise">
							<option value="">SELECT AN AREA OF EXPERTISE</option>
							<option value="MECHANICAL">MECHANICAL</option>
							<option value="SOFTWARE">SOFTWARE</option>
							<option value="CIVIL">CIVIL</option>
							<option value="HARDWARE">HARDWARE</option>
						</select>
					</div>
                </div>
                <div class="input-group">
                	<div class="container">
                		<input type="text" class="form-control" size="50" name="descp" id="descp" placeholder="Description">
                	</div>
                </div>
                <div class="input-group" align="center">
                	<div class="container-fluid">
                		<input type="button" class="btn btn-primary" name="submit" id="submit" value="SUBMIT">
            		</div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

</body>
</html>
<script>
	$("#submit").on('click',function(){
		var com_name=$("#com_name").val();
		var com_email=$("#com_email").val();
		var com_pass=$("#com_pass").val();
		var com_phone=$("#com_phone").val();
		var com_loc=$("#com_loc").val();
		var com_website=$("#com_website").val();
		var com_no_exp=$("#com_no_exp").val();
		var com_pay_willing=$("#com_pay_willing").val();		
		var com_expertise=$("#com_expertise").val();
		var com_descp=$("#com_descp").val();
				
		if (com_name!="" && com_email!="" && com_pass!="" && com_phone!="" && com_loc!="" && com_website!="" && com_no_exp!="" && com_pay_willing!=""  && com_expertise!="" && com_descp!="") {
			$.post("<?php echo base_url('index.php/Register/InsertCom');?>",{
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
					alert("REGISTERED SUCCESSFULLY!");
					window.location.href = "<?php echo base_url()?>index.php/Login";
				})
		}
		else{
			alert("ALL FIELDS ARE MANDATARY. \n KINDLY FILL AGAIN.");
			window.location.reload();
		}
	});
</script>