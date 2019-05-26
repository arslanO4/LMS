	<!doctype html>
	<html lang="en">
	<title>
	O4 LMS - Login
	</title>
	<head>

			<!-- Required meta tags -->
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
			<link rel="stylesheet" href="../../CSS/style.css">
			<link rel="icon" href="/home/arslan/Desktop/LMS/Images/favicon.ico" type="image/x-icon">
			<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
			<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		</head>
		<body>
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-3">
					</div>
					<div class="col-md-6 form">
						<div class="topdesign"> </div>
						<form class="form-group form1" action="#" method='POST'>
							<div class="toplabel">
								<center><img class=logo src="../../Images/logo.png" height="135"></center>
								<center><h3>LOGIN
								</h3></center>
							</div>
							<div class="label mb-2">
								USERNAME<br>
							</div>
							<input class="form-control" type="text" name="name" autocomplete="off" required><br><br>
							<div class="label mb-2">PASSWORD<br>
							</div>
							<input class="form-control" type="password" name="password" autocomplete="off" required><br><br>
							<center>
							<button class="btn btn-outline-primary pl-4 pr-4 pt-2 pb-2" name="login" type="submit" >SIGN IN</button>
							<button type="button" class="btn btn-outline-success pl-4 pr-4 pt-2 pb-2" data-toggle="modal" data-target="#exampleModal">SIGN UP</button>
							</center>
						</form>
							<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" action="registration.php">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">SIGNUP</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<form id="signupform" action="../Backend/registration.php" method="POST">
									<div class="modal-body">
												<label for="First_Name" class="col-form-label"></label>FirstName<br>
												<input type="text" name="fname" id="First_Name" class="form-control" required><br><br>
												<label for="User_name" class="col-form-label"></label>UserName<br>
												<input type="text" name="uname" id="User_Name" class="form-control" required><br><br>
												<label for="Email" class="col-form-label"></label>Email<br>
												<input type="text" name="email" id="Email" class="form-control" required><br><br>
												<label for="Department" class="col-form-label"></label>Department<br>
												<input type="text" name="department" id="Department" class="form-control" required><br><br>
												Designation &nbsp;
												<select name="role">
													<option value="Student">Student</option>
													<option value="Teacher">Teacher</option>
												</select> <br><br>
												<label for="Password" class="col-form-label"></label>Password<br>
												<input type="password" name="password" id="Password" class="form-control" required>	
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button type="submit" class="btn btn-primary">Submit
									</div>
										</form>		
									</div>
								</div>
								</div>
								<br><hr>
							<center><a href="#">Forgot Password?</a></center><br><br>
									</form>
					</div>
					<div class="col-md-3">
					</div>
				</div>
			</div>
		</body>
		</html>





		