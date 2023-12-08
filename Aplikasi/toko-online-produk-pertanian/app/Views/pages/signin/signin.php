<!DOCTYPE html>
<html lang="en">

<?= $this->extend('layout/layout_clear') ?>

<?= $this->section('auth_content') ?>
    <header>
        <div class="header-main">
            <div class="container" style="justify-content:center !important;">
                <a href="/" class="header-logo">
                    <img src="<?php echo base_url() ?>assets/img/logo/logo.png" alt="logo" width="120">
                </a>
            </div>
        </div>
    </header>

    <section class="user-signin">
        <div class="user-signin-container">
            <div class="user-signin-content">
                <h1>Sign In</h1>
                <?= form_open('auth/signin', ['class' => 'signin-form'])?>
                    <div class="signin-form">
                        <div class="form-content">
                            <label for="emailusername">Email or username</label>
                            <input type="text" id="username" name="username" placeholder="email or username" class="form-control <?php echo session()->getFlashdata('feedback') ? 'is-invalid' : ''?>" required>
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="password" class="form-control <?php echo session()->getFlashdata('feedback') ? 'is-invalid' : ''?>" required>
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
                    <?= form_close()?>
                <div class="new-user-register">
                    <p>New User ?</p>
                    <a href="<?php echo base_url() ?>auth/signup">
                        <button class="user-register">Create your account</button>
                    </a>
                </div>
            </div>
    </section>
    <?= $this->endSection('auth_content') ?>