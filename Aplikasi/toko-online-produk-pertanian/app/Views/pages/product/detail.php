<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
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
                                        <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp">
                                            <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="<?php echo base_url() ?>/assets/img/products/sayurbuah.jpg" />
                                        </a>
                                    </aside>
                                    <main class="col-lg-6">
                                        <div class="ps-lg-3">
                                            <h4 class="text-dark"> Vegetable <br/> </h4>

                                        <div class="mb-3">
                                            <span class="h5">$75.00</span>
                                        </div>

                                        <div class="mb-3">
                                            <span class="text-muted">Stock : </span>
                                            <span class="text-muted">100</span>
                                        </div>

                                        <p> Modern look and quality demo item is a streetwear-inspired collection that continues to break away from the conventions of mainstream fashion. Made in Italy, these black and brown clothing low-top shirts formen. </p>

                                        <div class="row mb-4">
                                        </div>

                                        <a href="#" class="btn btn-primary shadow-0"> <i class="me-1 fa fa-shopping-basket"></i> Add to cart </a>
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