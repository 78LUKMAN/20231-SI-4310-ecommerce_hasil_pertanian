<?= $this->extend('pages/admin/admin_dashboard/main') ?>
<?= $this->section('admin_content') ?>
<?php
if (session()->getFlashData('success')) {
    ?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php
}
?>
<?php if (session()->has('failed')): ?>
    <div class="alert alert-danger">
        <?php echo implode('<br>', session('failed')); ?>
    </div>
<?php endif; ?>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">
    <i class="bi bi-plus-square"></i>&nbsp;Add Product
</button>
<!-- Table with stripped rows -->
<div class="table-responsive">
    <table class="table datatable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Discount</th>
                <th scope="col">Dis-Price</th>
                <th scope="col">Stock</th>
                <th scope="col">Label</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $reverseIndex = array_reverse($products, true);
            foreach ($reverseIndex as $index => $product): ?>
                <tr>
                    <th scope="row">
                        <?php echo $index + 1 ?>
                    </th>
                    <td>
                        <?php echo $product['name'] ?>
                    </td>
                    <td>
                        <?php echo "Rp." . number_format($product['price']) ?>
                    </td>
                    <td>
                        <?php echo $product['discount'] ?>
                    </td>
                    <td>
                        <?php echo "Rp." . number_format($product['disprice']) ?>
                    </td>
                    <td>
                        <?php echo $product['stock'] ?>
                    </td>
                    <td>
                        <?php echo $product['label'] ?>
                    </td>
                    <td>
                        <?php echo character_limiter($product['description'], 20)?>
                    </td>
                    <td><img src="<?php echo base_url() . "assets/img/products/" . $product['image'] ?>" width="100px"></td>
                    <td>
                        <button type="button" class="btn btn-warning mb-1" data-bs-toggle="modal"
                            data-bs-target="#editModal-<?= $product['id'] ?>">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <button type="button" class="btn btn-danger mb-1" data-bs-toggle="modal"
                            data-bs-target="#deleteModal-<?= $product['id'] ?>"><i class="bi bi-trash"></i></button>

                    </td>
                </tr>
                <!-- delete modal -->
                <div class="modal fade" id="deleteModal-<?= $product['id'] ?>" tabindex="-1"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel text-danger">Delete User</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="<?= base_url('admin/product/delete/' . $product['id']) ?>" method="post">
                                <?= csrf_field() ?>
                                <div class="modal-body">
                                    Are you sure you want to delete this product?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Edit Modal Begin -->
                <div class="modal fade" id="editModal-<?= $product['id'] ?>" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="<?= base_url('admin/product/edit/' . $product['id']) ?>" method="post"
                                enctype="multipart/form-data">
                                <?= csrf_field(); ?>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            value="<?= $product['name'] ?>" placeholder="Nama Barang" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Price</label>
                                        <input type="number" name="price" class="form-control" id="price"
                                            value="<?= $product['price'] ?>" placeholder="Harga Barang" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Discount</label>
                                        <input type="number" name="discount" class="form-control" id="discount"
                                            value="<?= $product['discount'] ?>" placeholder="Harga Barang" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Stock</label>
                                        <input type="number" name="stock" class="form-control" id="stock"
                                            value="<?= $product['stock'] ?>" placeholder="Jumlah Barang" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">label</label>
                                        <input type="text" name="label" class="form-control" id="stock"
                                            value="<?= $product['label'] ?>" placeholder="label barang" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Description</label>
                                        <input type="text" name="description" class="form-control" id="description"
                                            value="<?= $product['description'] ?>" placeholder="Keterangan Barang" required>
                                    </div>
                                    <img src="<?php echo base_url() . "/assets/img/products/" . $product['image'] ?>"
                                        width="100px" class="mt-1">
                                    <div class="form-group">
                                        <label for="name">Image</label>
                                        <input type="file" class="form-control" id="image" name="image"
                                            value="<?php echo base_url() . "/assets/img/products/" . $product['image'] ?>">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Edit Modal End -->
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<!-- End Table with stripped rows -->
<!-- Add Modal Begin -->
<div class="modal fade" id="addModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?= form_open('admin/product/add', ['method' => 'post', 'enctype' => 'multipart/form-data']) ?>
            <?= csrf_field(); ?>
            <div class="modal-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nama Barang" value="<?php echo session('input_data.name'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="name">Price</label>
                    <input type="text" name="price" class="form-control" id="price" placeholder="Harga Barang" value="<?php echo session('input_data.price'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="name">Discount (%)</label>
                    <input type="text" name="discount" class="form-control" id="discount" placeholder="ketik angka 0 jika tidak ada diskon" value="<?php echo session('input_data.discount'); ?>"
                        required>
                </div>
                <div class="form-group">
                    <label for="name">Stock</label>
                    <input type="text" name="stock" class="form-control" id="stock" placeholder="Jumlah Barang" value="<?php echo session('input_data.stock'); ?>"
                        required>
                </div>
                <div class="form-group">
                    <label for="label">Label</label>
                    <input type="text" name="label" class="form-control" id="label" placeholder="format => jenis,nama,...[optional] misal: kacang,kacangpanjang,limited" value="<?php echo session('input_data.label'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="name">Description</label>
                    <input type="text" name="description" class="form-control" id="description"
                        placeholder="Keterangan Barang" value="<?php echo session('input_data.description'); ?>" required>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" name="image" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>
<!-- Add Modal End -->
<?= $this->endSection() ?>