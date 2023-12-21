<!DOCTYPE html>
<html lang="en">

<?= $this->extend('layout/layout_clear') ?>

<?= $this->section('auth_content') ?>
<header>
    <div class="header-main d-flex justify-content-center">
        <div class="text-center w-25">
            <a href="/" class="header-logo">
                <img src="<?php echo base_url() ?>assets/img/logo/logo.png" alt="logo" width="120">
            </a>
            <?php if (session()->has('auth-success')): ?>
                <div class="modal fade show" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-modal="true" role="dialog"
                    style="display: block;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header  bg-warning">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Hai Flexitarian </h1>
                            </div>
                            <div class="modal-body">
                                <p>
                                    <?php echo session()->getFlashdata('auth-success') ?>, silahkan login dan lengkapi
                                    profile anda di menu profile sebelum anda melanjutkan untuk berbelanja.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Oke</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-backdrop fade show"></div>
            <?php endif ?>
</header>

<section class="user-signin">
    <div class="user-signin-container">
        <div class="user-signin-content">
            <h1>Sign In</h1>
            <?= form_open('auth/signin', ['class' => 'signin-form']) ?>
            <div class="signin-form">
                <div class="form-content">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="username"
                        class="form-control <?php echo session()->getFlashdata('feedback') ? 'is-invalid' : '' ?>"
                        required>
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="password"
                        class="form-control <?php echo session()->getFlashdata('feedback') ? 'is-invalid' : '' ?>"
                        required>
                </div>
                <?php if (session()->getFlashdata('feedback')): ?>
                    <div class="text-danger fs-6 ml-5">
                        <?= session()->getFlashdata('feedback') ?>
                    </div>
                <?php endif; ?>
                <div class="form-btn-action">
                    <button type="submit">continue</button>
                </div>
                <div class="form-desc">
                    <p>By continuing, you agree to our store's Condition of Use and Privacy notice</p>
                </div>
            </div>
            <?= form_close() ?>
            <div class="new-user-register">
                <p>New User ?</p>
                <a href="<?php echo base_url() ?>auth/signup">
                    <button class="user-register">Create your account</button>
                </a>
            </div>
        </div>
</section>

<?= $this->endSection('auth_content') ?>
<?= $this->section('script') ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let closeButton = document.querySelector('[data-bs-dismiss="modal"]');
        closeButton.addEventListener('click', function () {
            let showElements = document.querySelector('.show');
            showElements.parentNode.removeChild(showElements)
            let modalBackdrop = document.querySelector('.modal-backdrop');

            if (modalBackdrop) {
                modalBackdrop.parentNode.removeChild(modalBackdrop);
            }
        });
    });
</script>
<?= $this->endSection('script') ?>