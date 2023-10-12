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
            <a href="<?php echo base_url()?>" class="header-logo">
                <img src="<?php echo base_url() ?>assets/img/logo/manlogo.PNG" alt="logo" width="80">
            </a>
            <div class="header-search-container">
                <input type="search" name="search" class="search-field" placeholder="search by product name">
                <button class="search-btn">
                    <ion-icon name="search-outline"></ion-icon>
                </button>
            </div>


            <!-- <ul class="d-flex align-items-center">
                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <span>
                            <button class="action-btn">
                                <ion-icon name="person-outline" style=" --ionicon-stroke-width: 25px;"></ion-icon>
                            </button>
                        </span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Kevin Anderson</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul> -->

            <?php
           

            // echo $currentUrl . '<br>';
            
            $cartUrl = base_url() . 'activity/cart';
            $historyUrl = base_url() . 'activity/history';
            $transactionUrl = base_url() . 'actaivity/transaction';
            $elmn = null;

            function hideButton($url)
            {
                $currentUrl = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                if ($currentUrl === $url) {
                    return 'style="display:none;"';
                }
                return '';
            }
            ?>
            <div class="header-user-actions">
                <a href="<?php echo base_url() ?>/signup">
                    <button class="action-btn">
                        <ion-icon name="person-outline"></ion-icon>
                    </button>
                </a>
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
            </div>
        </div>
    </div>
</header>
<?= $this->include('layout/components/navigation'); ?>