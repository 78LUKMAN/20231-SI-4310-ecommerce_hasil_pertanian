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
            <div class="header-alert-news">
                <p><b>Free Shipping</b>This Week Order Over - $250</p>
            </div>

            <div class="header-top-actions">
                <select name="currency">
                    <option value="usd">USD &dollar;</option>
                    <option value="usd">EUR &euro;</option>
                </select>

                <select name="language">
                    <option value="es-US">English</option>
                    <option value="es-ES">Espa&ntilde;ol</option>
                    <option value="fr">Fran&ccedil;ais</option>
                </select>
            </div>
        </div>
    </div>

    <div class="header-main">
        <div class="container">
            <a href="<?php echo base_url() ?>" class="header-logo">
                <img src="<?php echo base_url() ?>assets/img/logo/manlogo.PNG" alt="logo" width="80">
            </a>
            <div class="header-search-container">
                <input type="search" name="search" class="search-field" placeholder="search by product name">
                <button class="search-btn">
                    <ion-icon name="search-outline"></ion-icon>
                </button>
            </div>

            <?php
            $cartUrl = base_url() . 'activity/cart';
            $historyUrl = base_url() . 'activity/history';
            $transactionUrl = base_url() . 'admin/actaivity/transactions';
            $addProductUrl = base_url() . 'admin/actaivity/products';
            $elmn = null;
            $currentUrl = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

            function hideButton($url)
            {
                global $currentUrl;
                if ($currentUrl === $url) {
                    return 'style="display:none;"';
                }
                return '';
            }
            ?>

            <div class="header-user-actions">
                <?php if (session('isLoggIn') == 1) { ?>
                    <a href="<?php echo base_url() ?>activity/profile">
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
                        <span class="count">0</span>
                    </button>
                </a>
                <a href="<?php echo base_url() ?>activity/history" id="history-btn" <?php echo hideButton($historyUrl); ?>>
                    <button class="action-btn">
                        <ion-icon name="timer-outline"></ion-icon>
                    </button>
                </a>
                <a href="<?php echo base_url() ?>activity/transaction" id="history-btn" <?php echo hideButton($transactionUrl); ?>>
                    <button class="action-btn">
                        <ion-icon name="wallet-outline"></ion-icon>
                    </button>
                </a>

                <?php if (session('role') == 'admin') { ?>
                    <a href="<?php echo base_url() ?>admin/activity/transaction" id="history-btn" <?php echo hideButton($transactionUrl); ?>>
                        <button class="action-btn">
                            <ion-icon name="people-outline"></ion-icon>
                        </button>
                    </a>
                    <a href="<?php echo base_url() ?>admin/activity/products" id="history-btn" <?php echo hideButton($addProductUrl); ?>>
                        <button class="action-btn">
                            <ion-icon name="logo-dropbox"></ion-icon>
                        </button>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</header>
<?= $this->include('layout/components/navigation'); ?>