<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  
  
</head>
<body  >
<body background="Quiz-bg.jpg">

	<div class="container py-5 ">
		<h2 class="text-center py-5" style="color: Tomato">Welcome To QuizWorld User </h2>
		<div class="row rounded ">
			<div class="col-lg-6 bg-danger ">
				<h2 class="text-center p-3"> User Login form</h2>
					<form action="validation.php" method="post">
						<div class="form-group">
							<label>username</label>
							<input type="text" name="user" class="form-control">
						</div>

						<div class="form-group">
							<label>password</label>
							<input type="password" name="password" class="form-control">
						</div>

						<button type="submit" class="btn btn-light mb-5 " >Login</button>
					</form>
			</div>
			
			<div class="col-lg-6 bg-secondary ">
				<h2 class="text-center p-3">User signin form</h2>
					<form action="registration.php" method="post">
						<div class="form-group">
							<label>username</label>
							<input type="text" name="user" class="form-control">
						</div>

						<div class="form-group">
							<label>password</label>
							<input type="password" name="password" class="form-control">
						</div>

						<button type="submit" class="btn btn-light mb-5  ">sign</button>
					</form>
			</div>
		
		</div>
	</div>






<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>