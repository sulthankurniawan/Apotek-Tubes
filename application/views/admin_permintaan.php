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
    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">RS pemesan</th>
        <th scope="col">Barang yang dipesan</th>
        <th scope="col">Kuantitas</th>
        <th scope="col">Alamat</th>
        <th scope="col">Email RS</th>
        <th scope="col">AKSI</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($event as $evn) : ?>
            <tr>
                <td> <?= $evn['id_keranjang'] ?> </td>
                <td> <?= $evn['nama_rs'] ?> </td>
                <td>
                    <?php foreach ($event as  $evn) : 
                    <ol>
                        <li></li>
                    </ol>
                </td>
                <td> <?= $evn['password'] ?> </td>
                <td> <?= $evn['alamat_rs'] ?> </td>
                <td> <?= $evn['email_rs'] ?> </td>
                <td> <?= $evn['status'] ?> </td>
                <td>
                <button type='button' class='btn btn-success'>Kirim</button>
                <button type='button' class='btn btn-danger'>Tolak</button>
                </td>
            </tr>
        <?php endforeach; ?>


        <tr>
        <th scope="row">1</th>
        <td>1</td>
        <td>1</td>
        <td>Al-Islam</td>
        <td>
            <ol>
                <li>Ventilator</li>
                <li>Hazzard Suit</li>
                <li>Masker</li>
            </ol>
        </td>
        <td>
            <li>2</li>
            <li>10</li>
            <li>10000</li>
        </td>
        <td>Jalan Soekarno-Hatta</td>
        <td>alislam@gmail.com</td>
        <td>
            <button type='button' class='btn btn-success'>Kirim</button>
            <button type='button' class='btn btn-danger'>Tolak</button>
        </td>
        </tr>
    </tbody>
    </table>
</body>

</html>