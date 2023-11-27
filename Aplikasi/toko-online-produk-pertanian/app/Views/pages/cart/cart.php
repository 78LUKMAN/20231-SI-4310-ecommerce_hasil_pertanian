<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
<main class="container">

    <div class="pagetitle">
        <h1>Shopping Cart</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <span><br></span>
                        <!-- Table with stripped rows -->
                        <?php form_open() ?>
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
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Brandon Jacob</td>
                                        <td><img src="<?php echo base_url() ?>/assets/img/products/sayurbuah.jpg"
                                                style="width:100px" alt=""></td>
                                        <td>Rp. 30.000,00</td>
                                        <td><input type="number" value="4"
                                                style="width:50px; text-align:center; border:unset;"></td>
                                        <td>Rp. 120.000,00</td>
                                        <td>
                                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Brandon Jacob</td>
                                        <td><img src="<?php echo base_url() ?>/assets/img/products/sayurbuah.jpg"
                                                style="width:100px" alt=""></td>
                                        <td>Rp. 30.000,00</td>
                                        <td><input type="number" value="4"
                                                style="width:50px; text-align:center; border:unset;"></td>
                                        <td>Rp. 120.000,00</td>
                                        <td>
                                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Brandon Jacob</td>
                                        <td><img src="<?php echo base_url() ?>/assets/img/products/sayurbuah.jpg"
                                                style="width:100px" alt=""></td>
                                        <td>Rp. 30.000,00</td>
                                        <td><input type="number" value="4"
                                                style="width:50px; text-align:center; border:unset;"></td>
                                        <td>Rp. 120.000,00</td>
                                        <td>
                                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Brandon indra</td>
                                        <td><img src="<?php echo base_url() ?>/assets/img/products/sayurbuah.jpg"
                                                style="width:100px" alt=""></td>
                                        <td>Rp. 30.000,00</td>
                                        <td><input type="number" value="4"
                                                style="width:50px; text-align:center; border:unset;"></td>
                                        <td>Rp. 120.000,00</td>
                                        <td>
                                            <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <button type="submit" class="btn btn-primary">Perbarui Keranjang</button>
                        <a class="btn btn-warning" href="<?php echo base_url() ?>keranjang/clear">Kosongkan
                            Keranjang</a>
                        <a class="btn btn-success" href="<?php echo base_url() ?>checkout">Selesai Belanja</a>
                        <?php form_close()?>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<?= $this->endSection('content') ?>