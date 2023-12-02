<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
<main class="container">
<?php
if (session()->getFlashData('success')) {
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
}
?>
    <div class="pagetitle">
        <h1>Shopping Cart</h1>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <span><br></span>
                        <!-- Table with stripped rows -->
                        <?php echo form_open('cart/edit') ?>
                        <div class="table-responsive">
                            <table class="table datatable" id="example">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Subtotal</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $i = 1;
                                    if (!empty($items)):
                                        foreach ($items as $index => $item):
                                            ?>
                                            <tr>
                                                <td>
                                                    <?= $i ?>
                                                </td>
                                                <td>
                                                    <?php echo $item['name'] ?>
                                                </td>
                                                <td><img src="<?php echo base_url() . "assets/img/products/" . $item['options']['image'] ?>"
                                                        width="100px"></td>
                                                <td>
                                                    <?php echo number_to_currency($item['price'], 'IDR') ?>
                                                </td>
                                                <td><input type="number" min="1" name="qty<?php echo $i++ ?>"
                                                        class="form-control" value="<?php echo $item['qty'] ?>"></td>
                                                <td>
                                                    <?php echo number_to_currency($item['subtotal'], 'IDR') ?>
                                                </td>
                                                <td>
                                                    <a href="<?php echo base_url('cart/delete/' . $item['rowid'] . '') ?>"
                                                        class="btn btn-danger"><i class="bi bi-trash"></i>&nbsp;Hapus</a>
                                                </td>
                                            </tr>
                                            <?php
                                        endforeach;
                                    endif;
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="alert alert-info">
                            <?php echo "Total = " . number_to_currency($total, 'IDR') ?>
                        </div>
                        <button type="submit" class="btn btn-primary">Perbarui Keranjang</button>
                        <a class="btn btn-warning" href="<?php echo base_url() ?>cart/clear">Kosongkan
                            Keranjang</a>
                        <a class="btn btn-success" href="<?php echo base_url() ?>cart/checkout">Selesai Belanja</a>
                        <?php form_close() ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<?= $this->endSection('content') ?>