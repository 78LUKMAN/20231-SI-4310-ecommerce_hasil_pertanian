<header>
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
                <a href="#" class="header-logo">
                    <img src="<?php echo base_url() ?>assets/img/logo/manlogo.PNG" alt="logo" width="80">
                </a>
                <div class="header-search-container">
                    <input type="search" name="search" class="search-field" placeholder="search by product name">
                    <button class="search-btn">
                        <ion-icon name="search-outline"></ion-icon>
                    </button>
                </div>

                <div class="header-user-actions">
                    <button class="action-btn">
                        <a href="/signup">
                            <ion-icon name="person-outline"></ion-icon>
                        </a>
                    </button>
                    <!-- <button class="action-btn">
                        <ion-icon name="heart-outline"></ion-icon>
                        <span class="count">0</span>
                    </button> -->
                    <a href="cart">
                        <button class="action-btn">
                            <ion-icon name="cart-outline"></ion-icon>
                            <span class="count">0</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <nav class="desktop-nav-menu">
            <div class="container">
                <ul class="desktop-menu-category-list">
                    <li class="menu-category">
                        <a href="#" class="menu-title">Home</a>
                    </li>
                    <li class="menu-category">
                        <a href="#" class="menu-title">Categories</a>
                        <div class="dropdown-panel">

                            <ul class="dropdown-panel-list">
                                <li class="menu-title">
                                    <a href="#">Headphone</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Product-1</a>
                                </li>
                                <li class="panel-list-item">
                                    <a href="#">Product-2</a>
                                </li>
                                <li class="panel-list-item">
                                    <a href="#">Product-3</a>
                                </li>
                                <li class="panel-list-item">
                                    <a href="#">Product-4</a>
                                </li>
                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="<?php echo base_url() ?>assets/img/banner/banner-2-headphone.png" alt="Headphone Collection"
                                            width="250" height="119">
                                    </a>
                                </li>
                            </ul>

                            <ul class="dropdown-panel-list">
                                <li class="menu-title">
                                    <a href="#">Smartphone</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Product-A</a>
                                </li>
                                <li class="panel-list-item">
                                    <a href="#">Product-B</a>
                                </li>
                                <li class="panel-list-item">
                                    <a href="#">Product-C</a>
                                </li>
                                <li class="panel-list-item">
                                    <a href="#">Product-D</a>
                                </li>
                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="<?php echo base_url() ?>assets/img/banner/banner-2-handphone.png" alt="Headphone Collection"
                                            width="250" height="119">
                                    </a>
                                </li>
                            </ul>

                            <ul class="dropdown-panel-list">
                                <li class="menu-title">
                                    <a href="#">Watch</a>
                                </li>

                                <li class="panel-list-item">
                                    <a href="#">Product-1</a>
                                </li>
                                <li class="panel-list-item">
                                    <a href="#">Product-2</a>
                                </li>
                                <li class="panel-list-item">
                                    <a href="#">Product-3</a>
                                </li>
                                <li class="panel-list-item">
                                    <a href="#">Product-4</a>
                                </li>
                                <li class="panel-list-item">
                                    <a href="#">
                                        <img src="<?php echo base_url() ?>assets/img/banner/banner-2-watch.png" alt="Headphone Collection"
                                            width="250" height="119">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="mobile-bottom-nav">
            <button class="action-btn" data-mobile-menu-open-btn>
                <ion-icon name="menu-outline"></ion-icon>
            </button>

            <button class="action-btn">
                <ion-icon name="cart-outline"></ion-icon>
                <span class="count">0</span>
            </button>

            <button class="action-btn">
                <ion-icon name="home-outline"></ion-icon>
            </button>

            <button class="action-btn">
                <ion-icon name="heart-outline"></ion-icon>
                <span class="count">0</span>
            </button>

            <button class="action-btn" data-mobile-menu-open-btn>
                <ion-icon name="grid-outline"></ion-icon>
            </button>
        </div>

        <nav class="mobile-nav-menu has-scrollbar" data-mobile-menu>
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
                        <p class="menu-title">Headphone</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>

                    <ul class="submenu-category-list" data-accordion>
                        <li class="submenu-category">
                            <a href="#" class="submenu-title">product-A</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">product-B</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">product-C</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">product-D</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-category">
                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Watch</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>

                    <ul class="submenu-category-list" data-accordion>
                        <li class="submenu-category">
                            <a href="#" class="submenu-title">product-A</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">product-B</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">product-C</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">product-D</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-category">
                    <button class="accordion-menu" data-accordion-btn>
                        <p class="menu-title">Smartphone</p>

                        <div>
                            <ion-icon name="add-outline" class="add-icon"></ion-icon>
                            <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                        </div>
                    </button>

                    <ul class="submenu-category-list" data-accordion>
                        <li class="submenu-category">
                            <a href="#" class="submenu-title">product-A</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">product-B</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">product-C</a>
                        </li>

                        <li class="submenu-category">
                            <a href="#" class="submenu-title">product-D</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-category">
                    <a href="#" class="menu-title">Blog</a>
                </li>
                <li class="menu-category">
                    <a href="#" class="menu-title">Hot Offers</a>
                </li>
                <li class="menu-category">
                    <a href="../pages/signin.html" class="menu-title">Login</a>
                </li>
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
        </nav>
    </header>