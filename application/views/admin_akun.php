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
    
    <?php include('admin_nav.php'); ?>

    <?php if (empty($event)) : ?>
        <div class="alert alert-danger" role="alert">
            Data tidak ditemukan
        </div>
    <?php endif; ?>
    <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Id</th>
            <th scope="col">Nama RS / Puskesmas</th>
            <th scope="col">Nama admin setempat</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Alamat</th>
            <th scope="col">Email RS</th>
            <th scope="col">AKSI</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($event as $evn) : ?>
            <tr>
                <td> <?= $evn['id_akun'] ?> </td>
                <td> <?= $evn['nama_rs'] ?> </td>
                <td> <?= $evn['username'] ?> </td>
                <td> <?= $evn['password'] ?> </td>
                <td> <?= $evn['alamat_rs'] ?> </td>
                <td> <?= $evn['email_rs'] ?> </td>
                <td> <?= $evn['status'] ?> </td>
                <td>
                <button type='button' class='btn btn-success'>Ubah</button>
                <button type='button' class='btn btn-danger'>Hapus</button>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>