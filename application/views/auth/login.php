<div class="col-xl-10 col-lg-12 col-md-9">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Jumpe Lagi!</h1>
                        </div>
                        <?= $this->session->flashdata('pesan'); ?>
                        <form action="<?= base_url('autentifikasi') ?>" method="post" class="user">
                            <div class="form-group">
                                <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." value="<?= set_value('email') ?>">
                                <small class="text-danger text-center"><?= form_error('email') ?></small>
                            </div>
                            <div class="form-group">
                                <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                <small class="text-danger text-center"><?= form_error('password') ?></small>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                    <label class="custom-control-label" for="customCheck">Remember
                                        Me</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Login
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="register.html">Create an Account!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>