<div style="background-image: url('assets/img/bgLogin.png'); background-size: cover; background-repeat: no-repeat; height: 100vh;">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="col-4">
            <form action="<?= base_url() ?>register" method="post">
                <div id="bg-login" class="card card-login shadow-lg r" style="background-color: #084B8A ;border-radius:20px">
                    <div class="card-body" style="background-color: #4263C9;border-radius:20px">
                            <?php if (!empty($_SESSION["error"])) { ?>
                                <div class="alert alert-info" role="alert">
                                    <?= @$_SESSION["error"]; ?>
                                </div>
                            <?php } ?>

                            <div class="input-group mb-3 mt-5">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                                <input type="text" name="uname" class="form-control" placeholder="Username" required>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                                <input id="text-secret" type="password" name="pass" class="form-control" placeholder="Password" required>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                                <input id="text-secret" type="password" name="pass" class="form-control" placeholder="Confirm Password" required>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                                <input type="text" name="nama" class="form-control" placeholder="Full Name" required>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                                <input type="email" name="email" class="form-control" placeholder="Email" required>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="fas fa-phone"></span>
                                    </div>
                                </div>
                                <input type="text" name="telp" class="form-control" placeholder="Whats App" required>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="fas fa-calendar"></span>
                                    </div>
                                </div>
                                <input type="date" name="tgllahir" class="form-control" placeholder="Date Of Birth" required>
                            </div>

                            <div class="input-group mb-5">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <span class="fas fa-address-card"></span>
                                    </div>
                                </div>
                                <input type="text" name="alamat" class="form-control" placeholder="Address" required>
                            </div>

                            <div class="text-center mb-5">
                                <button type="submit" class="btn btn-primary btn-block" style="background-color: #ffffff;">
                                    <h5 style="color: blue;">Register</h5>
                                </button>
                            </div>
                        <a class="text-white" >already have an account? </a>
                                <a class="text-white" href="<?= base_url() ?>auth">Login here!</a>
                        </div>
                    </div>
                </form>     
            </div>
        </div>
    </div>