<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 800px;
        }

        .card {
            margin-top: 10px;
        }
    </style>
    
</head>
<body>
    <div class="mx-auto">
        <!-- untuk memasukkan data -->
        <div class="card">
            <div class="card-header">
                Edit Obat
            </div>
            <div class="card-body">
               
            <form action="<?php echo site_url('obat/edit/'.$obat->id_obat);?>" method="POST">
                <input type="hidden" name="id" value="<?php echo isset($obat) ? $obat->id_obat : ''; ?>">
                    <div class="mb-3 row">
                        <label for="nim" class="col-sm-2 col-form-label">Nama Obat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Nama_obat" name="Nama_obat" value="<?php echo isset($obat) ? $obat->Nama_obat : ''; ?>">
                        </div>
                    </div>
                    
                
                    <div class="mb-3 row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="deskripsi" name="Deskripsi_obat" value="<?php echo isset($obat) ? $obat->Deskripsi_obat : ''; ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Harga_obat" name="Harga_obat" value="<?php echo isset($obat) ? $obat->Harga_obat : ''; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="stok" name="Stok" value="<?php echo isset($obat) ? $obat->Stok : ''; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="stok" class="col-sm-2 col-form-label">Manufaktur</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="Manufaktur" name="Manufaktur" value="<?php echo isset($obat) ? $obat->Manufaktur : ''; ?>">
                        </div>
                    </div>

                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>