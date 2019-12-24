<!DOCTYPE html>
<html>
<head>
	<title>HOMEPAGE</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/material-kit.css">
	<script src="<?php echo base_url()?>assets/js/material-kit.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-primary">
		<h2>अनुभवी Engineers </h2>
		<div class="container">
		<div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="<?php echo base_url()?>index.php/Login/AboutUs" class="nav-link"><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ABOUT US</h4></a>
                </li>
                <li class="nav-item">
                	<a class="nav-link" href="<?php echo base_url()?>index.php/Register/Register_engineer"><h4>PORTAL FOR RETIRED ENGINEERS</h4></a>
                </li>
                 <li class="nav-item">
                	<a class="nav-link" href="<?php echo base_url()?>index.php/Register/Register_company"><h4>PORTAL FOR SMALL BUSINESS LOOKING FOR ENGINEERING EXPERTISE</h4></a>
                </li>
            </ul>
        </div>
    </div>
	</nav>
	
	<h3 align="center">
		We are a non-profit social start-up, the mission of connecting retired engineers with companies requiring this expertise.
	</h3><br>
	<div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="post">
              <div class="card-header card-header-primary text-center">
              	<h5>ALREADY REGISTERED WITH US?</h5>
                <h4 class="card-title">PLEASE LOGIN</h4>
              </div>
              <div class="card-body">
                <div class="input-group">
                  <div class="container-fluid">
          					<select class="form-control selectpicker" data-style="btn btn-link" name="loginrole" id="loginrole">
          						<option value="">SELECT A ROLE</option>
          						<option value="admin">ADMIN</option>
          						<option value="engineer">ENGINEER</option>
          						<option value="company">COMPANY</option>
          					</select>
                  </div>
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
                <div class="input-group" align="center">
                  <div class="container-fluid">
                    <input type="button" class="btn btn-primary" name="submit" id="submit" value="LOGIN">
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
    var email=$("#email").val();
    var pass=$("#pass").val();
    var loginrole=$("#loginrole").val();

    if(email!="" && pass!=""){
    	if(loginrole=='admin'){
    		$.post("<?php echo base_url()?>index.php/Login/check_login",{
		        email:email,pass:pass
		    },function(e){
		    	if(e==1){
		    		$.post("<?php echo base_url()?>index.php/Login/CreateSession",{
		    			email:email
		    		},function(data){
		    			window.location.href = "<?php echo base_url()?>index.php/Admin";
		    		})
		    	}
		    })
    	}
    	else if(loginrole=='engineer'){
    		$.post("<?php echo base_url()?>index.php/Login/check_login_engg",{
		        email:email,pass:pass
		    },function(e){
		    	if(e==1){
		    		$.post("<?php echo base_url()?>index.php/Login/CreateSession_engg",{
		    			email:email,pass:pass
		    		},function(data){
		    			window.location.href = "<?php echo base_url()?>index.php/Engineer";
		    		})
		    	}
		    })
    	}
    	else if(loginrole=='company'){
    		$.post("<?php echo base_url()?>index.php/Login/check_login_com",{
		        email:email,pass:pass
		    },function(e){
		    	if(e==1){
		    		$.post("<?php echo base_url()?>index.php/Login/CreateSession_com",{
		    			email:email,pass:pass
		    		},function(data){
		    			window.location.href = "<?php echo base_url()?>index.php/Company";
		    		})
		    	}
		    })
    	}
    	else{
    		alert("PLEASE SELECT LOGIN ROLE.");
    		window.location.reload();
    	}

	}
	else{
		alert("ENTER ALL FIELDS.");
    	window.location.reload();
	}    
  });
</script>