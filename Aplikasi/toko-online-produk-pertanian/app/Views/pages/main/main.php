<?= $this->extend('layout/layout'); ?>
<?= $this->section('content') ?>

<div class="main-modal" data-modal>
    <div class="main-modal-close-overlay" data-modal-overlay></div>
    <div class="main-modal-content">
        <button class="main-modal-close-btn" data-modal-close>
            <ion-icon name="close-outline"></ion-icon>
        </button>

        <div class="newsletter-img">
            <img src="<?php echo base_url() ?>assets/img/logo/logo.png" alt="subscribe" width="300"
                height="300">
        </div>
        <div class="newsletter">
            <form action="#">
                <div class="newsletter-header">
                    <h3 class="newsletter-title">Subscribe</h3>
                    <p class="newsletter-desc">Subscribe the <b>Pekalongan Groceria</b> to get latest product and discount
                        update</p>
                </div>
                <input type="email" name="email" class="email-field" id="" placeholder="type your email" required>
                <button type="submit" class="btn-newsletter">Subscribe</button>
            </form>
        </div>
    </div>
</div>
<div class="notification-toast" data-toast="">
    <button class="toast-close-btn" data-toast-close="">
        <ion-icon name="close-outline"></ion-icon>
    </button>

    <div class="toast-banner">
        <img src="<?= base_url() ?>assets/img/logo/toast-icon.png" alt="" width="80" height="70">
    </div>

    <div class="toast-detail">
        <a href="activity/feedback">
            <p class="toast-message">
                Hai, Flexitarian
            </p>
            <p class="toast-title">
                <b>Ayo tulis pesanmu</b>
            </p>
            <p class="toast-meta">
                disini
            </p>
        </a>
    </div>
