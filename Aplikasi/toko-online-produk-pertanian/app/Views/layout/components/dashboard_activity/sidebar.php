<aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link <?php echo (uri_string()==base_url())?"":"collapsed"?>" href="/">
                    <i class="bi bi-grid"></i>
                    <span>Home</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php echo (uri_string()=='cart')?"":"collapsed"?>" href="<?php echo base_url() ?>cart">
                    <i class="bi bi-cart-check"></i>
                    <span>Keranjang</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link  <?php echo (uri_string()=='history')?"":"collapsed"?>" href="<?php echo base_url() ?>history">
                    <i class="bi bi-clock-history"></i>
                    <span>Riwayat Belanja</span>
                </a>
            </li>
            <?php
            if (session()->get('role') == 'admin') {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url() ?>products">
                        <i class="bi bi-receipt"></i>
                        <span>Produk</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url() ?>users">
                        <i class="bi bi-people"></i>
                        <span>Manajemen User</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url() ?>transaction">
                        <i class="bi bi-wallet2"></i>
                        <span>Transaksi</span>
                    </a>
                </li>
                <?php
            }
            ?>
        </ul>
    </aside>