<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="alert alert-primary">
                <?php 
                $grand_total = 0;
                if ($cart = $this->cart->contents()){
                    foreach ($cart as $item){
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "Your total : Rp ".number_format($grand_total,0,',','.');
                 ?>
            </div><br> <br>
            <h3>Enter your shipping and payment address</h3>

            <form method="post" action="<?php echo base_url() ?>store/proses_pesanan">

            <div class="form-group">
                <label>Your full name</label>
                <input type="text" name="nama" placeholder="Your full name" class="form-control">
            </div>

            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" placeholder="Address" class="form-control">
            </div>

            <div class="form-group">
                <label>Your phone number</label>
                <input type="text" name="notelp" placeholder="Your phone number" class="form-control">
            </div>

            <div class="form-group">
                <label>Delivery</label>
                <select class="form-control">
                    <option>SiCepat</option>
                    <option>JNE</option>
                    <option>JnT</option>
                    <option>Pos Indonesia</option>
                    <option>Ninja Express</option>
                </select>
            </div>

            <div class="form-group">
                <label>Bank</label>
                <select class="form-control">
                    <option>BRI - XXXXXXXX</option>
                    <option>BNI - XXXXXXXX</option>
                    <option>BCA - XXXXXXXX</option>
                    <option>Muamalat - XXXXXXXX</option>
                    <option>Mandiri - XXXXXXXX</option>
                </select>
            </div>

            <button type="submit" class="btn btn-warning">ORDER</button>
            </form>
            <?php
                } else{
                    echo "Your shopping cart is empty";
                }?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>