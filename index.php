<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign Up</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<style>
#grad1 {
/* Created with https://www.css-gradient.com */
background: #FF2E53;
background: -webkit-linear-gradient(top left, #FF2E53, #010101);
background: -moz-linear-gradient(top left, #FF2E53, #010101);
background: linear-gradient(to bottom right, #FF2E53, #010101);
}
</style>
<body>
<div id="grad1">
	<p style="background-image: url('login.jpg');">
    <div class="d-flex justify-content-center align-items-center vh-100">
    	
    	<form class="shadow-lg w-450 p-3" 
    	      action="php/signup.php" 
    	      method="post">

    		<h4 class="text-center fw-bold text-white display-4  fs-1">Create Account</h4><br>
    		<?php if(isset($_GET['error'])){ ?>
    		<div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
			</div>
		    <?php } ?>

		    <?php if(isset($_GET['success'])){ ?>
    		<div class="alert alert-success" role="alert">
			  <?php echo $_GET['success']; ?>
			</div>
		    <?php } ?>
		  <div class="mb-3">
		    <label class="text-white form-label">Full Name</label>
		    <input type="text" 
		           class="form-control"
		           name="fname"
		           value="<?php echo (isset($_GET['fname']))?$_GET['fname']:"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class=" text-white form-label">User name</label>
		    <input type="text" 
		           class="form-control"
		           name="uname"
		           value="<?php echo (isset($_GET['uname']))?$_GET['uname']:"" ?>">
		  </div>

		  <div class="mb-3">
		    <label class="text-white form-label">Password</label>
		    <input type="password" 
		           class="form-control"
		           name="pass">
		  </div>
		  
		  <button type="submit" class="btn btn-danger ">Sign Up</button>
		  <a href="login.php" class="btn btn-danger ">Login</a>
		</form>
    </div>
    </div>
</body>
</html>