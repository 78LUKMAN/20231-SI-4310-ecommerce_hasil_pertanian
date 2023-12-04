<?= $this->extend('layout/layout'); ?>
<?= $this->section('content') ?>

<div class="main-modal" data-modal>
    <div class="main-modal-close-overlay" data-modal-overlay></div>
    <div class="main-modal-content">
        <button class="main-modal-close-btn" data-modal-close>
            <ion-icon name="close-outline"></ion-icon>
        </button>

        <div class="newsletter-img">
            <img src="<?php echo base_url() ?>assets/img/banner/newletter-img.png" alt="subscribe" width="300"
                height="300">
        </div>
        <div class="newsletter">
            <form action="#">
                <div class="newsletter-header">
                    <h3 class="newsletter-title">Subscribe</h3>
                    <p class="newsletter-desc">Subscribe the <b>Beats Store</b> to get latest product and discount
                        update</p>
                </div>

                <input type="email" name="email" class="email-field" id="" placeholder="type your email" required>
                <button type="submit" class="btn-newsletter">Subscribe</button>
            </form>
        </div>
    </div>
</div>
<main>
    <div class="banner">
        <div class="container">
            <div class="slider-container has-scrollbar">
                <div class="slider-item">
                    <img src="<?php echo base_url() ?>assets/img/banner/banner-jam.png" alt="" class="banner-img">

                    <div class="banner-content">
                        <p class="banner-subtitle">Trending Item</p>

                        <h2 class="banner-title">Tranding Item</h2>

                        <p class="banner-text">
                            starting at $ <b>332</b>.80
                        </p>
                        <a href="#" class="banner-btn">Shop Now</a>

                    </div>
                </div>

                <div class="slider-item">
                    <img src="<?php echo base_url() ?>assets/img/banner/banner-handphone.png" alt="" class="banner-img">

                    <div class="banner-content">
                        <p class="banner-subtitle">Trending Item</p>

                        <h2 class="banner-title">Limited Edition</h2>

                        <p class="banner-text">
                            starting at $ <b>928</b>.00
                        </p>
                        <a href="#" class="banner-btn">Shop Now</a>

                    </div>
                </div>

                <div class="slider-item">
                    <img src="<?php echo base_url() ?>assets/img/banner/banner-headphone.png" alt="" class="banner-img">

                    <div class="banner-content">
                        <p class="banner-subtitle">Trending Item</p>

                        <h2 class="banner-title">Special Offer</h2>

                        <p class="banner-text">
                            starting at $ <b>249</b>.60
                        </p>
                        <a href="#" class="banner-btn">Shop Now</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="category">
        <div class="container">
            <div class="category-item-container has-scrollbar">
                <div class="category-item">
                    <div class="category-img-box">
                        <img src="<?php echo base_url() ?>assets/img/logo/handphone.jpg" alt="" width="30">
                    </div>

                    <div class="category-content-box">
                        <div class="category-content-flex">
                            <h3 class="category-item-title">Buah</h3>
                        </div>
                        <a href="<?= base_url('product/showall/barang') ?>" class="category-btn">Show All</a>
                    </div>
                </div>
                <div class="category-item">
                    <div class="category-img-box">
                        <img src="<?php echo base_url() ?>assets/img/logo/handphone.jpg" alt="" width="30">
                    </div>

                    <div class="category-content-box">
                        <div class="category-content-flex">
                            <h3 class="category-item-title">Sayur</h3>
                        </div>
                        <a href="<?= base_url('product/showall/sayur') ?>" class="category-btn">Show All</a>
                    </div>
                </div>
                <div class="category-item">
                    <div class="category-img-box">
                        <img src="<?php echo base_url() ?>assets/img/logo/handphone.jpg" alt="" width="30">
                    </div>

                    <div class="category-content-box">
                        <div class="category-content-flex">
                            <h3 class="category-item-title">Kacang</h3>
                        </div>
                        <a href="<?= base_url('product/showall/kacang') ?>" class="category-btn">Show All</a>
                    </div>
                </div>
                <div class="category-item">
                    <div class="category-img-box">
                        <img src="<?php echo base_url() ?>assets/img/logo/handphone.jpg" alt="" width="30">
                    </div>

                    <div class="category-content-box">
                        <div class="category-content-flex">
                            <h3 class="category-item-title">Rempah</h3>
                        </div>
                        <a href="<?= base_url('product/showall/rempah') ?>" class="category-btn">Show All</a>
                    </div>
                </div>
                <div class="category-item">
                    <div class="category-img-box">
                        <img src="<?php echo base_url() ?>assets/img/logo/handphone.jpg" alt="" width="30">
                    </div>

                    <div class="category-content-box">
                        <div class="category-content-flex">
                            <h3 class="category-item-title">Susu</h3>
                        </div>
                        <a href="<?= base_url('product/showall/susu') ?>" class="category-btn">Show All</a>
                    </div>
                </div>
                <div class="category-item">
                    <div class="category-img-box">
                        <img src="<?php echo base_url() ?>assets/img/logo/handphone.jpg" alt="" width="30">
                    </div>

                    <div class="category-content-box">
                        <div class="category-content-flex">
                            <h3 class="category-item-title">Produk Ternak</h3>
                        </div>
                        <a href="<?= base_url('product/showall/ternak') ?>" class="category-btn">Show All</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-container">
        <div class="container">

            <div class="slidebar has-scrollbar" data-mobile-menu>
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
                                    <img src="<?php echo base_url() ?>assets/img/logo/handphone.jpg" alt="" width="20"
                                        class="menu-title-img">
                                    <p class="menu-title">Kacang</p>
                                </div>

                                <div>
                                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                </div>
                            </button>

                            <ul class="slidebar-submenu-category-list" data-accordion>
                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/kacang tanah') ?>"
                                        class="slidebar-submenu-title">
                                        <p class="product-name">Kacang Tanah</p>
                                        <data value="300" class="stock" title="available stock">58</data>
                                    </a>
                                </li>

                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/kacang polong') ?>"
                                        class="slidebar-submenu-title">
                                        <p class="product-name">Kacang Polong</p>
                                        <data value="300" class="stock" title="available stock">32</data>
                                    </a>
                                </li>

                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/kacang mede') ?>"
                                        class="slidebar-submenu-title">
                                        <p class="product-name">Kacang Mede</p>
                                        <data value="300" class="stock" title="available stock">60</data>
                                    </a>
                                </li>
                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/kacang arab') ?>"
                                        class="slidebar-submenu-title">
                                        <p class="product-name">Kacang Arab</p>
                                        <data value="300" class="stock" title="available stock">60</data>
                                    </a>
                                </li>
                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/kacang panjang') ?>"
                                        class="slidebar-submenu-title">
                                        <p class="product-name">Kacang Panjang</p>
                                        <data value="300" class="stock" title="available stock">60</data>
                                    </a>
                                </li>
                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/kacang almond') ?>"
                                        class="slidebar-submenu-title">
                                        <p class="product-name">Kacang Almond</p>
                                        <data value="300" class="stock" title="available stock">60</data>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="slidebar-menu-category">
                            <button class="slidebar-accordion-menu" data-accordion-btn>
                                <div class="menu-title-flex">
                                    <img src="<?php echo base_url() ?>assets/img/logo/headphone.jpg" alt="" width="20"
                                        height="22" class="menu-title-img">
                                    <p class="menu-title">Sayur dan Buah</p>
                                </div>

                                <div>
                                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                </div>
                            </button>

                            <ul class="slidebar-submenu-category-list" data-accordion>
                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/terong') ?>" class="slidebar-submenu-title">
                                        <p class="product-name">Terong</p>
                                        <data value="300" class="stock" title="available stock">120</data>
                                    </a>
                                </li>

                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/bayam') ?>" class="slidebar-submenu-title">
                                        <p class="product-name">Bayam</p>
                                        <data value="300" class="stock" title="available stock">200</data>
                                    </a>
                                </li>

                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/kangkung') ?>"
                                        class="slidebar-submenu-title">
                                        <p class="product-name">Kangkung</p>
                                        <data value="300" class="stock" title="available stock">150</data>
                                    </a>
                                </li>
                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/tomat') ?>" class="slidebar-submenu-title">
                                        <p class="product-name">Tomat</p>
                                        <data value="300" class="stock" title="available stock">150</data>
                                    </a>
                                </li>
                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/wortel') ?>" class="slidebar-submenu-title">
                                        <p class="product-name">Wortel</p>
                                        <data value="300" class="stock" title="available stock">150</data>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="slidebar-menu-category">
                            <button class="slidebar-accordion-menu" data-accordion-btn>
                                <div class="menu-title-flex">
                                    <img src="<?php echo base_url() ?>assets/img/logo/watch.jpg" alt="" width="20"
                                        class="menu-title-img">
                                    <p class="menu-title">Rempah</p>
                                </div>

                                <div>
                                    <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                    <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                </div>
                            </button>

                            <ul class="slidebar-submenu-category-list" data-accordion>
                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/lengkuas') ?>"
                                        class="slidebar-submenu-title">
                                        <p class="product-name">Lengkuah</p>
                                        <data value="300" class="stock" title="available stock">80</data>
                                    </a>
                                </li>

                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/cengkeh') ?>" class="slidebar-submenu-title">
                                        <p class="product-name">Cengkeh</p>
                                        <data value="300" class="stock" title="available stock">96</data>
                                    </a>
                                </li>

                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/bawang') ?>" class="slidebar-submenu-title">
                                        <p class="product-name">bawang</p>
                                        <data value="300" class="stock" title="available stock">84</data>
                                    </a>
                                </li>
                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/jahe') ?>" class="slidebar-submenu-title">
                                        <p class="product-name">jahe</p>
                                        <data value="300" class="stock" title="available stock">84</data>
                                    </a>
                                </li>
                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/kemiri') ?>" class="slidebar-submenu-title">
                                        <p class="product-name">kemiri</p>
                                        <data value="300" class="stock" title="available stock">84</data>
                                    </a>
                                </li>
                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/kunyit') ?>" class="slidebar-submenu-title">
                                        <p class="product-name">kunyit</p>
                                        <data value="300" class="stock" title="available stock">84</data>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="product-box">
                <div class="product-minimal">
                    <div class="product-showcase">
                        <h2 class="title">New Products</h2>
                        <div class="showcase-wrapper has-scrollbar">
                            <div class="showcase-container">
                                <?php foreach ($products as $product): ?>
                                    <a href=<?= base_url('product/detail/') . $product['id'] ?> class="showcase-img-box">
                                        <div class="showcase">
                                            <img src="<?= base_url() . "assets/img/products/" . $product['image'] ?>" alt=""
                                                width="70" class="showcase-img">
                                            <div class="showcase-content">
                                                <span>
                                                    <h4 class="showcase-title">
                                                        <?= $product['name'] ?>
                                                    </h4>
                                                </span>
                                                <span class="product-description text-dark">
                                                    <?= character_limiter($product['description'], 10) ?>
                                                </span>
                                                <div class="price-box">
                                                    <p class="price text-dark">
                                                        <?= "Rp." . number_format($product['price']) ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                <?php endforeach ?>
                            </div>
                            <div class="showcase-container">
                                <div class="showcase">
                                    <a href="#" class="showcase-img-box">
                                        <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" alt=""
                                            width="70" class="showcase-img">
                                    </a>
                                    <div class="showcase-content">
                                        <a href="#">
                                            <h4 class="showcase-title">Defiant Black Red</h4>
                                        </a>
                                        <a href="#" class="showcase-category">Headphone</a>
                                        <div class="price-box">
                                            <p class="price">$263.99</p>
                                            <del>$349.95</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="showcase">
                                    <a href="#" class="showcase-img-box">
                                        <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" alt=""
                                            width="70" class="showcase-img">
                                    </a>
                                    <div class="showcase-content">
                                        <a href="#">
                                            <h4 class="showcase-title">Shadow Gray</h4>
                                        </a>
                                        <a href="#" class="showcase-category">Headphone</a>
                                        <div class="price-box">
                                            <p class="price">$263.99</p>
                                            <del>$349.95</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="showcase">
                                    <a href="#" class="showcase-img-box">
                                        <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" alt=""
                                            width="70" class="showcase-img">
                                    </a>
                                    <div class="showcase-content">
                                        <a href="#">
                                            <h4 class="showcase-title">Midnight Black</h4>
                                        </a>
                                        <a href="#" class="showcase-category">Headphone</a>
                                        <div class="price-box">
                                            <p class="price">$263.99</p>
                                            <del>$349.95</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="showcase">
                                    <a href="#" class="showcase-img-box">
                                        <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" alt=""
                                            width="70" class="showcase-img">
                                    </a>
                                    <div class="showcase-content">
                                        <a href="#">
                                            <h4 class="showcase-title">Blue</h4>
                                        </a>
                                        <a href="#" class="showcase-category">Headphone</a>
                                        <div class="price-box">
                                            <p class="price">$263.99</p>
                                            <del>$349.95</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-showcase">
                        <h2 class="title">New Products</h2>
                        <div class="showcase-wrapper has-scrollbar">
                            <div class="showcase-container">
                                <div class="showcase">
                                    <a href="#" class="showcase-img-box">
                                        <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" alt=""
                                            width="70" class="showcase-img">
                                    </a>
                                    <div class="showcase-content">
                                        <a href="#">
                                            <h4 class="showcase-title">Matte Black</h4>
                                        </a>
                                        <a href="#" class="showcase-category">Headphone</a>
                                        <div class="price-box">
                                            <p class="price">$263.99</p>
                                            <del>$349.95</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="showcase">
                                    <a href="#" class="showcase-img-box">
                                        <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" alt=""
                                            width="70" class="showcase-img">
                                    </a>
                                    <div class="showcase-content">
                                        <a href="#">
                                            <h4 class="showcase-title">Defiant Black Red</h4>
                                        </a>
                                        <a href="#" class="showcase-category">Headphone</a>
                                        <div class="price-box">
                                            <p class="price">$263.99</p>
                                            <del>$349.95</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="showcase">
                                    <a href="#" class="showcase-img-box">
                                        <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" alt=""
                                            width="70" class="showcase-img">
                                    </a>
                                    <div class="showcase-content">
                                        <a href="#">
                                            <h4 class="showcase-title">Midnight Black</h4>
                                        </a>
                                        <a href="#" class="showcase-category">Headphone</a>
                                        <div class="price-box">
                                            <p class="price">$263.99</p>
                                            <del>$349.95</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="showcase">
                                    <a href="#" class="showcase-img-box">
                                        <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" alt=""
                                            width="70" class="showcase-img">
                                    </a>
                                    <div class="showcase-content">
                                        <a href="#">
                                            <h4 class="showcase-title">Blue</h4>
                                        </a>
                                        <a href="#" class="showcase-category">Headphone</a>
                                        <div class="price-box">
                                            <p class="price">$263.99</p>
                                            <del>$349.95</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="showcase-container">
                                <div class="showcase">
                                    <a href="#" class="showcase-img-box">
                                        <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" alt=""
                                            width="70" class="showcase-img">
                                    </a>
                                    <div class="showcase-content">
                                        <a href="#">
                                            <h4 class="showcase-title">Defiant Black Red</h4>
                                        </a>
                                        <a href="#" class="showcase-category">Headphone</a>
                                        <div class="price-box">
                                            <p class="price">$263.99</p>
                                            <del>$349.95</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="showcase">
                                    <a href="#" class="showcase-img-box">
                                        <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" alt=""
                                            width="70" class="showcase-img">
                                    </a>
                                    <div class="showcase-content">
                                        <a href="#">
                                            <h4 class="showcase-title">Shadow Gray</h4>
                                        </a>
                                        <a href="#" class="showcase-category">Headphone</a>
                                        <div class="price-box">
                                            <p class="price">$263.99</p>
                                            <del>$349.95</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="showcase">
                                    <a href="#" class="showcase-img-box">
                                        <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" alt=""
                                            width="70" class="showcase-img">
                                    </a>
                                    <div class="showcase-content">
                                        <a href="#">
                                            <h4 class="showcase-title">Midnight Black</h4>
                                        </a>
                                        <a href="#" class="showcase-category">Headphone</a>
                                        <div class="price-box">
                                            <p class="price">$263.99</p>
                                            <del>$349.95</del>
                                        </div>
                                    </div>
                                </div>
                                <div class="showcase">
                                    <a href="#" class="showcase-img-box">
                                        <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" alt=""
                                            width="70" class="showcase-img">
                                    </a>
                                    <div class="showcase-content">
                                        <a href="#">
                                            <h4 class="showcase-title">Blue</h4>
                                        </a>
                                        <a href="#" class="showcase-category">Headphone</a>
                                        <div class="price-box">
                                            <p class="price">$263.99</p>
                                            <del>$349.95</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-featured">
                    <h2 class="title">Limited Offer</h2>
                    <div class="showcase-wrapper has-scrollbar">

                        <?php foreach ($products as $product): ?>
                            <?php if (strpos($product['label'], 'lmited') !== false): ?>
                                <div class="showcase-container">
                                    <div class="showcase">
                                        <div class="showcase-banner">
                                            <img src="<?php echo base_url('assets/img/products/') . $product['image'] ?>" class="
                                                showcase-img">
                                        </div>
                                        <div class="showcase-content">
                                            <a href="#">
                                                <h3 class="showcase-title">
                                                    <?= $product['name'] ?>
                                                </h3>
                                            </a>

                                            <p class="showcase-desc">
                                                <?= character_limiter($product['description'], 100) ?>
                                            </p>

                                            <div class="price-box">
                                                <p class="price">
                                                    <?= 'Rp' . number_format($product['price']) ?>
                                                </p>
                                            </div>
                                            <a href="<?= base_url('product/detail/') . $product['id'] ?>">
                                                <button class="details-btn">details</button>
                                            </a>
                                            <div class="showcase-status">
                                                <div class="wrapper">
                                                    <p>Sold : <b><i>35</i></b></p>
                                                    <p>Stock : <b><i>
                                                                <?= $product['stock'] ?>
                                                            </i></b></p>
                                                </div>

                                                <div class="showcase-status-bar"></div>
                                            </div>
                                            <div class="countdown-box">
                                                <p class="countdown-desc">
                                                    Only 10 left in stock - order soon.
                                                </p>

                                                <div class="countdown">
                                                    <div class="countdown-content">
                                                        <p class="display-number">5</p>
                                                        <p class="display-text">days</p>
                                                    </div>
                                                    <div class="countdown-content">
                                                        <p class="display-number">10</p>
                                                        <p class="display-text">hours</p>
                                                    </div>
                                                    <div class="countdown-content">
                                                        <p class="display-number">26</p>
                                                        <p class="display-text">min</p>
                                                    </div>
                                                    <div class="countdown-content">
                                                        <p class="display-number">45</p>
                                                        <p class="display-text">sec</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>



                </div>

                <div class="product-main">
                    <h2 class="title">January Special Price</h2>
                    <div class="product-grid-container">
                        <?php foreach ($products as $product): ?>
                            <?php
                            // Memisahkan string label menjadi array
                            $labelsArray = explode(',', $product['label']);

                            // Mengambil kata pertama dari array
                            $firstLabel = trim($labelsArray[0]);
                            ?>

                            <div class="showcase">
                                <div class="showcase-banner">
                                    <img src="<?php echo base_url('assets/img/products/').$product['image'] ?>" alt="" width="100"
                                        class="product-img default">
                                    <img src="<?php echo base_url('assets/img/products/').$product['image'] ?>" alt="" width="100"
                                        class="product-img hover">
                                        <p class="showcase-bagde angle r-blue">25%</p>
                                </div>

                                <div class="showcase-content">
                                    <a href="<?= base_url('product/showall/').$firstLabel ?>" class="showcase-category"><?= $firstLabel?></a>
                                    <a href="#">
                                        <h3 class="showcase-title"><?= $product['name']?></h3>
                                    </a>
                                    <div class="price-box">
                                        <p class="price"><?= "Rp.".number_format($product['price']-(25/100)*$product['price'])?></p>
                                        <del><?= "Rp.".number_format($product['price'])?></del>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="customers-testimonials-box">
                <div class="testimonials-content">
                    <h2 class="title">Customers Testimonial</h2>
                    <input type="radio" name="" class="btn-slide" id="btn-slide1">
                    <input type="radio" name="" class="btn-slide" id="btn-slide2">
                    <input type="radio" name="" class="btn-slide" id="btn-slide3">
                    <input type="radio" name="" class="btn-slide" id="btn-slide4">
                    <input type="radio" name="" class="btn-slide" id="btn-slide5">
                    <input type="radio" name="" class="btn-slide" id="btn-slide6">
                    <div class="testimonial-wrapper has-scrollbar">
                        <div class="testimonial-card-content">
                            <img src="<?php echo base_url() ?>assets/img/testimonial/billgates.jpg" alt=""
                                class="testimonial-benner" width="80" height="80">
                            <p class="customer-name">billgates</p>
                            <p class="customer-title">CO-Founder of Microsoft</p>
                            <p class="testimonial-description">
                            <blockquote>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. At illo, dicta, aspernatur
                                . Iusto, accusantium autem!
                            </blockquote>
                            </p>
                        </div>
                        <div class="testimonial-card-content">
                            <img src="<?php echo base_url() ?>assets/img/testimonial/daniel.jpg" alt=""
                                class="testimonial-benner" width="80" height="80">
                            <p class="customer-name">daniel</p>
                            <p class="customer-title">CO-Founder of Microsoft</p>
                            <p class="testimonial-description">
                            <blockquote>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. At illo, dicta, aspernatur
                                sequi, voluptas quaerat assumenda ad atque rerum eius mollitia voluptatem incidunt
                                praesentium debitis quisquam aliquid. Iusto, accusantium autem!
                            </blockquote>
                            </p>
                        </div>
                        <div class="testimonial-card-content">
                            <img src="<?php echo base_url() ?>assets/img/testimonial/elonmusk.jpg" alt=""
                                class="testimonial-benner" width="80" height="80">
                            <p class="customer-name">elon musk</p>
                            <p class="customer-title">CO-Founder of Microsoft</p>
                            <p class="testimonial-description">
                            <blockquote>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. At illo, dicta, aspernatur
                                sequi, voluptas quaerat assumenda ad atque rerum eius mollitia voluptatem incidunt
                                praesentium debitis quisquam aliquid. Iusto, accusantium autem!
                            </blockquote>
                            </p>
                        </div>
                        <div class="testimonial-card-content">
                            <img src="<?php echo base_url() ?>assets/img/testimonial/larrypage.jpg" alt=""
                                class="testimonial-benner" width="80" height="80">
                            <p class="customer-name">larry page</p>
                            <p class="customer-title">CO-Founder of Microsoft</p>
                            <p class="testimonial-description">
                            <blockquote>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. At illo, dicta, aspernatur
                                sequi, voluptas quaerat assumenda ad atque rerum eius mollitia voluptatem incidunt
                                praesentium debitis quisquam aliquid. Iusto, accusantium autem!
                            </blockquote>
                            </p>
                        </div>
                        <div class="testimonial-card-content">
                            <img src="<?php echo base_url() ?>assets/img/testimonial/markzuck.jpg" alt=""
                                class="testimonial-benner" width="80" height="80">
                            <p class="customer-name">mark zuckerburg</p>
                            <p class="customer-title">CO-Founder of Microsoft</p>
                            <p class="testimonial-description">
                            <blockquote>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. At illo, dicta, aspernatur
                                sequi, voluptas quaerat assumenda ad atque rerum eius mollitia voluptatem incidunt
                                praesentium debitis quisquam aliquid. Iusto, accusantium autem!
                            </blockquote>
                            </p>
                        </div>
                        <div class="testimonial-card-content">
                            <img src="<?php echo base_url() ?>assets/img/testimonial/patrick.jpg" alt=""
                                class="testimonial-benner" width="80" height="80">
                            <p class="customer-name">patrick</p>
                            <p class="customer-title">CO-Founder of Microsoft</p>
                            <p class="testimonial-description">
                            <blockquote>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. At illo, dicta, aspernatur
                                sequi, voluptas quaerat assumenda ad atque rerum eius mollitia voluptatem incidunt
                                praesentium debitis quisquam aliquid. Iusto, accusantium autem!
                            </blockquote>
                            </p>
                        </div>

                    </div>
                </div>
                <div class="special-offer-container">
                    <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" class="special-offer-benner">
                    <a href="#" class="special-offer-content">
                        <p class="special-offer-discount">25% Discount</p>
                        <h2 class="special-offer-title">Beats<sup>3</sup> Collection</h2>
                        <p class="special-offer-text">starting at $230.95</p>
                        <button class="special-offer-button">Get it Now</button>
                    </a>

                </div>
                <!-- <div class="service">
                        <h2 class="title">Our Services</h2>
                        <div class="service-container">
                            <article class="service-item-container">
                                <a href="#" class="service-item">
                                    <div class="service-icon">
                                        <ion-icon name="boat-outline"></ion-icon>
                                    </div>

                                    <div class="service-item-content">
                                        <h3 class="service-item-title">World Delivery</h3>
                                        <p class="sevice-item-desc">For Order Over $250</p>
                                    </div>
                                </a>
                                <a href="#" class="service-item">
                                    <div class="service-icon">
                                        <ion-icon name="rocket-outline"></ion-icon>
                                    </div>

                                    <div class="service-item-content">
                                        <h3 class="service-item-title">Next Day Delivery</h3>
                                        <p class="sevice-item-desc">USA Only</p>
                                    </div>
                                </a>
                                <a href="#" class="service-item">
                                    <div class="service-icon">
                                        <ion-icon name="call-outline"></ion-icon>
                                    </div>

                                    <div class="service-item-content">
                                        <h3 class="service-item-title">Non Stop Online Support</h3>
                                        <p class="sevice-item-desc">getsupport.ourstore.com</p>
                                    </div>
                                </a>
                                <a href="#" class="service-item">
                                    <div class="service-icon">
                                        <ion-icon name="ticket-outline"></ion-icon>
                                    </div>

                                    <div class="service-item-content">
                                        <h3 class="service-item-title">30% Money Back</h3>
                                        <p class="sevice-item-desc">For Order Over $850</p>
                                    </div>
                                </a>
                                <a href="#" class="service-item">
                                    <div class="service-icon">
                                        <ion-icon name="arrow-undo-outline"></ion-icon>
                                    </div>

                                    <div class="service-item-content">
                                        <h3 class="service-item-title">Return Policy</h3>
                                        <p class="sevice-item-desc">Easy and Free for Return</p>
                                    </div>
                                </a>
                            </article>
                        </div>
                    </div> -->
            </div>
        </div>
    </section>

    <section class="blog">
        <div class="container">
            <div class="blog-container has-scrollbar">
                <div class="blog-card">
                    <a href="#">
                        <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" class="blog-benner"
                            width="300">
                    </a>
                    <div class="blog-content">
                        <a href="#" class="blog-category">headphone</a>
                        <a href="#">
                            <h3 class="blog-title">Beats <sup>3</sup> Headphone </h3>

                            <p class="blog-meta">
                                By <cite>Beats</cite> / <time datetime="2022-14-12">Des 14, 2022</time>
                            </p>
                        </a>
                    </div>
                </div>
                <div class="blog-card">
                    <a href="#">
                        <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" class="blog-benner"
                            width="300">
                    </a>
                    <div class="blog-content">
                        <a href="#" class="blog-category">headphone</a>
                        <a href="#">
                            <h3 class="blog-title">Beats <sup>3</sup> Headphone </h3>

                            <p class="blog-meta">
                                By <cite>Beats</cite> / <time datetime="2022-14-12">Des 14, 2022</time>
                            </p>
                        </a>
                    </div>
                </div>
                <div class="blog-card">
                    <a href="#">
                        <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" class="blog-benner"
                            width="300">
                    </a>
                    <div class="blog-content">
                        <a href="#" class="blog-category">headphone</a>
                        <a href="#">
                            <h3 class="blog-title">Beats <sup>3</sup> Headphone </h3>

                            <p class="blog-meta">
                                By <cite>Beats</cite> / <time datetime="2022-14-12">Des 14, 2022</time>
                            </p>
                        </a>
                    </div>
                </div>
                <div class="blog-card">
                    <a href="#">
                        <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" class=" blog-benner"
                            width="300">
                    </a>
                    <div class="blog-content">
                        <a href="#" class="blog-category">headphone</a>
                        <a href="#">
                            <h3 class="blog-title">Beats <sup>3</sup> Headphone </h3>

                            <p class="blog-meta">
                                By <cite>Beats</cite> / <time datetime="2022-14-12">Des 14, 2022</time>
                            </p>
                        </a>
                    </div>
                </div>
                <div class="blog-card">
                    <a href="#">
                        <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" class=" blog-benner"
                            width="300">
                    </a>
                    <div class="blog-content">
                        <a href="#" class="blog-category">headphone</a>
                        <a href="#">
                            <h3 class="blog-title">Beats <sup>3</sup> Headphone </h3>

                            <p class="blog-meta">
                                By <cite>Beats</cite> / <time datetime="2022-14-12">Des 14, 2022</time>
                            </p>
                        </a>
                    </div>
                </div>
                <div class="blog-card">
                    <a href="#">
                        <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" class="blog-benner"
                            width="300">
                    </a>
                    <div class="blog-content">
                        <a href="#" class="blog-category">headphone</a>
                        <a href="#">
                            <h3 class="blog-title">Beats <sup>3</sup> Headphone </h3>

                            <p class="blog-meta">
                                By <cite>Beats</cite> / <time datetime="2022-14-12">Des 14, 2022</time>
                            </p>
                        </a>
                    </div>
                </div>
                <div class="blog-card">
                    <a href="#">
                        <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" class=" blog-benner"
                            width="300">
                    </a>
                    <div class="blog-content">
                        <a href="#" class="blog-category">headphone</a>
                        <a href="#">
                            <h3 class="blog-title">Beats <sup>3</sup> Headphone </h3>

                            <p class="blog-meta">
                                By <cite>Beats</cite> / <time datetime="2022-14-12">Des 14, 2022</time>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?= $this->endSection('content') ?>