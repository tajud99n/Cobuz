<?php require ROOT . DS . 'app' . DS . 'views' . DS . 'includes' . DS . 'header.php'; ?>
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <h2>LOGIN</h2>
            <form action="<?php echo URLROOT; ?>register/login" method="post">
                <div class="form-group">
                    <label for="username">Username: <sup>*</sup></label>
                    <input type="text" name="username" class="form-control form-control-lg <?php echo (!empty($data['username_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['username']; ?>" autocomplete="off">
                    <?php if (!empty($data['username_err'])): ?>
                    <span class="invalid-feedback"><?php echo $data['username_err'] ?></span>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="password">Password: <sup>*</sup></label>
                    <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>">
                    <?php if (!empty($data['password_err'])): ?>
                    <span class="invalid-feedback"><?php echo $data['password_err'] ?></span>
                    <?php endif; ?>
                </div>

                <div class="row">
                    <div class="col">
                        <input type="submit" value="Login" class="btn btn-success btn-block">
                    </div>
                    <div class="col">
                        <a href="<?php echo URLROOT; ?>register/register" class="btn btn-light btn-block">No account? Register</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php require ROOT . DS . 'app' . DS . 'views' . DS . 'includes' . DS . 'footer.php'; ?>