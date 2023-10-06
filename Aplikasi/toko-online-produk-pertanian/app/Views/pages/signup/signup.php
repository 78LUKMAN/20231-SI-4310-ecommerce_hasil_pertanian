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

    <section class="user-signup">
        <div class="user-signup-container">
            <div class="user-signup-content">
                <h1>Create Account</h1>
                <form class="signup-form" method="post">
                    <div class="form-content">
                        <label for="firstname">First name</label>
                        <input type="text" id="firstname" placeholder="first name" required>
                        <label for="lastname">Last name</label>
                        <input type="text" id="lastname" placeholder="last name" required>
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="email" required>
                        <label for="username">Username</label>
                        <input type="text" id="username" placeholder="username" required>
                        <label for="password">Password</label>
                        <input type="password" id="password" placeholder="password" required>
                        <label for="repassword">Re-Password</label>
                        <input type="password" id="repassword" placeholder="Re-enter your password" required>
                    </div>
                    <div class="form-btn-action">
                        <button type="submit">continue</button>
                    </div>
                    <div class="form-desc">
                        <p>By continuing, you agree to our store's Condition of Use and Privacy notice</p>
                    </div>

                    <div class="signin-offer">
                        <p>Already have an account?&nbsp;<a href="/signin">Sign in</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>

   <!-- footer -->
    <?= $this->include('layout/components/footer');?>

    <script src="<?php echo base_url() ?>assets/js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/ionicons/ionicons.js"></script>
</body>

</html>