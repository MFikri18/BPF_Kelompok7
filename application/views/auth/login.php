<body>
    <div class="container text-center">
        <div class="row">
            <div class="col-6">
                <div class="split left">
                    <div class="centered">
                        <img src="<?= base_url('assets/static/') ?>img/icons/Logo.png" height="500px" width="500px"
                            style="margin-top: 100px;" rel="stylesheet">
                    </div>
                </div>
            </div>
            <div class="col-6">
                <main class="d-flex w-100">
                    <div class="container d-flex flex-column">
                        <div class="row vh-100">
                            <div class="col-md-12 mx-auto d-table h-100">
                                <div class="d-table-cell align-middle">

                                    <div class="text-clef mt-4">
                                        <h1 class="h2">Welcome</h1>
                                        <p class="lead">
                                            Sign in to your account to continue
                                        </p>
                                    </div>

                                    <div class="card">
                                        <div class="card-body">
                                            <div class="m-2 sm-4">
                                                <?= $this->session->flashdata('message'); ?>
                                                <form class="user" method="POST"
                                                    action="<?= base_url('auth/cek_login') ?>">
                                                    <div class="mb-4">
                                                        <label class="form-label">Email</label>
                                                        <input class="form-control form-control-lg" type="email"
                                                        value="<?=
                                    set_value('email'); ?>" name="email" placeholder="Enter your email" />
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                    <div class="mb-4">
                                                        <label class="form-label">Password</label>
                                                        <input class="form-control form-control-lg" type="password"
                                                        value="<?=
                                    set_value('password'); ?>" name="password" placeholder="Enter your password" />
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                                        <small>
                                                            <a href="index.html">Forgot password?</a>
                                                        </small>
                                                    </div>
                                                    <div>
                                                        <small>
                                                            <a href="<?= base_url('Auth/registrasi/')?>">No Account? Sign
                                                                Up</a>
                                                        </small>
                                                    </div>
                                                    <div>
                                                        <button type="submit" class="btn btn-lg btn-primary btn-user btn-block">Sign in</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>