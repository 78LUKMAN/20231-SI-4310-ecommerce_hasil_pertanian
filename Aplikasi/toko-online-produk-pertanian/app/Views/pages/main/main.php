<?= $this->extend('layout/layout'); ?>
<?= $this->section('content') ?>
<div class="main-modal" data-modal>
    <div class="main-modal-close-overlay" data-modal-overlay></div>
    <div class="main-modal-content">
        <button class="main-modal-close-btn" data-modal-close>
            <ion-icon name="close-outline"></ion-icon>
        </button>

        <div class="newsletter-img">
            <img src="<?php echo base_url() ?>assets/img/logo/logo.png" alt="subscribe" width="300" height="300">
        </div>
        <div class="newsletter">
            <form action="#">
                <div class="newsletter-header">
                    <h3 class="newsletter-title">Subscribe</h3>
                    <p class="newsletter-desc">Subscribe the <b>Pekalongan Groceria</b> to get latest product and
                        discount
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
                        <h2 class="title">Buah dan Sayuran</h2>

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
                        <h2 class="title">Kacang dan Rempah</h2>

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
                    <h2 class="title">Promo Terbatas</h2>
                    <div class="showcase-wrapper has-scrollbar">
                        <?php
                        $productsLimited = array_filter($products, function ($product) {
                            return $product['discount'] >= 30;
                        });

                        if (empty($productsLimited)) { ?>
                            <div>
                                <p>Promo tidak tersedia</p>
                            </div>
                            <?php
                        } else {
                            $productsLimited = array_reverse($productsLimited, true);
                            foreach ($productsLimited as $product): ?>
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
                                                    <p>Terjual : <b><i>
                                                                <?= $product['sold'] ?>
                                                            </i></b></p>
                                                    <p>Stok : <b><i>
                                                                <?= $product['stock'] ?>
                                                            </i></b></p>
                                                </div>
                                            </div>
                                            <div class="countdown-box">
                                                <p class="countdown-desc">
                                                    Hanya tersisa
                                                    <?= $product['stock'] ?> stok - buruan beli.
                                                </p>
                                                <div class="countdown mt-3" data-id="<?= $product['id'] ?>"
                                                    data-create="<?= $product['updated_at'] ?>">
                                                    <div class="countdown-content">
                                                        <p class="display-number" id="days">5</p>
                                                        <p class="display-text">days</p>
                                                    </div>
                                                    <div class="countdown-content">
                                                        <p class="display-number" id="hours">10</p>
                                                        <p class="display-text">hours</p>
                                                    </div>
                                                    <div class="countdown-content">
                                                        <p class="display-number" id="minutes">26</p>
                                                        <p class="display-text">min</p>
                                                    </div>
                                                    <div class="countdown-content">
                                                        <p class="display-number" id="seconds">45</p>
                                                        <p class="display-text">sec</p>
                                                    </div>
                                                </div>
                                                <p class="mt-3 text-danger fw-bold countdown-desc countdown-end-desc"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php } ?>
                    </div>
                </div>
                <div class="product-main">
                    <h2 class="title">Discount</h2>
                    <div class="product-grid-container">
                        <?php
                        $hasDiscount = false;
                        $products = array_reverse($products, true);
                        foreach ($products as $product): ?>
                            <?php
                            $labelsArray = explode(',', $product['label']);
                            $firstLabel = trim($labelsArray[0]);
                            if ($product['discount'] != 0):
                                $hasDiscount = true ?>
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
                        <?php if ($hasDiscount == false): ?>
                            <div>
                                <p>Belum ada diskon</p>
                            </div>
                        <?php endif ?>

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
                                <img src="<?php echo base_url() ?>assets/img/profile/<?= $feedback['img'] ?>" alt=""
                                    class="testimonial-benner" width="80" height="80">
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
                        <p>belum ada produk yang spesial.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="blog">
        <div class="container">
            <h1 class="title">Tranding Products</h1>
            <div class="blog-container has-scrollbar">
                <?php foreach ($products as $product):
                    $labelsArray = explode(',', $product['label']);
                    $firstLabel = trim($labelsArray[1]);
                    if ($product['sold'] >= 20):
                        ?>
                        <div class="blog-card">
                            <a href="<?= base_url('product/detail/') . $product['id'] ?>">
                                <img src="<?php echo base_url() ?>assets/img/products/<?= $product['image'] ?>"
                                    class="blog-benner" width="100" style="max-width:200px">
                            </a>
                            <div class="blog-content">
                                <a href="#" class="blog-category">
                                    <?= $firstLabel ?>
                                </a>
                            </div>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
        </div>
    </section>
</main>
<?= $this->endSection('content') ?>
<?= $this->section('script') ?>
<script>
    $(document).ready(function () {
        let dataCount = document.querySelectorAll(".countdown")
        dataCount.forEach(element => {
            let data = element.getAttribute('data-create');
            let id = element.getAttribute('data-id');
            let countDownDate = new Date(data);
            countDownDate.setHours(countDownDate.getHours() + 1);
            countDownDate = countDownDate.getTime();
            let x = setInterval(function () {

                let now = new Date().getTime();

                let distance = countDownDate - now;
                distance = Math.max(0, distance);

                let days = Math.floor(distance / (1000 * 60 * 60 * 24));
                let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                let seconds = Math.floor((distance % (1000 * 60)) / 1000);

                $(element).find("#days").text(days);
                $(element).find("#hours").text(hours);
                $(element).find("#minutes").text(minutes);
                $(element).find("#seconds").text(seconds);

                if (distance <= 0) {
                    clearInterval(x);
                    $.post("product/reset/" + id, function (data) {
                        $(".countdown-end-desc").text("Promo berakhir dan harga kembali normal")
                    });
                }
            }, 1000);

        });
    });

</script>
<?= $this->endSection('script') ?>