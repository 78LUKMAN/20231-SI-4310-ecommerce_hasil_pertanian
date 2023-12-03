<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
<main class="container">

    <div class="pagetitle">
        <h1>
            <?= $title ?>
        </h1>
    </div>

    <section class="section">
        <?php if ($products == null) {
            ?>
            <div class="fs-4 fw-bold mb-5 d-flex align-items-center justify-content-center" style="height:50vh">
                <?= $null?>
            </div>
        <?php } ?>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-6 g-4">
            <?php foreach ($products as $product): ?>
                <div class="col mb-5">
                    <div class="card h-100">
                        <a href="<?= base_url('product/detail/') . $product['id'] ?>">
                            <img src="<?= base_url('assets/img/products/') . $product['image'] ?>" class="card-img-top"
                                alt="<?= ucfirst(strtolower($product['name'])) ?>" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $product['name'] ?>
                            </h5>
                            <p class="card-text">
                                <span>Deskripsi :</span><br>
                                <?= character_limiter($product['description'], 15) ?><br>
                            </p>
                            <h4 class="mt-3 fw-bold fs-6">
                                <?= number_to_currency($product['price'], 'IDR') ?>
                            </h4>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </section>

</main><!-- End #main -->
<?= $this->endSection('content') ?>