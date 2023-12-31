<nav>
    <?php
    $cartUrl = base_url() . 'activity/cart';
    $historyUrl = base_url() . 'activity/history';
    $elmn = null;
    ?>
    <div class="mobile-bottom-nav">
        <button class="action-btn" data-mobile-menu-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
        </button>
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
        <?php
        if (current_url() !== base_url()) {
            ?>
            <a href="<?php base_url() ?>/">
                <button class="action-btn">
                    <ion-icon name="home-outline"></ion-icon>
                </button>
            </a>
            <?php
        } ?>

        <?php
        if (current_url() === base_url()) {
            ?>
            <?php if (session('role') == 'admin') { ?>
                    <a href="<?php base_url()?>admin/accounts">
                        <button class="action-btn">
                            <ion-icon name="grid-outline"></ion-icon>
                        </button>
                    </a>
                <?php
            }
        }
        ?>


    </div>

    <div class="mobile-nav-menu has-scrollbar" data-mobile-menu>
        <div class="menu-top">
            <h2 class="menu-title">Menu</h2>

            <button class="menu-close-btn" data-mobile-menu-close-btn>
                <ion-icon name="close-outline"></ion-icon>
            </button>
        </div>

        <ul class="mobile-menu-category-list">
            <li class="menu-category">
                <a href="#" class="menu-title">Home</a>
            </li>
            <li class="menu-category">
                <button class="accordion-menu" data-accordion-btn>
                    <p class="menu-title">Sayur dan Buah</p>

                    <div>
                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                    </div>
                </button>

                <ul class="submenu-category-list" data-accordion>
                    <li class="submenu-category">
                        <a href="<?= base_url('product/showall/terong') ?>" class="submenu-title">Terong</a>
                    </li>

                    <li class="submenu-category">
                        <a href="<?= base_url('product/showall/wortel') ?>" class="submenu-title">Wortel</a>
                    </li>

                    <li class="submenu-category">
                        <a href="<?= base_url('product/showall/tomat') ?>" class="submenu-title">Tomat</a>
                    </li>

                    <li class="submenu-category">
                        <a href="<?= base_url('product/showall/bayam') ?>" class="submenu-title">Bayam</a>
                    </li>
                </ul>
            </li>
            <li class="menu-category">
                <button class="accordion-menu" data-accordion-btn>
                    <p class="menu-title">Rempah</p>

                    <div>
                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                    </div>
                </button>

                <ul class="submenu-category-list" data-accordion>
                    <li class="submenu-category">
                        <a href="<?= base_url('product/showall/lengkuas') ?>" class="submenu-title">Lengkuas</a>
                    </li>

                    <li class="submenu-category">
                        <a href="<?= base_url('product/showall/bawang') ?>" class="submenu-title">Bawang</a>
                    </li>

                    <li class="submenu-category">
                        <a href="<?= base_url('product/showall/ketumbar') ?>" class="submenu-title">Ketumbar</a>
                    </li>

                    <li class="submenu-category">
                        <a href="<?= base_url('product/showall/kunyit') ?>" class="submenu-title">Kunyit</a>
                    </li>
                </ul>
            </li>
            <li class="menu-category">
                <button class="accordion-menu" data-accordion-btn>
                    <p class="menu-title">Kacang</p>

                    <div>
                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                    </div>
                </button>

                <ul class="submenu-category-list" data-accordion>
                    <li class="submenu-category">
                        <a href="<?= base_url('product/showall/kacang-tanah') ?>" class="submenu-title">Kacang Tanah</a>
                    </li>

                    <li class="submenu-category">
                        <a href="<?= base_url('product/showall/kacang-mede') ?>" class="submenu-title">Kacang Mede</a>
                    </li>

                    <li class="submenu-category">
                        <a href="<?= base_url('product/showall/kacang-almond') ?>" class="submenu-title">Kacang Almond</a>
                    </li>

                    <li class="submenu-category">
                        <a href="<?= base_url('product/showall/kacang-arab') ?>" class="submenu-title">Kacang Arab</a>
                    </li>
                </ul>
            </li>
            <li class="menu-category">
                <a href="<?= base_url('product/showall/terong') ?>" class="menu-title">Blog</a>
            </li>
            <li class="menu-category">
                <a href="#" class="menu-title">Hot Offers</a>
            </li>
            <?php if (session('isLoggIn') == 1) { ?>
                <li class="menu-category">
                    <a href="  <?php echo base_url() ?>activity/profile" class="menu-title">Profile</a>
                </li>
            <?php } else { ?>
                <li class="menu-category">
                    <a href="auth/signin" class="menu-title">Login</a>
                </li>
            <?php } ?>
        </ul>
        <div class="menu-bottom">
            <ul class="menu-category-list">
                <li class="menu-category">
                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Currency</p>
                        <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                    </button>

                    <ul class="submenu-category-list" data-accordion>
                        <li class="submenu-category">
                            <a href="#" class="submenu-title">USD &dollar;</a>
                        </li>
                        <li class="submenu-category">
                            <a href="#" class="submenu-title">EUR &euro;</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-category">
                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Language</p>
                        <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
                    </button>

                    <ul class="submenu-category-list" data-accordion>
                        <li class="submenu-category">
                            <a href="#" class="submenu-title">English</a>
                        </li>
                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Espa&ntilde;ol</a>
                        </li>
                        <li class="submenu-category">
                            <a href="#" class="submenu-title">Fren&ccedil;h</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <ul class="menu-social-container">
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
        </div>
    </div>
</nav>