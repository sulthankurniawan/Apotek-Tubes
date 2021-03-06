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
<div>
	<%- include('partials/nav', {active: "index"}); %>
</div>

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
			<img src="/application/assets/custom – 10.png" style="margin-center:auto;">
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

<!--- Cards -->
<div class="container-fluid padding">
    <div class="row padding">
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="/1.png" alt="">
                <div class="cad-body">
                    <h4 class="card-title">John Doe</h4>
                    <p class="card-text">John is an Internet enterpreneur with almost 20 years of experience</p>
                    <!-- <a href="#" class="btn btn-outline-secondary">see profile</a> -->
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="/2.png" alt="">
                <div class="cad-body">
                    <h4 class="card-title">Mary Jo</h4>
                    <p class="card-text">Mary Jo is a designer with almost 10 years of digital design experience</p>
                    <!-- <a href="#" class="btn btn-outline-secondary">see profile</a> -->
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="/1.png" alt="">
                <div class="cad-body">
                    <h4 class="card-title">Phil Ho</h4>
                    <p class="card-text">Phil is a developer with over 5 years of web development experience</p>
                    <!-- <a href="#" class="btn btn-outline-secondary">see profile</a> -->
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <img class="card-img-top" src="/2.png" alt="">
                <div class="cad-body">
                    <h4 class="card-title">Phil Ho</h4>
                    <p class="card-text">Phil is a developer with over 5 years of web development experience</p>
                    <!-- <a href="#" class="btn btn-outline-secondary">see profile</a> -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- include footer -->
<div>
	<%- include('partials/footer', {active: "index"}); %>
</div>
	
</body>
</html>
