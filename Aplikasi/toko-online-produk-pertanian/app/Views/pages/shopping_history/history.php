<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/third-assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/third-assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/third-assets/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/third-assets/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/third-assets/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/third-assets/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/third-assets/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <?= $this->include('layout/components/dashboard_activity/header')?>
    <!-- ======= Sidebar ======= -->
    <?= $this->include('layout/components/dashboard_activity/sidebar')?>

    <main id="main" class="main">

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
                            <!-- Table with stripped rows -->
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
                                                        <div id="collapseOne-1"
                                                            class="accordion-collapse collapse" aria-labelledby="headingOne"
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
                                                        <div id="collapseOne-2"
                                                            class="accordion-collapse collapse" aria-labelledby="headingOne"
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
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?= $this->include('layout/components/footer'); ?>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/third-assets/apexcharts/apexcharts.min.js"></script>
    <script src="assets/third-assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/third-assets/chart.js/chart.min.js"></script>
    <script src="assets/third-assets/echarts/echarts.min.js"></script>
    <script src="assets/third-assets/quill/quill.min.js"></script>
    <script src="assets/third-assets/simple-datatables/simple-datatables.js"></script>
    <script src="assets/third-assets/tinymce/tinymce.min.js"></script>
    <script src="assets/third-assets/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>