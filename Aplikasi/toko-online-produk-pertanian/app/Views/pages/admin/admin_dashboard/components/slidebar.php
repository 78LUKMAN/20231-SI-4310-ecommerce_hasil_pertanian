<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href=".">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'keranjang') ? "" : "collapsed" ?>"
                href="<?php echo base_url() ?>keranjang">
                <i class="bi bi-cart-check"></i>
                <span>Cart</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'riwayat') ? "" : "collapsed" ?>"
                href="<?php echo base_url() ?>riwayat">
                <i class="bi bi-clock-history"></i>
                <span>History</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'produk') ? "" : "collapsed" ?>"
                href="<?php echo base_url() ?>produk">
                <i class="bi bi-receipt"></i>
                <span>Products</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'users') ? "" : "collapsed" ?>"
                href="<?php echo base_url() ?>users">
                <i class="bi bi-people"></i>
                <span>Management Users</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'transaksi') ? "" : "collapsed" ?>"
                href="<?php echo base_url() ?>transaksi">
                <i class="bi bi-wallet2"></i>
                <span>Transaction</span>
            </a>
        </li>

    </ul>

</aside><!-- End Sidebar-->