<html>
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

        <div>
            <center>
                <h3>Item yang anda cari</h3>
                <br>
            </center>
        </div>

        <!--- Cards -->
        <?php if (empty($event)) : ?>
            <div class="alert alert-danger" role="alert">
                Data tidak ditemukan
            </div>
        <?php endif; ?>

        <div class="container-fluid padding">
            <div class="row padding">
            <?php foreach ($event as $evn) : ?>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="/default.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title"><?= $evn['nama_barang'] ?></h4>
                            <h6 class="card-title"><?= $evn['kategori'] ?></h6>
                            <p class="card-text"><?= $evn['deskripsi'] ?></p>
                            <button class="btn btn-primary" type="button">Pesan</button>
                        </div>
                    </div>
                </div>
            <? endforeach; ?>
            </div>
        </div>
        

        <!-- jQuery Plugins -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/nouislider.min.js"></script>
        <script src="js/jquery.zoom.min.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>