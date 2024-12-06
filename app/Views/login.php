<?php
/**
 * @project dungbeoshop
 * @author NTDzVEKNY
 * @email ntdgdeptrai@gmail.com
 * @date 16-Nov-24
 */
?>
<?= $this->extend('layouts/_auth') ?>

<?= $this->section('content') ?>
<form method="post" id="login-form" action="<?= url_to('login') ?>" class="col-12"
      onsubmit="return validateCaptcha(event)">

	<?= csrf_field('login-form-csrf') ?>

    <div class="d-flex align-items-center gap-4 mb-3">
        <img src="<?= base_url() ?>assets/images/logo-icon.png" alt="logo"
             width="50px" height="50px">
        <h4 class="fs-3 mb-0">Welcome!</h4>
    </div>
    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">
            <div class="form-group mb-4">
                <label for="username" class="label">Email <span class="text-danger">*</span></label>
                <input id="username" name="email" type="email" class="form-control h-58"
                       placeholder="Email" required>
            </div>
            <div class="form-group mb-4">
                <label for="password" class="label">Mật Khẩu <span class="text-danger">*</span></label>
                <div class="form-group">
                    <div class="password-wrapper position-relative">
                        <input type="password" id="password" name="password"
                               class="form-control h-58 text-dark"
                               placeholder="Mật khẩu" required>
                        <i id="password-toggle" onclick="passwordToggle(this.id)"
                           style="color: #757fef; font-size: 16px; right: 15px !important; cursor: pointer;"
                           class="ri-eye-off-line password-toggle translate-middle-y top-50 end-0 position-absolute"
                           aria-hidden="true"></i>
                    </div>
                </div>
            </div>
<!--            <div class="row form-group mb-0" id="captcha-wrapper">-->
<!--                <label for="captchaTextBox" class="label">Mã Đăng-->
<!--                    Nhập <span class="text-danger">*</span></label>-->
<!--                <div class="col-6">-->
<!--                    <input type="text" class="form-control"-->
<!--                           placeholder="Mã đăng nhập" id="captchaTextBox"-->
<!--                           required />-->
<!--                </div>-->
<!--                <div class="col-6" id="captcha"></div>-->
<!--            </div>-->
        </div>
    </div>
    <div class="d-sm-flex justify-content-between mb-4">
        <div class="form-check">
            <input class="form-check-input position-relative"
                   name="remember"
                   style="top: 1px;"
                   type="checkbox"  id="flexCheckDefault">
            <label class="form-check-label fs-16 text-gray-light"
                   for="flexCheckDefault">
                Nhớ Mật khẩu
            </label>
        </div>
    </div>
    <button type="submit"
            id="loginButton"
            class="btn btn-primary mt-3 fs-16 fw-semibold text-dark heading-font py-2 py-md-3 px-4 text-white w-100">
        Đăng Nhập
    </button>
</form>
<div class="col-12 row mt-4 text-center">
    <p class="fs-14"><?= date('Y') ?> © <span
                class="text-primary"><?= PARAMS['app_name'] ?></span> is
        Proudly Owned by <a href="#" target="_blank"
                            class="text-decoration-none text-primary">NTDzVEKNY</a></p>
</div>

<script defer>
    function passwordToggle(id) {
        let passwordInput = document.getElementById(id.replace('-toggle', ''));
        let inputType = passwordInput.getAttribute('type');

        if (inputType === 'password') {
            passwordInput.setAttribute('type', 'text');
        } else {
            passwordInput.setAttribute('type', 'password');
        }
    }
</script>
<?= $this->endSection() ?>

