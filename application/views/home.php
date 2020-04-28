<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Medistock.go</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="style.css" rel="stylesheet">
</head>

<body>	

<!-- include navbar -->
<?php include('nav.php'); ?>


<!--- Image Slider -->
<center>
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>
		<li data-target="#slides" data-slide-to="2"></li>
		<li data-target="#slides" data-slide-to="3"></li>
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="/application/assets/custom – 10.png">
			<!-- <div class="carousel-caption">
				<br><br><br><br><br><br><br><br><br><br>
				<button type="button" class="btn btn-outline-light btn-lg">View demo</button>
				<button type="button" class="btn btn-primary btn-lg">Get started</button>
			</div> -->
		</div>
		<div class="carousel-item">
			<img src="/application/assets/custom – 11.png" alt="">
		</div>
		<div class="carousel-item">
			<img src="/application/assets/custom – 12.png" alt="">
		</div>
		<div class="carousel-item">
			<img src="/application/assets/custom – 13.png" alt="">
		</div>
	</div>
</div>
</center>

<!--- Jumbotron -->
<div class="container-fluid">
	<div class="row jumbotron">	
		<div clas="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
			<p class="lead">Pada masa pandemi ini pemerintah menyediakan fasilitas penyediaan perangkat medis untuk Rumahsakit dan Puskesmas</p>
            <ul>
                <li><a href="">Peralatan</a></li>
                <li><a href="">Perlengkapat</a></li>
                <li><a href="">Obat-obatan</a></li>
                <li><a href="">Personel</a></li>
            </ul>
		</div>
	</div>
</div>
	
</body>
</html>
