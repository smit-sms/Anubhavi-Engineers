<!DOCTYPE html>
<html>
<head>
	<title>ENGINEER REGISTER</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/material-kit.css">
	<script src="<?php echo base_url()?>assets/js/material-kit.js"></script>
</head>
<body>
	<div class="container" style="margin-top: 22px;">
      <div class="row">
        <div class="col-lg-8 col-md-5 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="post">
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">REGISTER ENGINEER HERE</h4>
              </div>
              <div class="card-body">
              	<div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">perm_identity</i>
                    </span>
                  </div>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Name"><br><br>
                </div>
              	<div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">mail</i>
                    </span>
                  </div>
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email"><br><br>
                </div>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input type="password" class="form-control" name="pass" id="pass" placeholder="Password">
                </div>
                <div class="input-group">
                	<div class="container-fluid">
                  	<div class="row">
					    <div class="col">
					      <input type="text" class="form-control" name="age" id="age" placeholder="Age">
					    </div>
					    <div class="col">
					    	<input type="text" class="form-control" name="no_exp" id="no_exp" placeholder="No. of years of experience">
					    </div>
				  	</div>
				  </div>
                </div>
                <div class="input-group">
                	<div class="container-fluid">
                  	<div class="row">
					    <div class="col">
					      <input type="text" class="form-control" name="pay_looking" id="pay_looking" placeholder="Pay looking for">
					    </div>
					    <div class="col">
					    	<input type="text" class="form-control" name="location" id="location" placeholder="location">
					    </div>
				  	</div>
				  </div>
                </div>
                <div class="input-group">
                	<div class="container">
						<select class="form-control selectpicker" data-style="btn btn-link" name="expertise" id="expertise">
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
                		<input type="text" class="form-control" size="50" name="descp" id="descp" placeholder="Please describe your engineering experience or share any other info you would like(Please be concise)">
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
		var name=$("#name").val();
		var email=$("#email").val();
		var pass=$("#pass").val();
		var age=$("#age").val();
		var no_exp=$("#no_exp").val();
		var pay_looking=$("#pay_looking").val();
		var location=$("#location").val();
		var expertise=$("#expertise").val();
		var descp=$("#descp").val();		
		
		if (name!="" && email!="" && pass!="" && age!="" && no_exp!="" && pay_looking!="" && location!="" && expertise!="" && descp!="") {
			$.post("<?php echo base_url('index.php/Register/InsertEngg');?>",{
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