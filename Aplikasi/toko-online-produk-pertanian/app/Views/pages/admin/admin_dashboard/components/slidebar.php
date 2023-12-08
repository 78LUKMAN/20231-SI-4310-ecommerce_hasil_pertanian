<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href="/">
                <ion-icon name="home-outline"></ion-icon>
                <span>Home</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'cart') ? "" : "collapsed" ?>"
                href="<?php echo base_url() ?>activity/cart">
                <ion-icon name="cart-outline"></ion-icon>
                <span>Cart</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'history') ? "" : "collapsed" ?>"
                href="<?php echo base_url() ?>activity/history">
                <ion-icon name="timer-outline"></ion-icon>
                <span>History</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'product') ? "" : "collapsed" ?>"
                href="<?php echo base_url() ?>admin/products">
                <ion-icon name="logo-dropbox"></ion-icon>
                <span>Products</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'accounts') ? "" : "collapsed" ?>"
                href="<?php echo base_url() ?>admin/accounts">
                <ion-icon name="people-outline"></ion-icon>
                <span>Accounts</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'transaction') ? "" : "collapsed" ?>"
                href="<?php echo base_url() ?>admin/transaction">
                <ion-icon name="wallet-outline"></ion-icon>
                <span>Transactions</span>
            </a>
        </li>

    </ul>

</aside><!-- End Sidebar-->