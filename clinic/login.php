<?php require'header.php'?>

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
					<?php if($loginMessage != ''){?>
						<div class="alert alert-danger col-sm-12">
							<?php echo $loginMessage; ?>
						</div>
					<?php } ?>
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