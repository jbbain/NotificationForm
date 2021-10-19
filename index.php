<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
		<meta name="robots" content="index, follow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		
		<script src="js/jquery-3.3.1.js"></script>
		<script src="js/notification.js"></script>
		<script src="js/bootstrap.min.js"></script>

		<title>Notification Form</title>
		
		
	</head>
	<body>			
		<div class="container">
			<div class="d-flex justify-content-center h-100">
				<div class="card">
					<div class="card-header">
						<h3>Notification Form</h3>
					</div>
					<div class="card-body">
						<form action="userInput.php" method="POST">
							<div class="body-grid">
								<div class="input-group">
									<div>
										<label >First Name
											<input type="text" class="form-control" name='firstName' placeholder="firstname">
										</label>
									</div>									
								</div>
								<div class="input-group">
									<div class="input-group-prepend">
										<label >Last Name
											<input type="text" class="form-control" name="lastName" placeholder="lastname">
										</label>
									</div>									
								</div>							
							
								<div class="input-group">
									<p class="preference">How would you prefer to be notified? </p>
									<div class="row align-items-center">									
										<label >
											<input type="checkbox" name="emailCheck">Email
											<input type="email" class="form-control" name="email" placeholder="email">
										</label>
									</div>
								</div>
								<div class="input-group ">
									<br>
									<div class="row align-items-center">									
										<label >
											<input type="checkbox" name="phoneCheck">Phone Number
											<input type="tel" class="form-control" name="phoneNumber" placeholder="phone number">
										</label>
									</div>								
								</div>
							</div>

							<div class="footer-grid">
								<div>
									<label for="supervisor">Supervisor
										<select name="supervisor" id="supervisors" placeholder="Select...">
											<option value="" disabled selected>Select...</option>									
										</select>
									</label>								
								</div>								
								<div>
									<input type="submit" value="Submit" class="btn float-right submit_btn">
								</div>
							</div>							
						</form>
					</div>
				</div>
			</div>
		</div>		
	</body>
	

</html>
