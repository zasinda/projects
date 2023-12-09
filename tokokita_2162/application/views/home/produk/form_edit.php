<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Form Edit Produk</span></h2>
    </div>
    <div class="row px-xl-5">
        <div class="contact-form">
            <div id="success"></div>
            <form action="<?php echo site_url('produk/update/'.$produk->idProduk); ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="idToko" value="<?php echo $produk->idToko; ?>">
                <div class="control-group m-1">
                    <select class="form-control" name="idKat">
                        <?php foreach($kategori as $val):?>
                            <option value="<?php echo $val->idkat;?>" <?php if($val->idkat == $produk->idKat) echo 'selected'; ?>><?php echo $val->namaKat;?></option>
                        <?php endforeach;?>
                    </select>
                </div>
                <div class="control-group m-1">
                    <input type="text" name="namaProduk" class="form-control" id="name" placeholder="Nama Produk" value="<?php echo $produk->namaProduk; ?>" required>
                </div>
                <div class="control-group m-1">
                    <input type="file" class="form-control-file" id="gambar" name="gambar">
                    <?php if(!empty($produk->foto)): ?>
                        <img src="<?php echo base_url('assets/foto_produk/' . $produk->foto); ?>" width="150" height="110">
                    <?php endif; ?>
                </div>
                <div class="control-group m-1">
                    <input type="text" name="harga" class="form-control" id="hargaProduk" placeholder="Harga Produk" value="<?php echo $produk->harga; ?>" required>
                </div>
                <div class="control-group m-1">
                    <input type="text" name="stok" class="form-control" id="jumlahProduk" placeholder="Jumlah Produk" value="<?php echo $produk->stok; ?>" required>
                </div>
                <div class="control-group m-1">
                    <input type="text" name="berat" class="form-control" id="beratProduk" placeholder="Berat Produk" value="<?php echo $produk->berat; ?>" required>
                </div>
                <div class="control-group m-1">
                    <textarea class="form-control" rows="3" id="deskripsiProduk" name="deskripsiProduk" placeholder="Deskripsi Produk" required><?php echo $produk->deskripsiProduk; ?></textarea>
                </div>
                <div>
                    <button class="btn btn-primary py-2 px-4" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>