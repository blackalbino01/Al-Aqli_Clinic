<?php require'header.php'?>
<?php
	$email="";
	$password="";
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		require'config.php';
		$email=$_POST['email'];
		$password=$_POST['password'];

		$mysqli=$conn->prepare('SELECT * FROM specialist WHERE email = ? AND password = ?');

		$mysqli->bind_param('ss', $email,$password);
		$mysqli->execute();
		$result = $mysqli->get_result();

		if ($result->num_rows == 1) {

			$user = $result->fetch_assoc();

			session_start();
			$_SESSION['login'] = "1";
			$_SESSION['email'] = $email;
			header ("Location: dashboard.php");
		}
		else {
			echo"<p style=\"color:red; left:480px; position:relative; top:60px; font-weight:800;font-size:30px;\">Login failed</p>";
		}
	}
?>

<body>
	<div class="container-fluid" style="margin-left: 140px;">
		<h2>Al-Alqi Clinic</h2>
		<div class="col-md-6">
			<div class="panel panel-info">
				<div class="panel-heading" style="background: #00796B; color: white;">
					<div class="panel-title">
						Specialist Log In
					</div>
				</div>
				<div class="panel-body" style="padding-top: 30px;">
					<form id="loginform" class="form-horizontal" role="form" method="POST" action="">
						<div class="input-group" style="margin-bottom: 25px;">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="text" name="email" class="form-control" id="email" value="<?php if(!empty($_POST["email"])){echo $_POST["email"];} ?>" placeholder="email" style="background: white;" required>
						</div>
						<div class="input-group" style="margin-bottom: 25px;">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input type="password" name="password" class="form-control" id="email" value="<?php if(!empty($_POST["password"])){echo $_POST["password"];} ?>" placeholder="password" style="background: white;" required>
						</div>
						<div style="margin-top: 10px;" class="form-group">
							<div class="col-sm-12 controls">
								<input type="submit" name="login" value="login" class="btn btn-info">
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