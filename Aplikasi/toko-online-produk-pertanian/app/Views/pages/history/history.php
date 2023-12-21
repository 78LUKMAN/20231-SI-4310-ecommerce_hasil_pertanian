<?= $this->extend('layout/layout') ?>

<?= $this->section('content') ?>
<main class="container">

    <div class="pagetitle" id="pagetitle">
        <h1>Shopping History</h1>
        <?php
        $hasPending = false;
        $pendingOrders = [];

        ?>
        <?php if (!empty($pendingOrders)): ?>
            <div class="pagetitle">
                <h1>Shopping History</h1>
                <form action="<?= base_url('updatestatuscontroller/update_status_batch') ?>" method="post">
                    <input type="hidden" name="order_ids" value="<?= implode(',', $pendingOrders) ?>">
                    <button type="submit" class="btn btn-primary">Update Status</button>
                </form>
            </div><!-- End Page Title -->
        <?php endif; ?>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <span><br></span>
                        <!-- Table with stripped rows -->
                        <div class="table-responsive">
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Total Price</th>
                                        <th scope="col">Postage</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                        <th>
                                            <form action="update/status"></form>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach (array_reverse($transaction, true) as $transactionData): ?>
                                        <tr>
                                            <td>
                                                <?= $transactionData['name'] ?>
                                            </td>
                                            <td>
                                                <?= "Rp." . number_format($transactionData['total']) ?>
                                            </td>
                                            <td>
                                                <?= "Rp." . number_format($transactionData['fare']) ?>
                                            </td>
                                            <td class="text-center">
                                                <?php
                                                $statusClass = '';

                                                switch ($transactionData['status']) {
                                                    case "404":
                                                        $statusClass = 'bg-danger text-white';
                                                        $statusText = 'Belum Bayar';
                                                        break;
                                                    case "pending":
                                                        $statusClass = 'bg-warning text-white';
                                                        $statusText = 'Menunggu';
                                                        break;
                                                    case "settlement":
                                                        $statusClass = 'bg-success text-white';
                                                        $statusText = 'Lunas';
                                                        break;
                                                    case "cancel":
                                                        $statusClass = 'bg-danger text-white';
                                                        $statusText = 'Dibatalkal';
                                                        break;
                                                    default:
                                                        $statusText = 'Error';
                                                        $statusClass = 'bg-danger text-white';
                                                        break;
                                                }

                                                if (($transactionData['status']) != "settlement") {
                                                    $pendingOrders[] = $transactionData['order_id'];
                                                }
                                                ?>


                                                <div class="rounded p-2 <?= $statusClass ?>"
                                                    style="min-width: 120px; max-width:fit-content;">
                                                    <?= $statusText ?>
                                                </div>

                                            </td>
                                            <td style="display: flex; gap: 2px;">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne<?= $transactionData['order_id'] ?>">
                                                    <i class="bi bi-view-list"></i>
                                                </button>
                                                <?php if ($transactionData['status'] != 200): ?>
                                                    <button type="button" class="btn btn-warning" id="snap-pay"
                                                        data-token="<?= $transactionData['token'] ?>">Bayar</button>

                                                <?php endif ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <div class="accordion accordion-collapse" id="accordionDetailTransaksi">
                                                    <div class="accordion-item">
                                                        <div id="collapseOne<?= $transactionData['order_id'] ?>"
                                                            class="accordion-collapse collapse" aria-labelledby="headingOne"
                                                            data-bs-parent="#accordionDetailTransaksi">
                                                            <div class="accordion-body">
                                                                <p class="fs-5 fw-bold">Detail Transaksi</p>
                                                                <?php foreach ($detailTransactionData as $detailData) { ?>
                                                                    <?php if ($detailData['transaction_id'] == $transactionData['order_id']) { ?>
                                                                        <div class="row">
                                                                            <div class="col-4">ID Transaksi</div>
                                                                            <div class="col-1">:</div>
                                                                            <div class="col-3 fw-normal">
                                                                                <?= $detailData['transaction_id'] ?>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <?php
                                                                            foreach ($detailProduct as $dataDetailProduk) {
                                                                                if ($detailData['product_id'] == $dataDetailProduk['id']) {
                                                                                    ?>
                                                                                    <div class="col-4">Nama Barang</div>
                                                                                    <div class="col-1">:</div>
                                                                                    <div class="col-3 fw-normal">
                                                                                        <?php echo $dataDetailProduk['name']; ?>
                                                                                    </div>
                                                                                    <?php
                                                                                }
                                                                            }
                                                                            ?>
                                                                        </div>

                                                                        <div class="row " id="heading">
                                                                            <div class="col-4">Jumlah Barang</div>
                                                                            <div class="col-1">:</div>
                                                                            <div class="col-3 fw-normal">
                                                                                <?= $detailData['quantity'] ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row " id="heading">
                                                                            <div class="col-4">Subtotal [tanpa ongkir]</div>
                                                                            <div class="col-1">:</div>
                                                                            <div class="col-3 fw-normal">
                                                                                <?= "Rp." . number_format($detailData['subtotal']) ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-5" id="heading">
                                                                            <div class="col-4">Tanggal Transaksi</div>
                                                                            <div class="col-1">:</div>
                                                                            <div class="col-4 fw-normal">
                                                                                <?= $detailData['created_date'] ?>
                                                                            </div>
                                                                        </div>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Modal Detail Transaksi -->
                                        <div class="modal fade" id="modal<?= $transactionData['order_id'] ?>" tabindex="-1"
                                            aria-labelledby="modalTitle<?= $transactionData['order_id'] ?>"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header" style="background-color:#006193">
                                                        <h5 class="modal-title fw-6 text-light"
                                                            id="modalTitle<?= $transactionData['order_id'] ?>">
                                                            Detail Transaksi</h5>
                                                    </div>
                                                    <div class="modal-body modal-lg">

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
</div>
<?= $this->section('script') ?>
<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
    data-client-key="<?= $client_key ?>"></script>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        let payButtons = document.querySelectorAll('#snap-pay');
        payButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                let token = this.getAttribute('data-token');
                window.snap.pay(token);
            })
        })
    })

</script>
<?= $this->endSection() ?>
<?php if (!empty($pendingOrders)): ?>

    <script>

        document.addEventListener('DOMContentLoaded', function () {
            const parent = document.getElementById('pagetitle')
            const form = document.createElement('form');
            form.action = '<?= base_url('activity/statusupdate') ?>';
            form.method = 'post';

            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'order_ids';
            input.value = '<?= implode(',', $pendingOrders) ?>';

            const button = document.createElement('button');
            button.type = 'submit';
            button.className = 'btn btn-primary mt-3';
            button.textContent = 'Update Status';

            form.appendChild(input);
            form.appendChild(button);

            parent.appendChild(form);
        });
    </script>
<?php endif ?>
<?= $this->endSection('content') ?>