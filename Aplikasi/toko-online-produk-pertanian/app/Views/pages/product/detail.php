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
    } elseif (session()->getFlashData('error')) {
        ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= session()->getFlashData('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    } ?>

    <div class="pagetitle">
        <h1>Product Detail</h1>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- content -->
                        <div class="py-4">
                            <div class="container">
                                <div class="row gx-5">
                                    <aside class="col-lg-6 d-flex justify-content-center">
                                        <img class="rounded-4 w-75 fit"
                                            style="border-radius: 5px; max-width:400px; min-width:200px"
                                            src="<?= base_url() . "assets/img/products/" . $product['image'] ?>" />
                                    </aside>
                                    <main class="col-lg-6">
                                        <div class="ps-lg-3 mt-5 mt-lg-0">
                                            <h4 class="text-dark" style="text-transform: capitalize;">
                                                <?= $product['name'] ?><br />
                                            </h4>

                                            <div class="mb-3">
                                                <span class="h5">
                                                    <?= "Rp." . number_format($product['disprice']) ?>
                                                </span>
                                            </div>

                                            <div class="mb-3">
                                                <?php if ($product['stock'] == 0) { ?>
                                                    <span class="text-danger">Stok : </span>
                                                    <span class="text-danger">
                                                        <?= $product['stock'] ?>
                                                    </span>
                                                <?php } else { ?>
                                                    <span class="text-muted">Stok : </span>
                                                    <span class="text-muted">
                                                        <?= $product['stock'] ?>
                                                    </span>
                                                <?php } ?>
                                                <br>
                                                <span class="text-muted">Terjual : </span>
                                                <span class="text-muted">
                                                    <?= $product['sold'] ?>
                                                </span>
                                            </div>

                                            <div class="mb-3">
                                                <span class="text-muted">
                                                    Deskripsi :
                                                </span>
                                                <br>
                                                <span>
                                                    <?= $product['description'] ?>
                                                </span>
                                            </div>
                                            <form action="<?= base_url('cart/add') ?>" method="post">
                                                <input type="hidden" name="product_id" value="<?= $product['id'] ?>">
                                                <input type="hidden" name="disprice"
                                                    value="<?= $product['disprice'] ?>">
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