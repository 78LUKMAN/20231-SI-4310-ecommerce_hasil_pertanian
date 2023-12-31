<?= $this->extend('pages/admin/admin_dashboard/main') ?>
<?= $this->section('admin_content') ?>
<?php if (session()->getFlashData('success')): ?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>

<div class="table-responsive">
    <table class="table datatable">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Total Harga</th>
                <th>Ongkir</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (array_reverse($transaksi,true) as $transactionData): ?>

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
                    <td>
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
                                $statusText = 'Dibatalkan';
                                break;
                            default:
                                $statusText = 'Error';
                                $statusClass = 'bg-danger text-white';
                                break;
                        }
                        ?>
                        <div class="rounded w-50 p-2 text-center <?= $statusClass ?>" style="min-width: 120px; max-width:fit-content;">
                            <?= $statusText ?>
                        </div>
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#modal<?= $transactionData['order_id'] ?>">
                            <i class="bi bi-view-list"></i>
                        </button>

                        <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                            data-bs-target="#deleteModal-<?= $transactionData['order_id'] ?>"><i
                                class="bi bi-trash"></i></button>
                    </td>
                </tr>
                <!-- Modal Detail Transaksi -->
                <div class="modal fade" id="modal<?= $transactionData['order_id'] ?>" tabindex="-1"
                    aria-labelledby="modalTitle<?= $transactionData['order_id'] ?>" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitle<?= $transactionData['order_id'] ?>">Detail Transaksi
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?php foreach ($detailTransaksiData as $detailData) { ?>
                                    <?php if ($detailData['transaction_id'] == $transactionData['order_id']) { ?>
                                        <div class="row mt-3">
                                            <div class="col-4">ID Transaksi</div>
                                            <div class="col-1">:</div>
                                            <div class="col-3 fw-normal">
                                                <?= $detailData['transaction_id'] ?>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <?php
                                            foreach ($detailProduk as $dataDetailProduk) {
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
                                        <div class="row " id="heading">
                                            <div class="col-4">Tanggal Transaksi</div>
                                            <div class="col-1">:</div>
                                            <div class="col-4 fw-normal">
                                                <?= $detailData['created_date'] ?>
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="deleteModal-<?= $transactionData['order_id'] ?>" tabindex="-1"
                    aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form action="<?= site_url('admin/transaction/delete/' . $transactionData['order_id']) ?>"
                                method="post">
                                <?= csrf_field() ?>
                                <div class="modal-header">
                                    <h5 class="modal-title text-danger" id="modalLabel">Delete transaction</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to delete this data?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>



            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection() ?>