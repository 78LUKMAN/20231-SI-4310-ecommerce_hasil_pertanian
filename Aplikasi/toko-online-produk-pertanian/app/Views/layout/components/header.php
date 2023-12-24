<header class="header-sticky">
    <div class="header-top">
        <div class="container">
            <ul class="header-social-container">
                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-facebook"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-twitter"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-instagram"></ion-icon>
                    </a>
                </li>
                <li>
                    <a href="#" class="social-link">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                </li>
            </ul>
            <div class="col-7">
                <marquee behavior="smooth" direction="left" class="header-tagline header-alert-news">
                <p>Ingin produk berkualitas hanya dengan ujung jari? Pekalongan Groceria solusinya!! Pekalongan Groceria - sentuhan kesegaran untuk hidup lebih ceria</p>
            </marquee>
        </div>
            <div class="header-alert-news">
                <p><b>- Pekalongan</b> Groceria -</p>
            </div>
        </div>
    </div>

    <div class="header-main">
        <div class="container">
            <a href="<?php echo base_url() ?>" class="header-logo">
                <img src="<?php echo base_url() ?>assets/img/logo/logo.png" alt="logo" width="80">
            </a>
            <div class="header-search-container">
                <?= form_open(base_url('product/search'), ['method' => 'post']); ?>
                <input type="search" name="keyword" class="search-field" placeholder="search product . . ." required>
                <button class="search-btn" type="submit">
                    <ion-icon name="search-outline"></ion-icon>
                </button>
            </div>
            <?= form_close() ?>
            <?php
            $cartUrl = base_url() . 'activity/cart';
            $historyUrl = base_url() . 'activity/history';
            $profileUrl = base_url() . 'activity/profile';
            $transactionUrl = base_url() . 'admin/activity/transactions';
            $addProductUrl = base_url() . 'admin/activity/products';

            function hideButton($url)
            {
                $currentUrl = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                if ($currentUrl == $url) {
                    return "style='display:none;'";
                }
                return '';
            }

            ?>

            <div class="header-user-actions">
                <?php if (session('isLoggIn') == 1) { ?>
                    <a href="<?php echo base_url() ?>activity/profile" <?php echo hideButton($profileUrl) ?>>
                        <button class="action-btn">
                            <ion-icon name="person-outline"></ion-icon>
                        </button>
                    </a>
                <?php } else { ?>
                    <a href="<?php echo base_url() ?>auth/signin">
                        <button class="action-btn">
                            <ion-icon name="person-outline"></ion-icon>
                        </button>
                    </a>
                <?php } ?>

                <a href="<?php echo base_url() ?>activity/cart" id="cart-btn" <?php echo hideButton($cartUrl); ?>>
                    <button class="action-btn">
                        <ion-icon name="cart-outline"></ion-icon>
                        <span class="count cart-count">0</span>
                    </button>
                </a>
                <a href="<?php echo base_url() ?>activity/history" id="history-btn" <?php echo hideButton($historyUrl); ?>>
                    <button class="action-btn">
                        <ion-icon name="timer-outline"></ion-icon>
                    </button>
                </a>
                
                <?php if (session('role') == 'admin') { ?>
                    <a href="<?php echo base_url() ?>admin/accounts" <?php echo hideButton($addProductUrl); ?>>
                        <button class="action-btn">
                            <ion-icon name="grid-outline"></ion-icon>
                        </button>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</header>
<?= $this->include('layout/components/navigation'); ?>
<?= $this->section('script')?>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var cartCount = document.querySelectorAll('.cart-count');

        function loadCartCount() {
            fetch('<?php echo base_url() ?>cart/counter')
                .then(response => response.json())
                .then(data => {
                    cartCount.forEach(element => {
                        element.innerText = data.count;
                    });
                });
        }
        loadCartCount();
    });
</script>
<?= $this->endSection()?>