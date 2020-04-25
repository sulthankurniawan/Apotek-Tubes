<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link href="/style.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-light bg-success sticky-top">
		<div class="container-fluid">
			<a href="#" class="navbar-brand">
				<img src="/logo.png" alt="">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
                    <li class='nav-item'>
                        <input type="text" placeholder="cari barang" class='form-control' id="search">    
                    </li>
                    <li class="nav-item">
						<a href="/admin_registrasi.php" class="nav-link">Registrasi</a>
					</li>
					<li class="nav-item">
						<a href="/admin_akun.php" class="nav-link">Akun</a>
					</li>
					<li class="nav-item">
						<a href="/admin_barang.php" class="nav-link">Barang</a>
                    </li>
                    <li class="nav-item">
						<a href="/admin_permintaan.php" class="nav-link">Permintaan</a>
					</li>
					<li class="nav-item">
						<a href="/v_login.php" class="nav-link">Keluar</a>
					</li>	
				</ul>
			</div>
		</div>
	</nav>
</body>
</html>