<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo base_url() ?>assets/img/favicon.png" rel="icon">
    <link href="<?php echo base_url() ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url() ?>assets/third-assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/third-assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/third-assets/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/third-assets/quill/quill.snow.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/third-assets/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/third-assets/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/third-assets/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">

    <title>Beats Store</title>
</head>

<body>
    <div class="overlay" data-overlay></div>
    
    <!-- HEADER -->
    <?= $this->include('layout/components/header') ?>


    <!-- RENDER SECTION -->
    <?= $this->renderSection('content') ?>


    <!-- FOOTER -->
    <?= $this->include('layout/components/footer') ?>


    <script src="<?php echo base_url() ?>assets/third-assets/apexcharts/apexcharts.min.js"></script>
    <script src="<?php echo base_url() ?>assets/third-assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>assets/third-assets/chart.js/chart.min.js"></script>
    <script src="<?php echo base_url() ?>assets/third-assets/echarts/echarts.min.js"></script>
    <script src="<?php echo base_url() ?>assets/third-assets/quill/quill.min.js"></script>
    <script src="<?php echo base_url() ?>assets/third-assets/simple-datatables/simple-datatables.js"></script>
    <script src="<?php echo base_url() ?>assets/third-assets/tinymce/tinymce.min.js"></script>
    <script src="<?php echo base_url() ?>assets/third-assets/php-email-form/validate.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url() ?>assets/js/script.js"></script>
	<script src="<?php echo base_url() ?>assets/js/main.js"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
    <?= $this->renderSection('script') ?>

    <!-- Midtrans Snap-->
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="SB-Mid-client-WJGQ2dCcv0z_BGBB"></script>
</body>

</html>