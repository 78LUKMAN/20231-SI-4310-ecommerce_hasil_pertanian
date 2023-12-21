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

<section class="user-signup">
    <div class="user-signup-container">
        <div class="user-signup-content">
            <h1 class>Create Account</h1>
            <?= form_open('auth/signup', ['class' => 'signup-form']) ?>
            <div class="form-content column-gap-3">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="name" value="<?= set_value('name') ?>"
                        class="form-control <?= ($validation->hasError('name')) ? 'is-invalid' : (($validation->getRules('name')) ? 'is-valid' : '') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('name') ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="username"
                        value="<?= set_value('username') ?>"
                        class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : (($validation->getRules('username')) ? 'is-valid' : '') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('username') ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="email" value="<?= set_value('email') ?>"
                        class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : (($validation->getRules('email')) ? 'is-valid' : '') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('email') ?>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="password"
                    class="form-control <?= ($validation->hasError('password')) ? 'is-invalid' : (($validation->getRules('password')) ? 'is-valid' : '') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('password') ?>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="repassword">Re-Password</label>
                    <input type="password" name="confirm_password" id="confirm_password"
                        placeholder="Re-enter your password"
                        class="form-control <?= ($validation->hasError('confirm_password')) ? 'is-invalid' : (($validation->getRules('confirm_password')) ? 'is-valid' : '') ?>">
                    <div class="invalid-feedback">
                        <?= $validation->getError('confirm_password') ?>
                    </div>
                </div>
            </div>
            <div class="form-btn-action">
                <button type="submit">continue</button>
            </div>
            <div class="form-desc">
                <p>By continuing, you agree to our store's Condition of Use and Privacy notice</p>
            </div>

            <div class="signin-offer">
                <p>Already have an account?&nbsp;<a href="<?php echo base_url() ?>auth/signin">Sign in</a></p>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</section>
<?= $this->endSection('auth_content') ?>
<?php $this->setVar('title', 'Sign Up'); ?>