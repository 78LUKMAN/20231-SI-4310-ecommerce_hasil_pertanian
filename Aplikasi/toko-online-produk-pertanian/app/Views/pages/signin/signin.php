<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Beats Store">
    <meta name="author" content="Lukmanul Hakim">
    <meta name="keywords" content="ecommers">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url() ?>assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap">
    <title>Login Page</title>
</head>

<body>
    <header>
        <div class="header-main">
            <div class="container" style="justify-content:center !important;">
                <a href="/" class="header-logo">
                    <img src="<?php echo base_url() ?>assets/img/logo/manlogo.PNG" alt="logo" width="120">
                </a>
            </div>
        </div>
    </header>

    <section class="user-signin">
        <div class="user-signin-container">
            <div class="user-signin-content">
                <h1>Sign In</h1>
                <?php if(session()->getFlashdata('feedback')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('feedback') ?>
                    </div>
                <?php endif;?>
                <form class="signup-form" method="post" action="<?php echo base_url() ?>auth/signin">
                    <div class="signin-form">
                        <div class="form-content">
                            <label for="emailusername">Email or username</label>
                            <input type="text" id="username" name="username" placeholder="email or username" required>
                            <label for="password">Password</label>
                            <input type="password" id="password" name="password" placeholder="password" required>
                        </div>
                        <div class="form-btn-action">
                            <button type="submit">continue</button>
                        </div>
                        <div class="form-desc">
                            <p>By continuing, you agree to our store's Condition of Use and Privacy notice</p>
                        </div>
                    </div>
                    <div class="new-user-register">
                        <p>New User ?</p>
                        <a href="<?php echo base_url() ?>auth/signup">
                            <button class="user-register">Create your account</button>
                        </a>
                    </div>
                </form>
            </div>
    </section>


    <!-- FOOTER -->
    <?= $this->include('layout/components/footer'); ?>


    <script src="<?php echo base_url() ?>assets/js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/ionicons/ionicons.js"></script>
</body>

</html>