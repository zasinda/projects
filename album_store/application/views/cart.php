<div class="container-fluid">
    <h4>Cart</h4>
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>NO</th>
            <th>Product Name</th>
            <th>Total</th>
            <th>Price</th>
            <th>Sub-Total</th>
        </tr>

        <?php 
        $no=1;
        foreach ($this->cart->contents() as $items) : ?>

        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $items['name']?></td>
            <td><?php echo $items['qty']?></td>
            <td>Rp <?php echo number_format($items['price'], 0,',','.') ?></td>
            <td>Rp <?php echo number_format($items['subtotal'], 0,',','.')?></td>
        </tr>
        <?php endforeach; ?>

        <tr>
            <td colspan="4"></td>
            <td>Rp <?php echo number_format($this->cart->total(), 0,',','.') ?></td>
        </tr>
    </table>
    <div align="right">
        <a href="<?php echo base_url('store/delete_cart') ?>"><div class="btn btn-sm btn-danger" onclick="return confirm('Are you sure wanna delete this cart?')">Delete Cart</div></a>
        <a href="<?php echo base_url('store/checkout') ?>"><div class="btn btn-sm btn-warning">Checkout</div></a>
    </div>
</div>