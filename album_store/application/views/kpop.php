<div class="container-fluid">
    <div class="row text-center justify-content-center">

    <?php foreach ($kpop as $prdk) : ?>

<div class="card ml-5 mt-3" style="width: 18rem;">
  <img class="card-img-top" src="<?php echo base_url(). './uploads/'.$prdk->foto ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title text-dark font-weight-bold"><?php echo $prdk->nama ?></h5>
    <small><?php echo $prdk->detail ?></small><br>
    <small><?php echo $prdk->stok ?></small><br>
    <span class="text-muted text-decoration-line-through">Rp <?php echo number_format($prdk->harga, 0,',','.') ?></span><br>
    <?php echo anchor('store/add_to_cart/'.$prdk->kode,'<div class="btn btn-smbtn btn-outline-dark mt-auto">Add to cart</div>')?>
  </div>
</div>

        <?php endforeach; ?>
    </div>
</div>