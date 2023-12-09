<div class="conatiner=fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Form Tambah Produk</span></h2>
    </div>
    <div class="row px-xl-5">
    <div class="contact-form">
                <div id="success"></div>
                <form action="<?php echo base_url('index.php/produk/save');?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="idToko" value="<?php echo $idToko; ?>">
                <div class="control-group m-1">
                    <select class="form-control" name="kategori">
                        <?php foreach($kategori as $val):?>
                            <option value="<?php echo $val->idkat;?>"><?php echo $val->namaKat;?></option>
                        <?php endforeach;?>
                    </select>
                    <?php echo form_error('kategori', '<div class="text-danger">', '</div>'); ?>
                </div>
                <div class="control-group m-1">
                    <input type="text" name="namaProduk" class="form-control" id="name" placeholder="Nama Produk"  data-validation-required-message="please enter your product name" required>
                    <?php echo form_error('namaProduk', '<div class="text-danger">', '</div>'); ?>
                </div>
                <div class="control-group m-1">
                    <input type="file" name="gambar" class="form-control" id="gambar" placeholder="Gambar Toko"  data-validation-required-message="please enter your Product Picture" required>
                    <?php echo form_error('gambar', '<div class="text-danger">', '</div>'); ?>
                </div>
                <div class="control-group m-1">
                    <input type="text" name="hargaProduk" class="form-control" id="hargaProduk" placeholder="Harga Produk"  data-validation-required-message="please enter your product Price" required>
                    <?php echo form_error('hargaProduk', '<div class="text-danger">', '</div>'); ?>
                </div>
                <div class="control-group m-1">
                    <input type="text" name="jumlahProduk" class="form-control" id="jumlahProduk" placeholder="Jumlah Produk"  data-validation-required-message="please enter your product total" required>
                    <?php echo form_error('jumlahProduk', '<div class="text-danger">', '</div>'); ?>
                </div>
                <div class="control-group m-1">
                    <input type="text" name="beratProduk" class="form-control" id="beratProduk" placeholder="Berat Produk"  data-validation-required-message="please enter your product weight" required>
                    <?php echo form_error('beratProduk', '<div class="text-danger">', '</div>'); ?>
                </div>
                <div class="control-group m-1">
                    <textarea class="form-control" rows="3" id="deskripsi" name="deskripsi" placeholder="Deskripsi Produk" required data-validation-required-message="please enter your product description"></textarea>
                    <?php echo form_error('deskripsi', '<div class="text-danger">', '</div>'); ?>
                </div>
                <div>
                    <button class="btn btn-primary py-2 px-4" type="submit">Simpan</button>
                </div>
        </form>
 </div>