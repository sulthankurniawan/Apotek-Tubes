<!doctype html>
<html class="no-js" lang="en"></html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Medistock.go - Registrasi</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    </head>

    <body class="bg-primary">

        <?php $this->load->view('admin_nav.php') ?>

        <center>
            <div>
                <?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>
            </div>

            <div class="col-lg-6">
                <div class="card" style="margin-top:100px">
                    <div class="card-header">Tambah Barang</div>
                    <div class="card-body card-block">
                        <form action="" method="post" class="" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $barang->id_barang?>" />

                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" id="nama_barang" name="nama_barang" class="form-control <?php echo form_error('nama_barang') ? 'is-invalid':'' ?>" placeholder="nama barang" >
                                </div>
                                <div class="invalid-feedback">
									<?php echo form_error('nama_barang') ?>
								</div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" id="kategori" name="kategori" class="form-control <?php echo form_error('kategori') ? 'is-invalid':'' ?>" placeholder="kategori">
                                </div>
                                <div class="invalid-feedback">
									<?php echo form_error('kategori') ?>
								</div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="file" id="gambar" name="gambar" class="form-control <?php echo form_error('gambar') ? 'is-invalid':'' ?>" placeholder="gambar">
                                </div>
                                <div class="invalid-feedback">
									<?php echo form_error('gambar') ?>
								</div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" id="deskripsi" name="deskripsi" class="form-control <?php echo form_error('deskripsi') ? 'is-invalid':'' ?>" placeholder="deskripsi">
                                </div>
                                <div class="invalid-feedback">
									<?php echo form_error('deskripsi') ?>
								</div>
                            </div>
                            <div class="form-actions form-group">
                                <input class="btn btn-primary btn-sm" type="submit" name="btn" value="Save" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </center>
        
    </body>
</html>