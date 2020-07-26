<?php
	$fullname="";
	$email="";
	$phash="";
	$specialization="";
	$state="";
	$country="";
	$mobile="";
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		require'config.php';
		if(empty($fullname=$_POST['fullname'] && $specialization=$_POST['specialization'] && $email=$_POST['email'] && $phash=$_POST['password'])){
			echo "<p style=\"color:red;\">couldnt submit an empty form...</p>";
			header("Location:specialist.php");
			exit();
		}
		else{
			$fullname=$_POST['fullname'];
			$email=$_POST['email'];
			$phash=$_POST['password'];
			$specialization=$_POST['specialization'];
			$state=$_POST['state'];
			$country=$_POST['country'];
			$mobile=$_POST['mobile'];
			
			

			$mysqli= $conn->prepare("INSERT INTO specialist (fullname,email,password,specialization,state,country,mobile) VALUES (?, ?, ?,?,?,?, ?)");
			$mysqli->bind_param('ssssssss', $fullname, $email, $phash,$specialization,$state,$country,$mobile);
			$mysqli->execute();

			

			header("Location:login.php");
		}
	}
	
?>
<?php require'header.php'?>
<body>
	<div class="container-fluid" style="margin-left: 140px;">
		<h2>Al-Alqi Clinic</h2>
		<div class="col-md-6">
			<div class="panel panel-info">
				<div class="panel-heading" style="background: #00796B; color: white;">
					<div class="panel-title">
						Specialist Register
					</div>
				</div>
				<div class="panel-body" style="padding-top: 30px;">
					<form id="loginform" class="form-horizontal" role="form" method="POST" action="" enctype="multipart/form-data">
						<div class="input-group" style="margin-bottom: 25px;">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="text" name="fullname" class="form-control" id="fullname"placeholder="Full Name" style="background: white;" required>
						</div>
						<div class="input-group" style="margin-bottom: 25px;">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="text" name="email" class="form-control" id="email"placeholder="Email" style="background: white;" required>
						</div>
						<div class="input-group" style="margin-bottom: 25px;">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="text" name="specialization" class="form-control" id="specialization"placeholder="Specialization" style="background: white;" required>
						</div>
						<div class="input-group" style="margin-bottom: 25px;">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="text" name="state" class="form-control" id="state"placeholder="State" style="background: white;" required>
						</div>
						<div class="input-group" style="margin-bottom: 25px;">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="text" name="country" class="form-control" id="country"placeholder="Country" style="background: white;" required>
						</div>
						<div class="input-group" style="margin-bottom: 25px;">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="text" name="mobile" class="form-control" id="mobile" placeholder="Mobile" style="background: white;" required>
						</div>
						<div class="input-group" style="margin-bottom: 25px;">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="password" name="password" class="form-control" id="password"placeholder="Password" style="background: white;" required>
						</div>
						<div style="margin-top: 10px;" class="form-group">
							<div class="col-sm-12 controls">
								<input type="submit" name="Register" value="Register" class="btn btn-info">
							</div>
						</div>
					</form>	
				</div>
			</div>
		</div>
		
	</div>
</body>
<?php require'footer.php'?>
<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>







