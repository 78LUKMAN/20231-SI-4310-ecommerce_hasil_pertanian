<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
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
<main class="container">

    <div class="pagetitle">
        <h1>Product Detail</h1>
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
                        <!-- content -->
                        <div class="py-4">
                            <div class="container">
                                <div class="row gx-5">
                                    <aside class="col-lg-6">
                                        <img style="max-width: 100%; max-height: 100vh; margin: auto;"
                                            class="rounded-4 fit"
                                            src="<?= base_url() . "assets/img/products/" . $product['image'] ?>" />
                                    </aside>
                                    <main class="col-lg-6">
                                        <div class="ps-lg-3">
                                            <h4 class="text-dark">
                                                <?= $product['name'] ?><br />
                                            </h4>

                                            <div class="mb-3">
                                                <span class="h5">
                                                    <?= "Rp." . number_format($product['price']) ?>
                                                </span>
                                            </div>

                                            <div class="mb-3">
                                                <span class="text-muted">Stock : </span>
                                                <span class="text-muted">
                                                    <?= $product['stock'] ?>
                                                </span>
                                            </div>

                                            <p>
                                                <?= $product['description'] ?>
                                            </p>
                                            <form action="<?= base_url('cart/add') ?>" method="post">
                                                <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                                                <?php
                                                echo form_hidden('id', $product['id']);
                                                echo form_hidden('name', $product['name']);
                                                echo form_hidden('price', $product['price']);
                                                echo form_hidden('image', $product['image']);
                                                ?>
                                                <button type="submit" class="btn btn-primary shadow-0 mt-3">
                                                    Add to cart
                                                </button>
                                            </form>
                                        </div>
                                    </main>
                                </div>
                            </div>
                        </div>
                        <!-- content end -->
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->
<?= $this->endSection('content') ?>