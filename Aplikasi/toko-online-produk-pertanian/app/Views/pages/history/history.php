<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
<main class="container">

    <div class="pagetitle">
        <h1>Shopping History</h1>
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
                        <div class="table-responsive">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Total Price</th>
                                        <th scope="col">Postage</th>
                                        <th scope="col">Status</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
        <?php foreach ($transaction as $transaksiData): ?>
            <tr>
                <td>
                    <?= $transaksiData['username'] ?>
                </td>
                <td>
                    <?= "Rp." . number_format($transaksiData['total']) ?>
                </td>
                <td>
                    <?= "Rp." . number_format($transaksiData['fare']) ?>
                </td>
                <td>
                    <?= ($transaksiData['status'] == 0) ? 'Belum Selesai' : 'Selesai' ?>
                </td>
                <td>
                    <button type="button" class="btn btn-primary" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne<?= $transaksiData['id'] ?>">
                        <i class="bi bi-view-list"></i>&nbsp;View Details
                    </button>
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <div class="accordion accordion-collapse" id="accordionDetailTransaksi">
                        <div class="accordion-item">
                            <div id="collapseOne<?= $transaksiData['id'] ?>" class="accordion-collapse collapse"
                                aria-labelledby="headingOne" data-bs-parent="#accordionDetailTransaksi">
                                <div class="accordion-body">
                                    <p class="fs-5 fw-bold">Detail Transaksi</p>
                                    <?php foreach ($detailTransactionData as $detailData) { ?>
                                        <?php if ($detailData['transaction_id'] == $transaksiData['id']) { ?>
                                            <div class="row">
                                                <div class="col-4">ID Transaksi</div>
                                                <div class="col-1">:</div>
                                                <div class="col-3 fw-normal">
                                                    <?= $detailData['transaction_id'] ?>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <?php
                                                foreach ($detailProduct as $dataDetailProduk) {
                                                    if ($detailData['product_id'] == $dataDetailProduk['id']) {
                                                        ?>
                                                        <div class="col-4">Nama Barang</div>
                                                        <div class="col-1">:</div>
                                                        <div class="col-3 fw-normal">
                                                            <?php echo $dataDetailProduk['name']; ?>
                                                        </div>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </div>

                                            <div class="row " id="heading">
                                                <div class="col-4">Jumlah Barang</div>
                                                <div class="col-1">:</div>
                                                <div class="col-3 fw-normal">
                                                    <?= $detailData['quantity'] ?>
                                                </div>
                                            </div>
                                            <div class="row " id="heading">
                                                <div class="col-4">Subtotal [tanpa ongkir]</div>
                                                <div class="col-1">:</div>
                                                <div class="col-3 fw-normal">
                                                    <?= "Rp." . number_format($detailData['subtotal']) ?>
                                                </div>
                                            </div>
                                            <div class="row mb-5" id="heading">
                                                <div class="col-4">Tanggal Transaksi</div>
                                                <div class="col-1">:</div>
                                                <div class="col-4 fw-normal">
                                                    <?= $detailData['created_date'] ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>




            <!-- Modal Detail Transaksi -->
            <div class="modal fade" id="modal<?= $transaksiData['id'] ?>" tabindex="-1"
                aria-labelledby="modalTitle<?= $transaksiData['id'] ?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header" style="background-color:#006193">
                            <h5 class="modal-title fw-6 text-light" id="modalTitle<?= $transaksiData['id'] ?>">
                                Detail Transaksi</h5>
                        </div>
                        <div class="modal-body modal-lg">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </tbody>
                            </table>
                        </div>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
<?= $this->endSection('content') ?>