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

                                    <div class="text-center mt-4">
                                        <h1 class="h2">Get started</h1>
                                        <p class="lead">
                                            Start creating the best possible user experience for you customers.
                                        </p>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="m-2 sm-4">
                                                <form class="user" method="POST" action="<?= base_url('auth/registrasi'); ?>">
                                                    <div class="mb-3">
                                                        <label class="form-label">Name</label>
                                                        <input class="form-control form-control-lg" type="text"
                                                            name="username" value="<?=
                                    set_value('username'); ?>" placeholder="Enter your name" >
                                     <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Email</label>
                                                        <input class="form-control form-control-lg" type="text"
                                                        value="<?=
                                    set_value('email'); ?>" name="email" placeholder="Enter your email name" />
                                                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>    
                                                </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Password</label>
                                                        <input class="form-control form-control-lg" type="password"
                                                            name="password1" value="<?=
                                    set_value('password'); ?>" placeholder="Enter your password" />
                                                <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>    
                                                </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Re-Password</label>
                                                        <input class="form-control form-control-lg" type="password"
                                                        value="<?=
                                    set_value('password'); ?>" name="password2" placeholder="Re-Enter password" />
                                                <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>    
                                                </div>
                                                    <div>
                                                        <small>
                                                            <a href="<?= base_url('Auth')?>">Already Account? Sign
                                                                In</a>
                                                        </small>
                                                    </div>
                                                    <div>
                                                        <button type="submit" class="btn btn-lg btn-primary">Sign up</a>
                                                            <!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
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