</div>
<main>
    <div class="banner">
        <div class="container">
            <div class="slider-container has-scrollbar">
                <div class="slider-item">
                    <img src="<?php echo base_url() ?>assets/img/banner/grocery-banner.jpg" alt="" class="banner-img">

                    <div class="banner-content">
                        <p class="banner-subtitle">Sayur Segar</p>

                        <h2 class="banner-title">Penuhi Nutrisi Tubuh Anda</h2>

                        <p class="banner-text">
                            mulai dari Rp.<b>10.000</b>,00
                        </p>
                        <a href="#" class="banner-btn">Belanja Sekarang</a>

                    </div>
                </div>

                <div class="slider-item">
                    <img src="<?php echo base_url() ?>assets/img/banner/fruit-banner.jpg" alt="" class="banner-img">

                    <div class="banner-content">
                        <p class="banner-subtitle">Buah - Buahan</p>

                        <h2 class="banner-title">Vitamin dan Nutrisi Tubuh</h2>

                        <p class="banner-text">
                            mulai dari Rp.<b>35.000</b>,00
                        </p>
                        <a href="#" class="banner-btn">Belanja Sekarang</a>

                    </div>
                </div>

                <div class="slider-item">
                    <img src="<?php echo base_url() ?>assets/img/banner/spices-banner.jpg" alt="" class="banner-img">

                    <div class="banner-content">
                        <p class="banner-subtitle">Rempah - Rempah</p>

                        <h2 class="banner-title">Promo Akhir Tahun</h2>

                        <p class="banner-text">
                            mulai dari Rp.<b>12.000</b>,00
                        </p>
                        <a href="#" class="banner-btn">Belanja Sekarang</a>

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
                        <img src="<?php echo base_url() ?>assets/img/logo/fruits.png" alt="" width="30">
                    </div>

                    <div class="category-content-box">
                        <div class="category-content-flex">
                            <h3 class="category-item-title">Buah</h3>
                        </div>
                        <a href="<?= base_url('product/showall/buah') ?>" class="category-btn">Show All</a>
                    </div>
                </div>
                <div class="category-item">
                    <div class="category-img-box">
                        <img src="<?php echo base_url() ?>assets/img/logo/vegetable.png" alt="" width="30">
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
                        <img src="<?php echo base_url() ?>assets/img/logo/nuts.png" alt="" width="30">
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
                        <img src="<?php echo base_url() ?>assets/img/logo/spices.png" alt="" width="30">
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
                        <img src="<?php echo base_url() ?>assets/img/logo/livestock.png" alt="" width="30">
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
                                    <img src="<?php echo base_url() ?>assets/img/logo/nuts.png" alt="" width="20"
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
                                    <a href="<?= base_url('product/showall/kacangtanah') ?>"
                                        class="slidebar-submenu-title">
                                        <p class="product-name">Kacang Tanah</p>
                                    </a>
                                </li>

                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/kacangpolong') ?>"
                                        class="slidebar-submenu-title">
                                        <p class="product-name">Kacang Polong</p>
                                    </a>
                                </li>

                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/kacangmete') ?>"
                                        class="slidebar-submenu-title">
                                        <p class="product-name">Kacang Mete</p>
                                    </a>
                                </li>
                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/kacangarab') ?>"
                                        class="slidebar-submenu-title">
                                        <p class="product-name">Kacang Arab</p>
                                    </a>
                                </li>
                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/kacangpanjang') ?>"
                                        class="slidebar-submenu-title">
                                        <p class="product-name">Kacang Panjang</p>
                                    </a>
                                </li>
                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/kacangalmond') ?>"
                                        class="slidebar-submenu-title">
                                        <p class="product-name">Kacang Almond</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="slidebar-menu-category">
                            <button class="slidebar-accordion-menu" data-accordion-btn>
                                <div class="menu-title-flex">
                                    <img src="<?php echo base_url() ?>assets/img/logo/fruits.png" alt="" width="20"
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
                                    </a>
                                </li>

                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/bayam') ?>" class="slidebar-submenu-title">
                                        <p class="product-name">Bayam</p>
                                    </a>
                                </li>

                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/kangkung') ?>"
                                        class="slidebar-submenu-title">
                                        <p class="product-name">Kangkung</p>
                                    </a>
                                </li>
                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/tomat') ?>" class="slidebar-submenu-title">
                                        <p class="product-name">Tomat</p>
                                    </a>
                                </li>
                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/wortel') ?>" class="slidebar-submenu-title">
                                        <p class="product-name">Wortel</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="slidebar-menu-category">
                            <button class="slidebar-accordion-menu" data-accordion-btn>
                                <div class="menu-title-flex">
                                    <img src="<?php echo base_url() ?>assets/img/logo/spices.png" alt="" width="20"
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
                                        <p class="product-name">Lengkuas</p>
                                    </a>
                                </li>

                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/cengkeh') ?>" class="slidebar-submenu-title">
                                        <p class="product-name">Cengkeh</p>
                                    </a>
                                </li>

                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/bawang') ?>" class="slidebar-submenu-title">
                                        <p class="product-name">bawang</p>
                                    </a>
                                </li>
                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/jahe') ?>" class="slidebar-submenu-title">
                                        <p class="product-name">jahe</p>
                                    </a>
                                </li>
                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/kemiri') ?>" class="slidebar-submenu-title">
                                        <p class="product-name">kemiri</p>
                                    </a>
                                </li>
                                <li class="slidebar-submenu-category">
                                    <a href="<?= base_url('product/showall/kunyit') ?>" class="slidebar-submenu-title">
                                        <p class="product-name">kunyit</p>
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
                        <h2 class="title">Fruits and Vegetables</h2>

                        <div class="showcase-wrapper has-scrollbar">
                            <?php
                            $targetKeywords = ['buah', 'sayur'];
                            $targetIndexes = [];

                            foreach ($products as $index => $product) {
                                $containsKeyword = false;
                                foreach ($targetKeywords as $keyword) {
                                    if (stripos($product['label'], $keyword) !== false) {
                                        $containsKeyword = true;
                                        break;
                                    }
                                }
                                if ($containsKeyword) {
                                    $targetIndexes[] = $index;
                                }
                            }
                            ?>

                            <?php $productsPerContainer = 4; ?>
                            <?php $containerCount = ceil(count($targetIndexes) / $productsPerContainer); ?>

                            <?php for ($i = 0; $i < $containerCount; $i++): ?>
                                <div class="showcase-container">
                                    <?php for ($j = 0; $j < $productsPerContainer; $j++): ?>
                                        <?php $index = $i * $productsPerContainer + $j; ?>
                                        <?php if ($index < count($targetIndexes)): ?>
                                            <?php $productIndex = $targetIndexes[$index]; ?>
                                            <?php $product = $products[$productIndex]; ?>
                                            <div class="showcase">
                                                <a href="<?= base_url('product/detail/') . $product['id'] ?>"
                                                    class="showcase-img-box">
                                                    <img src="<?= base_url() . "assets/img/products/" . $product['image'] ?>" alt=""
                                                        width="70" class="showcase-img">
                                                </a>
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
                                                            <?= "Rp." . number_format($product['disprice']) ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                    <div class="product-showcase">
                        <h2 class="title">Nuts and Spices</h2>

                        <div class="showcase-wrapper has-scrollbar">
                            <?php
                            $targetKeywords = ['kacang', 'rempah'];
                            $targetIndexes = [];

                            foreach ($products as $index => $product) {
                                $containsKeyword = false;
                                foreach ($targetKeywords as $keyword) {
                                    if (stripos($product['label'], $keyword) !== false) {
                                        $containsKeyword = true;
                                        break;
                                    }
                                }
                                if ($containsKeyword) {
                                    $targetIndexes[] = $index;
                                }
                            }
                            ?>

                            <?php $productsPerContainer = 4; ?>
                            <?php $containerCount = ceil(count($targetIndexes) / $productsPerContainer); ?>

                            <?php for ($i = 0; $i < $containerCount; $i++): ?>
                                <div class="showcase-container">
                                    <?php for ($j = 0; $j < $productsPerContainer; $j++): ?>
                                        <?php $index = $i * $productsPerContainer + $j; ?>
                                        <?php if ($index < count($targetIndexes)): ?>
                                            <?php $productIndex = $targetIndexes[$index]; ?>
                                            <?php $product = $products[$productIndex]; ?>
                                            <div class="showcase">
                                                <a href="<?= base_url('product/detail/') . $product['id'] ?>"
                                                    class="showcase-img-box">
                                                    <img src="<?= base_url() . "assets/img/products/" . $product['image'] ?>" alt=""
                                                        width="70" class="showcase-img">
                                                </a>
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
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>

                <div class="product-featured">
                    <h2 class="title">Limited Offer</h2>
                    <div class="showcase-wrapper has-scrollbar">

                        <?php foreach ($products as $product): ?>
                            <?php if (strpos($product['label'], 'limited') !== false): ?>
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
                                                    <?= 'Rp' . number_format($product['disprice']) ?>
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
                    <h2 class="title">Discount</h2>
                    <div class="product-grid-container">
                        <?php foreach ($products as $product): ?>
                            <?php
                            $labelsArray = explode(',', $product['label']);
                            $firstLabel = trim($labelsArray[0]);
                            if ($product['discount'] != 0): ?>
                                <div class="showcase">
                                    <div class="showcase-banner">
                                        <img src="<?php echo base_url('assets/img/products/') . $product['image'] ?>" alt=""
                                            width="100" class="product-img default">
                                        <img src="<?php echo base_url('assets/img/products/') . $product['image'] ?>" alt=""
                                            width="100" class="product-img hover">
                                        <?php if ($product['discount'] != 0): ?>
                                            <?php if ($product['discount'] < 50): ?>
                                                <p class="showcase-bagde angle r-blue">
                                                    <?php echo $product['discount'] ?>%
                                                </p>
                                            <?php else: ?>
                                                <p class="showcase-bagde">
                                                    <?php echo $product['discount'] ?>%
                                                </p>
                                            <?php endif ?>
                                        <?php endif ?>
                                    </div>

                                    <div class="showcase-content">
                                        <a href="<?= base_url('product/showall/') . $firstLabel ?>" class="showcase-category">
                                            <?= $firstLabel ?>
                                        </a>
                                        <a href="<?= base_url('product/detail/') . $product['id'] ?>">
                                            <h3 class="showcase-title">
                                                <?= $product['name'] ?>
                                            </h3>
                                        </a>
                                        <div class="price-box">
                                            <?php if ($product['discount'] != 0) { ?>
                                                <p>
                                                    <?php echo "Rp." . number_format($product['disprice']) ?>
                                                </p>
                                                <del>
                                                    <?php echo "Rp." . number_format($product['price']) ?>
                                                </del>
                                            <?php } else { ?>
                                                <p>
                                                    <?php echo "Rp." . number_format($product['disprice']) ?>
                                                </p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif ?>
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
                        <?php foreach ($feedbacks as $feedback): ?>
                            <div class="testimonial-card-content">
                                <?php $session = session();
                                if (!empty($feedback['img'])): ?>
                                    <img src="<?php echo base_url() ?>assets/img/profile/<?= $feedback['img'] ?>" alt=""
                                        class="testimonial-benner" width="80" height="80">
                                <?php else: ?>
                                    <img src="<?php echo base_url() ?>assets/img/profile/default.png?>" alt=""
                                        class="testimonial-benner" width="80" height="80">
                                <?php endif ?>
                                <p class="customer-name">
                                    <?= $feedback['name'] ?>
                                </p>
                                <p class="customer-title">
                                    <?= $feedback['username'] ?>
                                </p>
                                <p class="testimonial-description">
                                <blockquote>
                                    <?= $feedback['message'] ?>
                                </blockquote>
                                </p>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="special-offer-container">
                    <?php if ($special_offer): ?>
                        <img src="<?php echo base_url() ?>assets/img/products/<?php echo $special_offer['image']; ?>"
                            class="special-offer-benner">
                        <a href="<?= base_url('product/detail/') . $special_offer['id'] ?>" class="special-offer-content">
                            <p class="special-offer-discount">
                                <?php echo "Diskon  " . $special_offer['discount']; ?>%
                            </p>
                            <h2 class="special-offer-title">
                                <?php echo $special_offer['name']; ?>
                            </h2>
                            <p class="special-offer-text">hanya
                                <?php echo "Rp." . number_format($special_offer['disprice']); ?>
                            </p>
                            <button class="special-offer-button">Dapatkan Sekarang</button>
                        </a>
                    <?php else: ?>
                        <p>No special offer available.</p>
                    <?php endif; ?>
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

    <!-- <section class="blog">
        <div class="container">
            <div class="blog-container has-scrollbar">
                <div class="blog-card">
                    <a href="#">
                        <img src="<?php echo base_url() ?>assets/img/products/sayurbuah.jpg" class="blog-benner"
                            width="300">
                    </a>
                    <div class="blog-content">
                        <a href="#" class="blog-category">Sayur</a>
                        <a href="#">
                            <h3 class="blog-title">Lihat Semua</h3>

                            <p class="blog-meta">
                                By <cite>Me</cite> / <time datetime="2022-14-12">Des 14, 2022</time>
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
                        <a href="#" class="blog-category">Sayur</a>
                        <a href="#">
                            <h3 class="blog-title">Lihat Semua</h3>

                            <p class="blog-meta">
                                By <cite>Me</cite> / <time datetime="2022-14-12">Des 14, 2022</time>
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
                        <a href="#" class="blog-category">Sayur</a>
                        <a href="#">
                            <h3 class="blog-title">Lihat Semua</h3>

                            <p class="blog-meta">
                                By <cite>Me</cite> / <time datetime="2022-14-12">Des 14, 2022</time>
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
                        <a href="#" class="blog-category">Sayur</a>
                        <a href="#">
                            <h3 class="blog-title">Lihat Semua</h3>

                            <p class="blog-meta">
                                By <cite>Me</cite> / <time datetime="2022-14-12">Des 14, 2022</time>
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
                        <a href="#" class="blog-category">Sayur</a>
                        <a href="#">
                            <h3 class="blog-title">Lihat Semua</h3>

                            <p class="blog-meta">
                                By <cite>Me</cite> / <time datetime="2022-14-12">Des 14, 2022</time>
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
                        <a href="#" class="blog-category">Sayur</a>
                        <a href="#">
                            <h3 class="blog-title">Lihat Semua</h3>

                            <p class="blog-meta">
                                By <cite>Me</cite> / <time datetime="2022-14-12">Des 14, 2022</time>
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
                        <a href="#" class="blog-category">Sayur</a>
                        <a href="#">
                            <h3 class="blog-title">Lihat Semua</h3>

                            <p class="blog-meta">
                                By <cite>Me</cite> / <time datetime="2022-14-12">Des 14, 2022</time>
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
                        <a href="#" class="blog-category">Sayur</a>
                        <a href="#">
                            <h3 class="blog-title">Lihat Semua</h3>

                            <p class="blog-meta">
                                By <cite>Me</cite> / <time datetime="2022-14-12">Des 14, 2022</time>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
</main>
<?= $this->endSection('content') ?>