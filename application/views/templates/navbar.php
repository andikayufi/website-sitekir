<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="assets/libraries/bootstrap/css/bootstrap.css" />
	<link href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800|Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet" />
	<link rel="stylesheet" href="assets/css/main.css" />

	<title><?php echo $judul; ?></title>
</head>

<body>
	<!-- Navbar -->
	<div class="container">
		<div class="row navbar navbar-expand-lg navbar-light bg-white">
			<a href="#" class="navbar-brand">
				<img src="assets/images/logo_sitekir.png" alt="Logo SITEKIR">
			</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navb">
				<ul class="navbar-nav ml-auto mr-3">
					<li class="nav-item mx-md-2">
						<a href="#" class="nav-link active">Home</a>
					</li>
					<li class="nav-item mx-md-2">
						<a href="#" class="nav-link">Paket Travel</a>
					</li>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">Service</a>
						<div class="dropdown-menu">
							<a href="#" class="dropdown-item">Link</a>
							<a href="#" class="dropdown-item">Link</a>
							<a href="#" class="dropdown-item">Link</a>
						</div>
					</li>
					<li class="nav-item mx-md-2">
						<a href="#" class="nav-link">Testimonial</a>
					</li>
				</ul>

				<!-- Mobile Button -->
				<form class="form-inline d-sm-block d-md-none">
					<button class="btn btn-login my-2 my-sm-0">
						Masuk
					</button>
				</form>

				<!-- Dekstop Button -->
				<form class="form-inline my-2 my-lg-0 d-none d-md-block">
					<button class="btn btn-login btn-navbar-right my-2 my-sm-0 px-4">
						Masuk
					</button>
				</form>
			</div>
		</div>
	</div>