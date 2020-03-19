    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 mb-4 titlelogin">Halaman Login</h1>
                                    </div>
                                    <?= $this->session->flashdata('message'); ?>
                                    <?= form_open() ?>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" placeholder="Masukkan Alamat Email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                                    </div>
                                    <button type="submit" class="btn btn-success btn-user btn-block">
                                        Login
                                    </button>
                                    <?= form_close() ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>