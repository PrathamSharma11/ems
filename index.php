<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>EMS</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    .btn{
    	background-color: #4285F4;
    	border-radius: 5px;
    }
	.main{
		width: 500px;
		border: 15px solid white;
		padding: 50px;
		margin: 20px;
		background-color: white;
	}
	.f{
		text-decoration: none;
		text-indent: 80px;
	}
</style>
<body>
<!--------section top starts-------------->
<section style="background-color: #145A8C;padding-top: 50px;">
<div class="container-fluid" >
	<div class="row">
		<div class="col-md-12">
			<center>
				<h2 style="color:whitesmoke;">WELCOME</h2>
				<p style="color:whitesmoke;">Admin & Employees</p>
			</center>
		</div>
		
	</div>
</div>
	
</section>
<!--------section top ends-------------->



<!-----------------section bottom starts--------->

<section style="background-color: #17272B;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<center>
					    <div class="main">
					    	<h2 style="text-align: center;">LOGIN</h2>
						<form method="post" action="logininsert.php">
							<input type="text" name="email" placeholder="email"><br><br>
							<input type="password" name="password" placeholder="password"><br><br>
							<button class="btn btn-info" style="color:white;">Sign in</button>
							<hr>
							<p class="text-align:center;">or</p>
							<div class="row">
								<div class="col-md-4">
								<button class="btn"><i class="fab fa-google" style="color:white;">  Google</i></button>	
								</div>
								<div class="col-md-4">
								

								</div>
								<div class="col-md-4">
								<button class="btn"><i class="fab fa-github-square" style="color:white;">  Github</i></button>	
								</div>
							</div>
						</form>
					    </div>

						
					
				</center>
				
			</div>
		</div>
		 <div class="row">
		 	<div class="col-md-4">
		 		
		 	</div>
		 	<div class="col-md-4">
		 	<a href="" class="f" style="position: relative;right: 38px;">Forgot password?</a>
		 	<a href="" class="f" style="position:relative;left: 225px;">Remember me</a>
		 	</div>
		 	<div class="col-md-4">
		 		
		 	</div>
		 </div>
	</div>
	
</section>
<!--------------------section bottom ends------------>













</body>
</html>