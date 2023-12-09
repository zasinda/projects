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
                Edit pasien
            </div>
            <div class="card-body">

            <form action="<?php echo site_url('pasien/update/'.$pasien->id_pasien); ?>" method="POST">
                <input type="hidden" name="id" value="<?php echo isset($pasien) ? $pasien->id_pasien : ''; ?>">
                    <div class="mb-3 row">
                        <label for="id_dokter" class="col-sm-2 col-form-label">Dokter</label>
                    <div class="col-sm-10">
                    <select class="form-control" id="id_dokter" name="id_dokter">
                        <?php foreach ($dokter as $d) { ?>
                            <option value="<?php echo $d->id_dokter; ?>" <?php echo ($pasien->id_dokter == $d->id_dokter) ? 'selected' : ''; ?>><?php echo $d->nama_dokter; ?></option>
                        <?php } ?>
                    </select>
                    </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nim" class="col-sm-2 col-form-label">Nama pasien</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_pasien" name="nama_pasien" value="<?php echo $pasien->nama_pasien; ?>">
                        </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label for="nim" class="col-sm-2 col-form-label">Jenis Kelamin Pasien</label>
                        <div class="col-sm-10">
                        <select class="form-control" id="jk_pasien" name="jk_pasien" value="<?php echo $pasien->Jk_pasien; ?>">
                            <option value="Laki-laki" <?php echo ($pasien->gol_darah == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                            <option value="Perempuan" <?php echo ($pasien->Jk_pasien == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                        </select>
                        </div>
                    </div>
                
                    <div class="mb-3 row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat_pasien" name="alamat_pasien" value="<?php echo $pasien->alamat_pasien; ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="riwayat_penyakit" name="riwayat_penyakit" value="<?php echo $pasien->riwayat_penyakit; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nik_pasien" class="col-sm-2 col-form-label">nik pasien</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nik_pasien" name="nik_pasien" value="<?php echo $pasien->nik_pasien; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                    <label for="nim" class="col-sm-2 col-form-label">Jenis Kelamin Pasien</label>
                        <div class="col-sm-10">
                        <select class="form-control" id="gol_darah" name="gol_darah" value="<?php echo $pasien->gol_darah; ?>">
                            <option value="O" <?php echo ($pasien->gol_darah == 'O') ? 'selected' : ''; ?>>O</option>
                            <option value="A" <?php echo ($pasien->gol_darah == 'A') ? 'selected' : ''; ?>>A</option>
                            <option value="B" <?php echo ($pasien->gol_darah == 'B') ? 'selected' : ''; ?>>B</option>
                            <option value="AB" <?php echo ($pasien->gol_darah == 'AB') ? 'selected' : ''; ?>>AB</option>
                        </select>
                        </div>
                    </div>

                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                    </div>
                </form>
            </div>
        </div>