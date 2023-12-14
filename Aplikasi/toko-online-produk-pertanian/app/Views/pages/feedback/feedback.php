<?= $this->extend('layout/layout'); ?>
<?= $this->section('content') ?>
<?php $session = session(); ?>
<section class="">
    <div class="px-4 py-5 px-md-5  text-lg-start">
        <div class="container">
            <?php if (session()->has('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('success') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>

            <?php if (session()->has('failed')): ?>
                <div class="alert alert-danger  alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('failed') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                </div>
            <?php endif; ?>

            <?php
            $errors = session('errors');

            if ($errors !== null) {
                echo '<div class="alert alert-danger">';
                echo '<strong>Terjadi Kesalahan:</strong><br>';
                foreach ($errors as $error) {
                    echo '- ' . esc($error) . '<br>';
                }
                echo '</div>';
            }
            ?>
            <div class="row gx-lg-5">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <h1 class="my-5 display-3 fw-bold ls-tight fs-1">
                        Halo <br />
                        <span class="text-primary fs-3"><?= $session->get('username')?></span>
                    </h1>
                    <p style="color: hsl(217, 10%, 50.8%)">
                        Terima kasih telah mengunjungi ke toko kami. Setiap pesan Anda sangat berharga bagi kami.
                        Kontribusi Anda membantu meningkatkan pengalaman dan konten kami. Terima kasih atas dukungan dan
                        kontribusi Anda!
                    </p>
                </div>

                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="card">
                        <div class="card-body py-5 px-md-5">
                            <h4>Kirim Komentar Anda</h4>
                            <form action="<?= base_url() ?>activity/feedback/send" method="post">

                                <input type="hidden" name="username" value="<?= $session->get('username') ?>">
                                <input type="hidden" name="image" value="<?= $session->get('img') ?>">
                                <div class="row">
                                    <div class="form-outline">
                                        <label class="form-label" for="name">Nama</label>
                                        <input type="text" id="name" name="name" class="form-control" />
                                    </div>
                                </div>

                                <div class="form-outline mb-4">
                                    <label class="form-label" for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control" />
                                </div>
                                
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="tulis pesan anda" name="message"
                                    id="message"></textarea>
                                    <label class="form-label" for="message">Pesan</label>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block mb-4 mt-4">
                                    Kirim
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
<?= $this->endSection() ?>