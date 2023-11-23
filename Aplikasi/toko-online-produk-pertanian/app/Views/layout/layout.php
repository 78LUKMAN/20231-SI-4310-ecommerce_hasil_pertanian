<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Beats Store">
    <meta name="author" content="Lukmanul Hakim">
    <meta name="keywords" content="ecommers">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/logo/favicon.png" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url() ?>assets/img/logo/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap">

    <title>Beats Store</title>
</head>

<body>

    <div class="overlay" data-overlay></div>
    <div class="modal" data-modal>
        <div class="modal-close-overlay" data-modal-overlay></div>
        <div class="modal-content">
            <button class="modal-close-btn" data-modal-close>
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

    <!-- HEADER -->
    <?= $this->include('layout/components/header') ?>

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
                        <img src="<?php echo base_url() ?>assets/img/banner/banner-handphone.png" alt=""
                            class="banner-img">

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
                        <img src="<?php echo base_url() ?>assets/img/banner/banner-headphone.png" alt=""
                            class="banner-img">

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
                                <p class="category-item-amount">(23)</p>
                            </div>
                            <a href="#" class="category-btn">Show All</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="category-img-box">
                            <img src="<?php echo base_url() ?>assets/img/logo/headphone.jpg" alt="" height="32"
                                width="35">
                        </div>

                        <div class="category-content-box">
                            <div class="category-content-flex">
                                <h3 class="category-item-title">Pupuk</h3>
                                <p class="category-item-amount">(23)</p>
                            </div>
                            <a href="#" class="category-btn">Show All</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="category-img-box">
                            <img src="<?php echo base_url() ?>assets/img/logo/watch.jpg" alt="" width="30">
                        </div>

                        <div class="category-content-box">
                            <div class="category-content-flex">
                                <h3 class="category-item-title">Bibit</h3>
                                <p class="category-item-amount">(23)</p>
                            </div>
                            <a href="#" class="category-btn">Show All</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="category-img-box">
                            <img src="<?php echo base_url() ?>assets/img/logo/headphone.jpg" alt="" height="32"
                                width="35">
                        </div>

                        <div class="category-content-box">
                            <div class="category-content-flex">
                                <h3 class="category-item-title">Alat Pertanian</h3>
                                <p class="category-item-amount">(23)</p>
                            </div>
                            <a href="#" class="category-btn">Show All</a>
                        </div>
                    </div>

                    <div class="category-item">
                        <div class="category-img-box">
                            <img src="<?php echo base_url() ?>assets/img/logo/handphone.jpg" alt="" width="30">
                        </div>

                        <div class="category-content-box">
                            <div class="category-content-flex">
                                <h3 class="category-item-title">watch</h3>
                                <p class="category-item-amount">(23)</p>
                            </div>
                            <a href="#" class="category-btn">Show All</a>
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
                                        <img src="<?php echo base_url() ?>assets/img/logo/handphone.jpg" alt=""
                                            width="20" class="menu-title-img">
                                        <p class="menu-title">Buah</p>
                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>
                                </button>

                                <ul class="slidebar-submenu-category-list" data-accordion>
                                    <li class="slidebar-submenu-category">
                                        <a href="#" class="slidebar-submenu-title">
                                            <p class="product-name">Organik</p>
                                            <data value="300" class="stock" title="available stock">58</data>
                                        </a>
                                    </li>

                                    <li class="slidebar-submenu-category">
                                        <a href="#" class="slidebar-submenu-title">
                                            <p class="product-name">Non Organik</p>
                                            <data value="300" class="stock" title="available stock">32</data>
                                        </a>
                                    </li>

                                    <li class="slidebar-submenu-category">
                                        <a href="#" class="slidebar-submenu-title">
                                            <p class="product-name">GMO</p>
                                            <data value="300" class="stock" title="available stock">60</data>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="slidebar-menu-category">
                                <button class="slidebar-accordion-menu" data-accordion-btn>
                                    <div class="menu-title-flex">
                                        <img src="<?php echo base_url() ?>assets/img/logo/headphone.jpg" alt=""
                                            width="20" height="22" class="menu-title-img">
                                        <p class="menu-title">Pupuk</p>
                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>
                                </button>

                                <ul class="slidebar-submenu-category-list" data-accordion>
                                    <li class="slidebar-submenu-category">
                                        <a href="#" class="slidebar-submenu-title">
                                            <p class="product-name">Pupuk Organik</p>
                                            <data value="300" class="stock" title="available stock">120</data>
                                        </a>
                                    </li>

                                    <li class="slidebar-submenu-category">
                                        <a href="#" class="slidebar-submenu-title">
                                            <p class="product-name">Pupuk Anorganik</p>
                                            <data value="300" class="stock" title="available stock">200</data>
                                        </a>
                                    </li>

                                    <li class="slidebar-submenu-category">
                                        <a href="#" class="slidebar-submenu-title">
                                            <p class="product-name">?</p>
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
                                        <p class="menu-title">Bibit</p>
                                    </div>

                                    <div>
                                        <ion-icon name="add-outline" class="add-icon"></ion-icon>
                                        <ion-icon name="remove-outline" class="remove-icon"></ion-icon>
                                    </div>
                                </button>

                                <ul class="slidebar-submenu-category-list" data-accordion>
                                    <li class="slidebar-submenu-category">
                                        <a href="#" class="slidebar-submenu-title">
                                            <p class="product-name">Bibit generatif</p>
                                            <data value="300" class="stock" title="available stock">80</data>
                                        </a>
                                    </li>

                                    <li class="slidebar-submenu-category">
                                        <a href="#" class="slidebar-submenu-title">
                                            <p class="product-name">Bibit vegetatif</p>
                                            <data value="300" class="stock" title="available stock">96</data>
                                        </a>
                                    </li>

                                    <li class="slidebar-submenu-category">
                                        <a href="#" class="slidebar-submenu-title">
                                            <p class="product-name">Bibit vegetatif-generatif</p>
                                            <data value="300" class="stock" title="available stock">84</data>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>

                    <div class="product-showcase">
                        <h3 class="showcase-heading">Promo!!</h3>
                        <div class="showcase-wrapper">
                            <div class="showcase-container">
                                <div class="showcase">
                                    <a href="#" class="showcase-img-box">
                                        <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" alt=""
                                            class="showcase-img" width="75">
                                    </a>
                                    <div class="showcase-content">
                                        <a href="#">
                                            <h4 class="showcase-title">Product-1</h4>
                                        </a>

                                    

                                        <div class="price-box">
                                            <del>&dollar;360.70</del>
                                            <p class="price">&dollar;246.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="showcase">
                                    <a href="#" class="showcase-img-box">
                                        <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" alt=""
                                            class="showcase-img" width="75">
                                    </a>
                                    <div class="showcase-content">
                                        <a href="#">
                                            <h4 class="showcase-title">Product-2</h4>
                                        </a>

                                     

                                        <div class="price-box">
                                            <del>&dollar;379.70</del>
                                            <p class="price">&dollar;200.15</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="showcase">
                                    <a href="#" class="showcase-img-box">
                                        <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" alt=""
                                            class="showcase-img" width="75">
                                    </a>
                                    <div class="showcase-content">
                                        <a href="#">
                                            <h4 class="showcase-title">Product-3</h4>
                                        </a>

                                       

                                        <div class="price-box">
                                            <del>&dollar;360.99</del>
                                            <p class="price">&dollar;206.20</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-box">
                    <div class="product-minimal">
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
                                                <h4 class="showcase-title">Buah Tomat</h4>
                                            </a>
                                            <a href="#" class="showcase-category">Buah</a>
                                            <div class="price-box">
                                                <p class="price">$200.29</p>
                                                <del>$330.95</del>
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
                                                <h4 class="showcase-title">Bibit Tomat</h4>
                                            </a>
                                            <a href="#" class="showcase-category">16 packs</a>
                                            <div class="price-box">
                                                <p class="price">$283.99</p>
                                                <del>$389.99</del>
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
                                                <h4 class="showcase-title">Multitonik Pupuk Organik Cair</h4>
                                            </a>
                                            <a href="#" class="showcase-category">8 Can</a>
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
                                                <h4 class="showcase-title">Bibit Anggur</h4>
                                            </a>
                                            <a href="#" class="showcase-category">8 Pack</a>
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
                                            <img src="<?php echo base_url() ?>assets/img/products/Anggur.jpg" alt=""
                                                width="70" class="showcase-img">
                                        </a>
                                        <div class="showcase-content">
                                            <a href="#">
                                                <h4 class="showcase-title">Buah Anggur</h4>
                                            </a>
                                            <a href="#" class="showcase-category">Buah-Buahan</a>
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
                                                <h4 class="showcase-title">Shovel</h4>
                                            </a>
                                            <a href="#" class="showcase-category">Alat Pertanian</a>
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
                                                <h4 class="showcase-title">Arit</h4>
                                            </a>
                                            <a href="#" class="showcase-category">Alat Pertanian</a>
                                            <div class="price-box">
                                                <p class="price">$263.99</p>
                                                <del>$349.95</del>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="showcase">
                                        <a href="#" class="showcase-img-box">
                                            <img src="<?php echo base_url() ?>assets/img/products/Mangga.jpg" alt=""
                                                width="70" class="showcase-img">
                                        </a>
                                        <div class="showcase-content">
                                            <a href="#">
                                                <h4 class="showcase-title">Buah Mangga</h4>
                                            </a>
                                            <a href="#" class="showcase-category">Buah-Buahan</a>
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
                                                <h4 class="showcase-title">Sayur Seledri</h4>
                                            </a>
                                            <a href="#" class="showcase-category">Sayuran</a>
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
                                                <h4 class="showcase-title">Sayur Kol</h4>
                                            </a>
                                            <a href="#" class="showcase-category">Sayuran</a>
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
                                                <h4 class="showcase-title">Buah Durian</h4>
                                            </a>
                                            <a href="#" class="showcase-category">Buah-Buahan</a>
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
                                                <h4 class="showcase-title">Bibit Kacang Hijau</h4>
                                            </a>
                                            <a href="#" class="showcase-category">Bibit</a>
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
                                                <h4 class="showcase-title">Pupuk Karung 5KG</h4>
                                            </a>
                                            <a href="#" class="showcase-category">Pupuk</a>
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
                                                <h4 class="showcase-title">Pupuk Karung 10KG</h4>
                                            </a>
                                            <a href="#" class="showcase-category">Pupuk</a>
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
                                                <h4 class="showcase-title">Bibit Kentang</h4>
                                            </a>
                                            <a href="#" class="showcase-category">Bibit</a>
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
                                                <h4 class="showcase-title">Tomat 5KG</h4>
                                            </a>
                                            <a href="#" class="showcase-category">Buah</a>
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
                            <div class="showcase-container">
                                <div class="showcase">
                                    <div class="showcase-banner">
                                        <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg"" class="
                                            showcase-img">
                                    </div>
                                    <div class="showcase-content">
                                       
                                        <a href="#">
                                            <h3 class="showcase-title">Pupuk 10KG<sup></sup> Organik 
                                                </h3>
                                        </a>

                                        <p class="showcase-desc">
                                        Pupuk 10kg adalah solusi yang praktis dan efektif untuk meningkatkan produktivitas tanaman Anda. 
                                        Dirancang khusus untuk pemilik kebun, petani, dan pecinta tanaman, pupuk ini hadir dalam kemasan 10 kilogram yang cukup untuk jangka waktu yang cukup lama. 
                                        </p>

                                        <div class="price-box">
                                            <p class="price">$263</p>
                                            <del>$389.99</del>
                                        </div>

                                        <button class="details-btn">details</button>
                                        <div class="showcase-status">
                                            <div class="wrapper">
                                                <p>Sold : <b><i>35</i></b></p>
                                                <p>Stock : <b><i>10</i></b></p>
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
                            <div class="showcase-container">
                                <div class="showcase">
                                    <div class="showcase-banner">
                                        <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg"" class="
                                            showcase-img">
                                    </div>
                                    <div class="showcase-content">
                                      
                                        <a href="#">
                                            <h3 class="showcase-title">Tomat 5KG<sup></sup> GMO
                                                </h3>
                                        </a>

                                        <p class="showcase-desc">
                                        Tomat 5kg GMO adalah varietas tomat yang telah dimodifikasi secara genetik untuk menghasilkan buah-buahan yang lebih besar dan tahan terhadap hama. 
                                        Kemasan 5 kilogram ini ideal untuk penggemar tomat yang ingin menikmati hasil panen yang melimpah. 
                                        </p>

                                        <div class="price-box">
                                            <p class="price">$263</p>
                                            <del>$349.95</del>
                                        </div>

                                        <button class="details-btn">details</button>
                                        <div class="showcase-status">
                                            <div class="wrapper">
                                                <p>Sold : <b><i>35</i></b></p>
                                                <p>Stock : <b><i>10</i></b></p>
                                            </div>

                                            <div class="showcase-status-bar"></div>
                                        </div>
                                        <div class="countdown-box">
                                            <p class="countdown-desc">
                                                Only 10 left in stock - order soon.
                                            </p>

                                            <div class="countdown">
                                                <div class="countdown-content">
                                                    <p class="display-number">3</p>
                                                    <p class="display-text">days</p>
                                                </div>
                                                <div class="countdown-content">
                                                    <p class="display-number">1</p>
                                                    <p class="display-text">hours</p>
                                                </div>
                                                <div class="countdown-content">
                                                    <p class="display-number">12</p>
                                                    <p class="display-text">min</p>
                                                </div>
                                                <div class="countdown-content">
                                                    <p class="display-number">5</p>
                                                    <p class="display-text">sec</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="showcase-container">
                                <div class="showcase">
                                    <div class="showcase-banner">
                                        <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg"" class="
                                            showcase-img">
                                    </div>
                                    <div class="showcase-content">
                                       
                                        <a href="#">
                                            <h3 class="showcase-title">Multitonik Pupuk Organik Cair<sup></sup> 
                                                </h3>
                                        </a>

                                        <p class="showcase-desc">
                                        Multitonik Pupuk Organik Cair adalah solusi unggul bagi pertumbuhan tanaman Anda. 
                                        Merupakan pupuk organik cair yang kaya akan nutrisi alami, Multitonik membantu tanaman Anda berkembang subur, dengan akar yang kuat dan dedaunan yang hijau. 
                                        Formula khususnya dirancang untuk memberikan nutrisi seimbang, memaksimalkan hasil panen, dan menjaga tanaman Anda tetap sehat. 
                                        Cobalah Multitonik sekarang untuk melihat perbedaannya dalam kebun atau pertanian Anda.
                                        </p>

                                        <div class="price-box">
                                            <p class="price">$263</p>
                                            <del>$300.95</del>
                                        </div>

                                        <button class="details-btn">details</button>
                                        <div class="showcase-status">
                                            <div class="wrapper">
                                                <p>Sold : <b><i>35</i></b></p>
                                                <p>Stock : <b><i>10</i></b></p>
                                            </div>

                                            <div class="showcase-status-bar"></div>
                                        </div>
                                        <div class="countdown-box">
                                            <p class="countdown-desc">
                                                Only 10 left in stock - order soon.
                                            </p>

                                            <div class="countdown">
                                                <div class="countdown-content">
                                                    <p class="display-number">4</p>
                                                    <p class="display-text">days</p>
                                                </div>
                                                <div class="countdown-content">
                                                    <p class="display-number">4</p>
                                                    <p class="display-text">hours</p>
                                                </div>
                                                <div class="countdown-content">
                                                    <p class="display-number">6</p>
                                                    <p class="display-text">min</p>
                                                </div>
                                                <div class="countdown-content">
                                                    <p class="display-number">15</p>
                                                    <p class="display-text">sec</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="display-details has-scrollbar">
                            <div class="product-details-content">
                                <button class="modal-close-btn" details-popup-close>
                                    <ion-icon name="close-outline"></ion-icon>
                                </button>
                                <div class="product-content">
                                    <div>
                                        <img width="200" class="detail-product-img" alt="">
                                        <div class="detail-btn-actions">
                                            <div class="item-btn">Add to Cart</div>
                                            <div class="item-btn">Favorite</div>
                                        </div>
                                    </div>
                                    <div class="product-desc has-scrollbar">

                                        <div class="product-title"></div>
                                        <p class="item-desc">Beats Studio 3 wireless over-ear headphones delivers
                                            premium sound while
                                            blocking external naoise with active noise calcelling.</p>
                                        <h3>Price</h3>
                                        <div class="price-box">
                                            <p class="price price-now"></p>
                                            <del class="del-price"></del>
                                        </div>
                                        <h3>Rating</h3>
                                     


                                        <table>
                                            <tr>
                                                <td>Brand</td>
                                                <td>Beats</td>
                                            </tr>
                                            <tr>
                                                <td>Model Name</td>
                                                <td>Beats Studio<sup>3</sup></td>
                                            </tr>
                                            <tr>
                                                <td>Color</td>
                                                <td id="item-color"></td>
                                            </tr>
                                            <tr>
                                                <td>Form Factor</td>
                                                <td>Over Ear</td>
                                            </tr>
                                            <tr>
                                                <td>Connectivity</td>
                                                <td>Wireless, Wires, NFC</td>
                                            </tr>
                                        </table>

                                        <div class="desc-title">About this item :</div>
                                        <div class="desc-content">
                                            <ul>
                                                <li>High-performance wireless noise cancelling headphones</li>
                                                <li>Compatible with iOS and Android devices.</li>
                                                <li>Pure adaptive noise canceling (pure ANC) actively blocks external
                                                    noise
                                                </li>
                                                <li>Real-time Audio calibration preserves a Premium listening experience
                                                </li>
                                                <li>Up to 22 hours of battery life enables full-featured all-day
                                                    wireless
                                                    playback</li>
                                                <li>Apple's W1 chip and industry-leading Bluetooth technology keep you
                                                    connected farther with fewer drop-outs</li>
                                                <li>With fast Fuel, a 10-minute charge gives 3 hours of play when
                                                    battery is
                                                    low. Rechargeable lithium ion battery</li>
                                                <li>Take calls, control your music, and activate Siri with the
                                                    multifunction
                                                    on-ear controls and microphone</li>
                                                <li>What's in the box: Beats Studio3 Wireless headphones, Carrying case,
                                                    3.5mm RemoteTalk cable, Universal USB charging cable, Quick Start
                                                    Guide,
                                                    Warranty Card</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="product-main">
                        <h2 class="title">January Special Price</h2>
                        <div class="product-grid-container">
                            <div class="showcase">
                                <div class="showcase-banner">
                                    <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" alt=""
                                        width="100" class="product-img default">
                                    <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" alt=""
                                        width="100" class="product-img hover">

                                    <p class="showcase-bagde angle r-blue">25%</p>
                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>
                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>
                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">Buah</a>
                                    <a href="#">
                                        <h3 class="showcase-title">Buah Anggur<sup></sup></h3>
                                    </a>

                                 
                                    <div class="price-box">
                                        <p class="price">$262.46</p>
                                        <del>$349.95</del>
                                    </div>
                                </div>
                            </div>
                            <div class="showcase">
                                <div class="showcase-banner">
                                    <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" alt=""
                                        width="300" class="product-img default">
                                    <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" alt=""
                                        width="300" class="product-img hover">

                                    <p class="showcase-bagde">31%</p>
                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>
                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>
                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">Pupuk</a>
                                    <a href="#">
                                        <h3 class="showcase-title">Pupuk Organik 5KG<sup></sup></h3>
                                    </a>

                                  
                                    <div class="price-box">
                                        <p class="price">$241.47</p>
                                        <del>$349.95</del>
                                    </div>
                                </div>
                            </div>
                            <div class="showcase">
                                <div class="showcase-banner">
                                    <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" alt=""
                                        width="300" class="product-img default">
                                    <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" alt=""
                                        width="300" class="product-img hover">

                                    <p class="showcase-bagde angle r-blue">25%</p>
                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>
                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>
                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">Bibit</a>
                                    <a href="#">
                                        <h3 class="showcase-title">Bibit Tomat<sup></sup></h3>
                                    </a>

                                  

                                    <div class="price-box">
                                        <p class="price">$262.46</p>
                                        <del>$349.95</del>
                                    </div>
                                </div>
                            </div>
                            <div class="showcase">
                                <div class="showcase-banner">
                                    <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" alt=""
                                        width="300" class="product-img default">
                                    <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" alt=""
                                        width="300" class="product-img hover">

                                    <p class="showcase-bagde">31%</p>
                                    <div class="showcase-actions">
                                        <button class="btn-action">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>
                                        <button class="btn-action">
                                            <ion-icon name="eye-outline"></ion-icon>
                                        </button>
                                        <button class="btn-action">
                                            <ion-icon name="repeat-outline"></ion-icon>
                                        </button>
                                    </div>
                                </div>

                                <div class="showcase-content">
                                    <a href="#" class="showcase-category">Sayuran</a>
                                    <a href="#">
                                        <h3 class="showcase-title">Sayur Kol<sup></sup></h3>
                                    </a>

                                    

                                    <div class="price-box">
                                        <p class="price">$241.47</p>
                                        <del>$349.95</del>
                                    </div>
                                </div>
                            </div>
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
                        <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg"
                            class="special-offer-benner">
                        <a href="#" class="special-offer-content">
                            <p class="special-offer-discount">15% Discount</p>
                            <h2 class="special-offer-title">Pupuk<sup></sup> 10KG</h2>
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
                            <a href="#" class="blog-category">Bibit</a>
                            <a href="#">
                                <h3 class="blog-title">Bibit <sup></sup> Tomat </h3>

                                <p class="blog-meta">
                                    By <cite>USA</cite> / <time datetime="2022-14-12">Des 14, 2022</time>
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
                            <a href="#" class="blog-category">Buah</a>
                            <a href="#">
                                <h3 class="blog-title">Buah<sup></sup> Mangga </h3>

                                <p class="blog-meta">
                                    By <cite>New Zealand</cite> / <time datetime="2022-14-12">Des 14, 2022</time>
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
                            <a href="#" class="blog-category">Pupuk</a>
                            <a href="#">
                                <h3 class="blog-title">Pupuk <sup></sup> Organik</h3>

                                <p class="blog-meta">
                                    By <cite>Indonesia</cite> / <time datetime="2022-14-12">Des 14, 2022</time>
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="blog-card">
                        <a href="#">
                            <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg"" class=" blog-benner"
                                width="300">
                        </a>
                        <div class="blog-content">
                            <a href="#" class="blog-category">Sayur</a>
                            <a href="#">
                                <h3 class="blog-title">Sayur <sup></sup> Seledri </h3>

                                <p class="blog-meta">
                                    By <cite>Dieng</cite> / <time datetime="2022-14-12">Des 14, 2022</time>
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="blog-card">
                        <a href="#">
                            <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg"" class=" blog-benner"
                                width="300">
                        </a>
                        <div class="blog-content">
                            <a href="#" class="blog-category">Alat Pertanian</a>
                            <a href="#">
                                <h3 class="blog-title">Metal <sup></sup> Shovel</h3>

                                <p class="blog-meta">
                                    By <cite>Germany</cite> / <time datetime="2022-14-12">Des 14, 2022</time>
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
                            <a href="#" class="blog-category">Telur</a>
                            <a href="#">
                                <h3 class="blog-title">Telur <sup></sup> GMO </h3>

                                <p class="blog-meta">
                                    By <cite>Australia</cite> / <time datetime="2022-14-12">Des 14, 2022</time>
                                </p>
                            </a>
                        </div>
                    </div>
                    <div class="blog-card">
                        <a href="#">
                            <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg"" class=" blog-benner"
                                width="300">
                        </a>
                        <div class="blog-content">
                            <a href="#" class="blog-category">Buah</a>
                            <a href="#">
                                <h3 class="blog-title">Durian <sup></sup> Musang King </h3>

                                <p class="blog-meta">
                                    By <cite>Malaysia</cite> / <time datetime="2022-14-12">Des 14, 2022</time>
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


    <!-- FOOTER -->
    <?= $this->include('layout/components/footer') ?>


    <script src="<?php echo base_url() ?>assets/third-assets/apexcharts/apexcharts.min.js"></script>
    <script src="<?php echo base_url() ?>assets/third-assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url() ?>assets/third-assets/chart.js/chart.min.js"></script>
    <script src="<?php echo base_url() ?>assets/third-assets/echarts/echarts.min.js"></script>
    <script src="<?php echo base_url() ?>assets/third-assets/quill/quill.min.js"></script>
    <script src="<?php echo base_url() ?>assets/third-assets/simple-datatables/simple-datatables.js"></script>
    <script src="<?php echo base_url() ?>assets/third-assets/tinymce/tinymce.min.js"></script>
    <script src="<?php echo base_url() ?>assets/third-assets/php-email-form/validate.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url() ?>assets/js/script.js"></script>
</body>

</html>