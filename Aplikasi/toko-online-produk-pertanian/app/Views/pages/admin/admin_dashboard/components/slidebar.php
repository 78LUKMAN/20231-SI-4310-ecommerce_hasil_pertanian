<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href=".">
                <ion-icon name="home-outline"></ion-icon>
                <span>Home</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'keranjang') ? "" : "collapsed" ?>"
                href="<?php echo base_url() ?>keranjang">
                <ion-icon name="cart-outline"></ion-icon>
                <span>Cart</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'riwayat') ? "" : "collapsed" ?>"
                href="<?php echo base_url() ?>riwayat">
                <ion-icon name="timer-outline"></ion-icon>
                <span>History</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'produk') ? "" : "collapsed" ?>"
                href="<?php echo base_url() ?>produk">
                <ion-icon name="logo-dropbox"></ion-icon>
                <span>Products</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'users') ? "" : "collapsed" ?>"
                href="<?php echo base_url() ?>users">
                <ion-icon name="people-outline"></ion-icon>
                <span>Management Users</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'transaksi') ? "" : "collapsed" ?>"
                href="<?php echo base_url() ?>transaksi">
                <ion-icon name="wallet-outline"></ion-icon>
                <span>Transaction</span>
            </a>
        </li>

    </ul>

</aside><!-- End Sidebar-->