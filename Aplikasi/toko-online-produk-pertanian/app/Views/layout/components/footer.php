<?php
$current_url = $_SERVER['REQUEST_URI'];
if (strpos($current_url, '/') !== false|| strpos($current_url, 'signup') !== false || strpos($current_url, 'signin') !== false) {
    $class = "";
    $id = "";
}
elseif (strpos($current_url, '/cart') !== false) {
    $class = "footer";
    $id = "footer";
}
else {
    $class = "footer";
    $id = "footer";
}

?>
<footer class="<?php echo $class; ?>" id="<?php echo $id; ?>">
        <div class="footer-nav">
            <div class="container">
                <ul class="nav-list">
                    <li class="nav-item">
                        <h2 class="nav-title">Popular Categories</h2>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="footer-nav-link">Headphone</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="footer-nav-link">Smartphone</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="footer-nav-link">Watch</a>
                    </li>
                </ul>
                <ul class="nav-list">
                    <li class="nav-item">
                        <h2 class="nav-title">Contact</h2>
                    </li>
                    <li class="nav-item flex">
                        <div class="box-icon">
                            <ion-icon name="location-outline"></ion-icon>
                        </div>

                        <address class="content">
                            Pekalongan, Jawa Tengah, Indonesia
                        </address>
                    </li>
                    <li class="nav-item flex">
                        <div class="box-icon">
                            <ion-icon name="call-outline"></ion-icon>
                        </div>
                        <a href="tel:+123032123" class="nav-link">+62 12345 6789</a>
                    </li>
                    <li class="nav-item flex">
                        <div class="box-icon">
                            <ion-icon name="mail-outline"></ion-icon>
                        </div>
                        <a href="mailto:fakemail@gmail.com" class="nav-link">support@gmail.com</a>
                    </li>
                </ul>
                <ul class="nav-list">
                    <li class="nav-item">
                        <h2 class="nav-title">Follow Us</h2>
                    </li>

                    <li>
                        <ul class="social-link">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <ion-icon name="logo-twitter"></ion-icon>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <ion-icon name="logo-linkedin"></ion-icon>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="payment">
                    <h4>Payment Method</h4>
                    <img src="<?php echo base_url() ?>assets/img/sponsor/payment.png" alt="payment method" class="payment-img">
                </div>

            </div>
            <p class="copyright">
                Copyright &copy; <a href="#"> CornerStore </a> all right reserved.
            </p>
        </div>
        </div>
        </div>
    </footer>