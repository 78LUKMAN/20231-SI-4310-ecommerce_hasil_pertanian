<?= $this->extend('layout/layout') ?>
<?= $this->section('content') ?>

<section class="section profile profile-content">
    <h1>Profile</h1>
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    <?php if ($userData['img']): ?>
                        <img src="<?php echo base_url() ?>assets/img/profile/<?= $userData['img'] ?>" alt="Profile"
                            class="rounded-circle">
                    <?php else: ?>
                        <img src="<?php echo base_url() ?>assets/img/profile/default.png" alt="Profile"
                            class="rounded-circle">
                    <?php endif ?>
                    <h2>
                        <?= session()->get('name') ?>
                    </h2>
                    <h3>
                        <?= session()->get('role') ?>
                    </h3>
                    <div class="social-links mt-2">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-8">
            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered profile-menu">
                        <li class="nav-item">
                            <button class="nav-link active nav-link" data-bs-toggle="tab"
                                data-bs-target="#profile-overview">Overview</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                Profile</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab"
                                data-bs-target="#profile-change-password">Change
                                Password</button>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url() ?>/auth/logout">
                                <button class="nav-link logout-button">Logout</button>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content pt-2">
                        <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <?php if (session()->has('pro-success')): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?= session()->getFlashdata('pro-success') ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            <?php endif; ?>

                            <?php if (session()->has('pro-error')): ?>
                                <div class="alert alert-danger  alert-dismissible fade show" role="alert">
                                    <?= session()->getFlashdata('pro-error') ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>

                                </div>
                            <?php endif; ?>

                            <?php if (session()->has('pro-errors')): ?>
                                <div class="alert alert-danger  alert-dismissible fade show" role="alert">
                                    <?php foreach (session()->getFlashdata('pro-errors') as $error): ?>
                                        <p>
                                            <?= $error ?>
                                        </p>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            <h5 class="card-title">Profile Details</h5>
                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Full Name</div>
                                <div class="col-lg-9 col-md-8">
                                    <?= $userData['name'] ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Username</div>
                                <div class="col-lg-9 col-md-8">
                                    <?= $userData['username'] ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Address</div>
                                <div class="col-lg-9 col-md-8">
                                    <?= $userData['address'] ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Phone</div>
                                <div class="col-lg-9 col-md-8">
                                    <?= $userData['phone'] ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Email</div>
                                <div class="col-lg-9 col-md-8">
                                    <?= $userData['email'] ?>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                            <!-- Profile Edit Form -->
                            <form action="<?= base_url('profile/edit') ?>" method="post" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <label for="profileImage"
                                        class="col-md-4 col-lg-3 col-form-label profile-data-title">Profile
                                        Image</label>
                                    <div class="col-md-8 col-lg-9">
                                        <?php if ($userData['img']): ?>
                                            <img src="<?php echo base_url() ?>assets/img/profile/<?= $userData['img'] ?>"
                                                alt="Profile" class="rounded-circle">
                                        <?php else: ?>
                                            <img src="<?php echo base_url() ?>assets/img/profile/default.png" alt="Profile"
                                                class="rounded-circle">
                                        <?php endif ?>
                                        <div class="pt-2 input-group custom-file-button">
                                            <label class="input-group-text" for="image"><i class="bi bi-upload">
                                                </i></label>
                                            <input type="file" class="form-control" id="image" name="image">
                                            <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"
                                                id="removeFile"><i class="bi bi-trash"></i></a>
                                        </div>
                                    </div>
                                </div>


                                <div class="row mb-3">
                                    <label for="fullName" class="col-md-4 col-lg-3 profile-data-title">Name</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="name" type="text" class="form-control" id="name"
                                            value="<?= $userData['name'] ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Address"
                                        class="col-md-4 col-lg-3 col-form-label profile-data-title">Address</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="address" type="text" class="form-control" id="address"
                                            value="<?= $userData['address'] ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Phone"
                                        class="col-md-4 col-lg-3 col-form-label profile-data-title">Phone</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="phone" type="text" class="form-control" id="phone"
                                            value="<?= $userData['phone'] ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="Email"
                                        class="col-md-4 col-lg-3 col-form-label profile-data-title">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="email" type="email" class="form-control" id="email"
                                            value="<?= $userData['email'] ?>">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form><!-- End Profile Edit Form -->
                        </div>

                        <div class="tab-pane fade pt-3" id="profile-settings">
                        </div>

                        <div class="tab-pane fade pt-3" id="profile-change-password">
                            <?php if (session()->has('pwd-success')): ?>
                                <div class="alert alert-success" role="alert">
                                    <?= session()->getFlashdata('pwd-success') ?>
                                </div>
                            <?php endif; ?>

                            <?php if (session()->has('error')): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?= session()->getFlashdata('pwd-error') ?>
                                </div>
                            <?php endif; ?>

                            <?php if (session()->has('pwd-errors')): ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php foreach (session()->getFlashdata('pwd-errors') as $error): ?>
                                        <p>
                                            <?= $error ?>
                                        </p>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <!-- Change Password Form -->
                            <form action="<?= base_url('profile/update') ?>" method="post">
                                <div class="row mb-3">
                                    <label for="currentPassword"
                                        class="col-md-4 col-lg-3 col-form-label profile-data-title">Current
                                        Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="currentPassword" type="password" class="form-control"
                                            id="currentPassword">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="newPassword"
                                        class="col-md-4 col-lg-3 col-form-label profile-data-title">New
                                        Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="newPassword" type="password" class="form-control" id="newPassword">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="renewPassword"
                                        class="col-md-4 col-lg-3 col-form-label profile-data-title">Re-enter New
                                        Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="renewPassword" type="password" class="form-control"
                                            id="renewPassword">
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Change Password</button>
                                </div>
                            </form><!-- End Change Password Form -->
                        </div>
                    </div><!-- End Bordered Tabs -->
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>