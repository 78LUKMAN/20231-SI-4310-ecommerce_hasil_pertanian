<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="icon" href="<?php echo base_url()?>assets/img/favicon/favicon.png">
    
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">

    <title>Beats Store</title>
</head>

<body>

    <!-- HEADER -->
    <?= $this->include('pages/admin/admin_dashboard/components/header') ?>
    <?= $this->include('pages/admin/admin_dashboard/components/slidebar') ?>


    <!-- RENDER SECTION -->
    <main id="main" class="main">
        <div class="card">
            <div class="card-body">
                <div class="card-title"><h5><?= $page_title?></h5></div>
                <?= $this->renderSection('admin_content') ?>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <?= $this->include('pages/admin/admin_dashboard/components/footer') ?>


    <script src="<?php echo base_url() ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/chart.js/chart.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/echarts/echarts.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/quill/quill.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/php-email-form/validate.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
</body>

</html>