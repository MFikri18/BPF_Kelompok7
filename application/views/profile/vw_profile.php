<main class="content">
    <div class="container-fluid p-0">
        <div class="mb-3">
            <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
        </div>
        <div class="row">
            <div class="col-md-12 col-xl-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Profile Details</h5>
                    </div>
                    <div class="card-body text-center">
                        <img src="<?= base_url('assets/static/img/avatars/') . $user['gambar']; ?>"
                            class="img-fluid rounded-circle mb-2" width="128" height="128" />
                        <h5 class="card-title"><?= $user['username']; ?></h5>
                        <p class="card-text"><?= $user['email']; ?></p>
                        <p class="card-text"><small class="text-muted">Anggota Sejak
                                <?= date('d F Y', $user['date_created']); ?></small></p>
                    </div>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                    <h5 class="h6 card-title">About</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Lives in <a
                                href="#">San Francisco, SA</a></li>

                        <li class="mb-1"><span data-feather="briefcase" class="feather-sm me-1"></span> Works at <a
                                href="#">GitHub</a></li>
                        <li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> From <a
                                href="#">Boston</a></li>
                    </ul>
                </div>
                <hr class="my-0" />
                <div class="card-body text-center">
                    <button class="btn btn-danger middle" href="<?= base_url('auth/logout') ?>">Logout</button>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>

    </div>
</main>