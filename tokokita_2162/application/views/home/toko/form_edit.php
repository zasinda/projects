<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Form Edit Toko</span></h2>
    </div>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form">
                <div id="success"></div>
                <form class="form-horizontal" method="post" action="<?php echo site_url('toko/save_edit'); ?>" enctype="multipart/form-data">
                    <div class="control-group">
                        <input type="hidden" class="form-control" name="id" id="idToko" value="<?php echo $toko->idToko; ?>" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control" name="namaToko" id="name" value="<?php echo $toko->namaToko; ?>" placeholder="Nama Toko" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <?php echo form_error('namaToko', '<div class="text-danger">', '</div>'); ?>
                    <div class="control-group">
                        <input type="file" class="form-control" name="logo" id="email" placeholder="Logo"/>
                        <img src="<?php echo base_url('assets/logo_toko/' . $toko->logo); ?>" width="150" height="110">
                        <p class="help-block text-danger"></p>
                    </div>
                    <?php echo form_error('logo', '<div class="text-danger">', '</div>'); ?>
                    <div class="control-group">
                        <textarea class="form-control" rows="3" id="message" name="deskripsi" value="<?php echo $toko->deskripsi; ?>" placeholder="Deskripsi"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <?php echo form_error('deskripsi', '<div class="text-danger">', '</div>'); ?>
                    <div>
                        <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Save</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>