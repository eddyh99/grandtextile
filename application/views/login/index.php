<div style="background-image: url('assets/img/bgLogin.png'); background-size: cover; background-repeat: no-repeat; height: 100vh;">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="col-4">
            <form action="<?= base_url() ?>auth/auth_login" method="post">
            <div id="bg-login" class="card card-login shadow-lg r" style="background-color: #084B8A ;border-radius:20px">
                <div class="card-body" style="background-color: #4263C9;border-radius:20px">
                        <?php if (!empty($_SESSION["error"])) { ?>
                            <div class="alert alert-info" role="alert">
                                <?= @$_SESSION["error"]; ?>
                            </div>
                        <?php } ?>

                        <div class="input-group mb-3 mt-5">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" name="uname" class="form-control" placeholder="Username" required>
                        </div>

                        <div class="input-group mb-5">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <input id="text-secret" type="password" name="pass" class="form-control" placeholder="Password" required>
                        </div>

                        <div class="text-center mb-5">
                            <button type="submit" class="btn btn-primary btn-block" style="background-color: #ffffff;">
                                <h5 style="color: blue;">Login</h5>
                            </button>
                        </div>

                        <p class="text-white">Don't have an account? <a href="<?= base_url() ?>register" class="text-white">Sign up now!</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
