<?= $this->extend('pages/admin/admin_dashboard/main') ?>
<?= $this->section('admin_content') ?>
<?php if (session()->getFlashData('success')): ?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif; ?>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newUser">
    &nbsp;<i class="bi bi-plus-square"></i>&nbsp;Tambah User&nbsp;
</button>

<div class="table-responsive">

    <table class="table datatable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Number</th>
                <th scope="col">Address</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $index => $user): ?>
                <tr>
                    <th scope="row">
                        <?= $index + 1 ?>
                    </th>
                    <td>
                        <?= $user['username'] ?>
                    </td>
                    <td>
                        <?= $user['email'] ?>
                    </td>
                    <td>
                        <?= $user['phone'] ?>
                    </td>
                    <td style="max-width:150px">
                        <?= $user['address'] ?>
                    </td>
                    <td>
                        <div class="d-flex">
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#editModal-<?= $user['id'] ?>"><i class="bi bi-pencil-square"></i>
                            </button>&nbsp;
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                data-bs-target="#deleteModal-<?= $user['id']?>"><i class="bi bi-trash"></i></button>

                            <form action="<?= site_url('admin/account/delete/' . $user['id']) ?>" method="post">
                                <?= csrf_field() ?>
                                <div class="modal fade" id="deleteModal-<?= $user['id']?>" tabindex="-1" aria-labelledby="modalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalLabel text-danger">Delete User</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure you want to delete this user?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </td>
                </tr>

                <div class="modal fade" id="editModal-<?= $user['id'] ?>" tabindex="-1">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Password</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <?= form_open('admin/account/edit/' . $user['id'], ['method' => 'post']) ?>
                                <?= csrf_field() ?>
                                <div class="mb-3">
                                    <label for="text" class="form-label">username</label>
                                    <input type="username"
                                        class="form-control <?php echo session()->getFlashdata('failed') ? 'is-invalid' : (session()->getFlashdata() ? 'is-valid' : ''); ?>"
                                        id="username" name="username" placeholder="username"
                                        value="<?php echo session('input_data.username'); ?>" required>
                                    <?php if (session()->getFlashData('failed')): ?>
                                        <div class="text-danger">
                                            <?= session()->getFlashData('failed') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">New Password</label>
                                    <input type="password"
                                        class="form-control <?php echo session('error.password') ? 'is-invalid' : (session('error') ? 'is-valid' : ''); ?>"
                                        id="password" name="password" placeholder="password"
                                        value="<?php echo session('input_data.password'); ?>" required>
                                    <?php if (session()->getFlashdata('error') && session('error.password')): ?>
                                        <div class="text-danger">
                                            <?= session('error.password') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="mb-3">
                                    <label for="confirm_password" class="form-label">Confirm Password</label>
                                    <input type="password"
                                        class="form-control <?php echo session('error.confirm_password') ? 'is-invalid' : (session('error') ? 'is-valid' : ''); ?>"
                                        id="confirm_password" name="confirm_password" placeholder="confirm password"
                                        value="<?php echo session('input_data.confirm_password'); ?>" required>
                                    <?php if (session()->getFlashdata('error') && session('error.confirm_password')): ?>
                                        <div class="text-danger">
                                            <?= session('error.confirm_password') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                                <?= form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>



            <?php endforeach; ?>
            <div class="modal fade" id="newUser"
                style=" <?php echo (session()->getFlashdata('error') ? 'display="block"' : 'display="none"') ?>">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Tambah User Baru</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <?= form_open('admin/account/add', ['method' => 'post']) ?>
                            <?= csrf_field() ?>
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text"
                                        class="form-control <?php echo session('error.name') ? 'is-invalid' : (session('error') ? 'is-valid' : ''); ?>"
                                        id="name" name="name" placeholder="New Username"
                                        value="<?php echo session('input_data.name'); ?>" required>
                                    <?php if (session()->getFlashdata('error') && session('error.name')): ?>
                                        <div class="invalid-feedback">
                                            <?= session('error.name') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text"
                                        class="form-control <?php echo session('error.username') ? 'is-invalid' : (session('error') ? 'is-valid' : ''); ?>"
                                        id="username" name="username" placeholder="New Username"
                                        value="<?php echo session('input_data.username'); ?>" required>
                                    <?php if (session()->getFlashdata('error') && session('error.username')): ?>
                                        <div class="invalid-feedback">
                                            <?= session('error.username') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password"
                                        class="form-control <?php echo session('error.password') ? 'is-invalid' : (session('error') ? 'is-valid' : ''); ?>"
                                        id="password" name="password" placeholder="password"
                                        value="<?php echo session('input_data.password'); ?>" required>
                                    <?php if (session()->getFlashdata('error') && session('error.password')): ?>
                                        <div class="invalid-feedback">
                                            <?= session('error.password') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="form-group">
                                    <label for="confirm_password" class="form-label">Confirm Password</label>
                                    <input type="password"
                                        class="form-control <?php echo session('error.confirm_password') ? 'is-invalid' : (session('error') ? 'is-valid' : ''); ?>"
                                        id="confirm_password" name="confirm_password" placeholder="confirm_password"
                                        value="<?php echo session('input_data.confirm_password'); ?>" required>
                                    <?php if (session()->getFlashdata('error') && session('error.confirm_password')): ?>
                                        <div class="invalid-feedback">
                                            <?= session('error.confirm_password') ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
</div>
</tbody>
</table>
</div>


<?= $this->endSection() ?>