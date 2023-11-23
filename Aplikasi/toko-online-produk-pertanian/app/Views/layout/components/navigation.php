<nav>
    <div class="mobile-bottom-nav">
        <button class="action-btn" data-mobile-menu-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
        </button>
        <a href="<?php echo base_url() ?>activity/cart">
            <button class="action-btn">
                <ion-icon name="cart-outline"></ion-icon>
                <span class="count">0</span>
            </button>
        </a>

        <button class="action-btn">
            <ion-icon name="home-outline"></ion-icon>
        </button>

        <?php
        if (current_url() === base_url()."index.php/") {
            ?>
            <button class="action-btn" data-mobile-menu-open-btn>
                <ion-icon name="grid-outline"></ion-icon>
            </button>
            <?php
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
    </div>

</nav>
<!-- <div class="slidebar has-scrollbar" data-mobile-menu>
    <div class="slidebar-category">
        <div class="slidebar-top">
            <h2 class="slidebar-title">Category</h2>

            <button class="slidebar-close-btn" data-mobile-menu-close-btn>
                <ion-icon name="close-outline"></ion-icon>
            </button>
        </div>

        <ul class="slidebar-menu-category-list">
            <li class="slidebar-menu-category">
                <button class="slidebar-accordion-menu" data-accordion-btn>
                    <div class="menu-title-flex">
                        <img src="../../src/img/logo/handphone.jpg" alt="" width="20" class="menu-title-img">
                        <p class="menu-title">Handphone</p>
                    </div>

                    <div>
                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                    </div>
                </button>

                <ul class="slidebar-submenu-category-list" data-accordion>
                    <li class="slidebar-submenu-category">
                        <a href="#" class="slidebar-submenu-title">
                            <p class="product-name">Samsung</p>
                            <data value="300" class="stock" title="available stock">58</data>
                        </a>
                    </li>

                    <li class="slidebar-submenu-category">
                        <a href="#" class="slidebar-submenu-title">
                            <p class="product-name">Apple</p>
                            <data value="300" class="stock" title="available stock">32</data>
                        </a>
                    </li>

                    <li class="slidebar-submenu-category">
                        <a href="#" class="slidebar-submenu-title">
                            <p class="product-name">Asus</p>
                            <data value="300" class="stock" title="available stock">60</data>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="slidebar-menu-category">
                <button class="slidebar-accordion-menu" data-accordion-btn>
                    <div class="menu-title-flex">
                        <img src="../../src/img/logo/headphone.jpg" alt="" width="20" height="22"
                            class="menu-title-img">
                        <p class="menu-title">Headphone</p>
                    </div>

                    <div>
                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                    </div>
                </button>

                <ul class="slidebar-submenu-category-list" data-accordion>
                    <li class="slidebar-submenu-category">
                        <a href="#" class="slidebar-submenu-title">
                            <p class="product-name">Beats</p>
                            <data value="300" class="stock" title="available stock">120</data>
                        </a>
                    </li>

                    <li class="slidebar-submenu-category">
                        <a href="#" class="slidebar-submenu-title">
                            <p class="product-name">Sony</p>
                            <data value="300" class="stock" title="available stock">200</data>
                        </a>
                    </li>

                    <li class="slidebar-submenu-category">
                        <a href="#" class="slidebar-submenu-title">
                            <p class="product-name">Razer</p>
                            <data value="300" class="stock" title="available stock">150</data>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="slidebar-menu-category">
                <button class="slidebar-accordion-menu" data-accordion-btn>
                    <div class="menu-title-flex">
                        <img src="../../src/img/logo/watch.jpg" alt="" width="20" class="menu-title-img">
                        <p class="menu-title">Watch</p>
                    </div>

                    <div>
                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                    </div>
                </button>

                <ul class="slidebar-submenu-category-list" data-accordion>
                    <li class="slidebar-submenu-category">
                        <a href="#" class="slidebar-submenu-title">
                            <p class="product-name">Casio</p>
                            <data value="300" class="stock" title="available stock">80</data>
                        </a>
                    </li>

                    <li class="slidebar-submenu-category">
                        <a href="#" class="slidebar-submenu-title">
                            <p class="product-name">Fossil</p>
                            <data value="300" class="stock" title="available stock">96</data>
                        </a>
                    </li>

                    <li class="slidebar-submenu-category">
                        <a href="#" class="slidebar-submenu-title">
                            <p class="product-name">Orient</p>
                            <data value="300" class="stock" title="available stock">84</data>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>

    <div class="product-showcase">
        <h3 class="showcase-heading">Best Seller</h3>
        <div class="showcase-wrapper">
            <div class="showcase-container">
                <div class="showcase">
                    <a href="#" class="showcase-img-box">
                        <img src="../../src/img/products/product1.png" alt="" class="showcase-img" width="75">
                    </a>
                    <div class="showcase-content">
                        <a href="#">
                            <h4 class="showcase-title">Product-1</h4>
                        </a>

                        <div class="showcase-rating">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>

                        <div class="price-box">
                            <del>&dollar;360.70</del>
                            <p class="price">&dollar;246.00</p>
                        </div>
                    </div>
                </div>
                <div class="showcase">
                    <a href="#" class="showcase-img-box">
                        <img src="../../src/img/products/product2.png" alt="" class="showcase-img" width="75">
                    </a>
                    <div class="showcase-content">
                        <a href="#">
                            <h4 class="showcase-title">Product-2</h4>
                        </a>

                        <div class="showcase-rating">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>

                        <div class="price-box">
                            <del>&dollar;379.70</del>
                            <p class="price">&dollar;200.15</p>
                        </div>
                    </div>
                </div>
                <div class="showcase">
                    <a href="#" class="showcase-img-box">
                        <img src="../../src/img/products/product3.png" alt="" class="showcase-img" width="75">
                    </a>
                    <div class="showcase-content">
                        <a href="#">
                            <h4 class="showcase-title">Product-3</h4>
                        </a>

                        <div class="showcase-rating">
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                            <ion-icon name="star"></ion-icon>
                        </div>

                        <div class="price-box">
                            <del>&dollar;360.99</del>
                            <p class="price">&dollar;206.20</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> -->