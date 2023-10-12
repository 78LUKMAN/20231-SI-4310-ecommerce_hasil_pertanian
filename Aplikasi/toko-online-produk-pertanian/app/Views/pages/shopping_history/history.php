<?= $this->extend('layout/components/dashboard_activity/dashboard_layout') ?>

<?= $this->section('activity') ?>
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
                                    <tr>
                                        <td>
                                            <span>Joko Susilo</span>
                                        </td>
                                        <td>
                                            <span>Rp. 23.000,00</span>
                                        </td>
                                        <td>
                                            <span>Rp. 10.000,00</span>
                                        </td>
                                        <td>
                                            <span>Selesai</span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne-1">
                                                <i class="bi bi-view-list"></i>&nbsp;View Details
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <div class="accordion accordion-collapse" id="accordionDetailTransaksi">
                                                <div class="accordion-item">
                                                    <div id="collapseOne-1" class="accordion-collapse collapse"
                                                        aria-labelledby="headingOne"
                                                        data-bs-parent="#accordionDetailTransaksi">
                                                        <div class="accordion-body">
                                                            <p class="fs-5 fw-bold">Detail Transaksi</p>
                                                            <div class="row">
                                                                <div class="col-4">ID Transaksi</div>
                                                                <div class="col-1">:</div>
                                                                <div class="col-3 fw-normal">
                                                                    <span>110291</span>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-4">Nama Barang</div>
                                                                <div class="col-1">:</div>
                                                                <div class="col-3 fw-normal">
                                                                    <span>Barang1</span>
                                                                </div>
                                                            </div>

                                                            <div class="row " id="heading">
                                                                <div class="col-4">Jumlah Barang</div>
                                                                <div class="col-1">:</div>
                                                                <div class="col-3 fw-normal">
                                                                    <span>4</span>
                                                                </div>
                                                            </div>
                                                            <div class="row " id="heading">
                                                                <div class="col-4">Subtotal [tanpa ongkir]</div>
                                                                <div class="col-1">:</div>
                                                                <div class="col-3 fw-normal">
                                                                    <span>Rp. 23.000,00</span>
                                                                </div>
                                                            </div>
                                                            <div class="row " id="heading">
                                                                <div class="col-4">Tanggal Transaksi</div>
                                                                <div class="col-1">:</div>
                                                                <div class="col-4 fw-normal">
                                                                    <span> 05-10-2023</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>Ahmad</span>
                                        </td>
                                        <td>
                                            <span>Rp. 83.000,00</span>
                                        </td>
                                        <td>
                                            <span>Rp. 30.000,00</span>
                                        </td>
                                        <td>
                                            <span>Selesai</span>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne-2">
                                                <i class="bi bi-view-list"></i>&nbsp;View Details
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <div class="accordion accordion-collapse" id="accordionDetailTransaksi">
                                                <div class="accordion-item">
                                                    <div id="collapseOne-2" class="accordion-collapse collapse"
                                                        aria-labelledby="headingOne"
                                                        data-bs-parent="#accordionDetailTransaksi">
                                                        <div class="accordion-body">
                                                            <p class="fs-5 fw-bold">Detail Transaksi</p>
                                                            <div class="row">
                                                                <div class="col-4">ID Transaksi</div>
                                                                <div class="col-1">:</div>
                                                                <div class="col-3 fw-normal">
                                                                    <span>9182391</span>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-4">Nama Barang</div>
                                                                <div class="col-1">:</div>
                                                                <div class="col-3 fw-normal">
                                                                    <span>Barang2</span>
                                                                </div>
                                                            </div>

                                                            <div class="row " id="heading">
                                                                <div class="col-4">Jumlah Barang</div>
                                                                <div class="col-1">:</div>
                                                                <div class="col-3 fw-normal">
                                                                    <span>5</span>
                                                                </div>
                                                            </div>
                                                            <div class="row " id="heading">
                                                                <div class="col-4">Subtotal [tanpa ongkir]</div>
                                                                <div class="col-1">:</div>
                                                                <div class="col-3 fw-normal">
                                                                    <span>Rp. 73.000,00</span>
                                                                </div>
                                                            </div>
                                                            <div class="row " id="heading">
                                                                <div class="col-4">Tanggal Transaksi</div>
                                                                <div class="col-1">:</div>
                                                                <div class="col-4 fw-normal">
                                                                    <span> 05-10-2023</span>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-4">ID Transaksi</div>
                                                                <div class="col-1">:</div>
                                                                <div class="col-3 fw-normal">
                                                                    <span>1232325</span>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-4">Nama Barang</div>
                                                                <div class="col-1">:</div>
                                                                <div class="col-3 fw-normal">
                                                                    <span>Barang3</span>
                                                                </div>
                                                            </div>

                                                            <div class="row " id="heading">
                                                                <div class="col-4">Jumlah Barang</div>
                                                                <div class="col-1">:</div>
                                                                <div class="col-3 fw-normal">
                                                                    <span>51</span>
                                                                </div>
                                                            </div>
                                                            <div class="row " id="heading">
                                                                <div class="col-4">Subtotal [tanpa ongkir]</div>
                                                                <div class="col-1">:</div>
                                                                <div class="col-3 fw-normal">
                                                                    <span>Rp. 853.000,00</span>
                                                                </div>
                                                            </div>
                                                            <div class="row " id="heading">
                                                                <div class="col-4">Tanggal Transaksi</div>
                                                                <div class="col-1">:</div>
                                                                <div class="col-4 fw-normal">
                                                                    <span> 05-10-2023</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
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
<?= $this->endSection('activity') ?>