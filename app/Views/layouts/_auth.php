<?php
/**
 * @project dungbeoshop
 * @author NTDzVEKNY
 * @email ntdgdeptrai@gmail.com
 * @date 16-Nov-24
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/remixicon.css">
    <link rel="stylesheet"
        href="<?= base_url() ?>assets/css/sweetalert.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
    <title><?= isset($title) ? $title . ' | ' : '' ?><?= PARAMS['app_name'] ?></title>
</head>

<body>

<?= $this->include('layouts/preloader') ?>

<div class="container-fluid">
	<div class="main-content d-flex flex-column px-0">
		<div class="m-auto py-5 col-md-3">

			<?= $this->renderSection('content') ?>

		</div>
	</div>
</div>

<script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js" defer></script>
<script src="<?= base_url() ?>assets/js/sweetalert.js" defer></script>
<script src="<?= base_url() ?>assets/js/custom/custom.js" defer></script>

<!--<script defer>-->
<!--    document.addEventListener('DOMContentLoaded', function() {-->
<!--		--><?php //if (session()->getFlashdata('error')): ?>
//        Swal.fire({
//            icon: 'error',
//            title: 'Thất Bại!',
//            text: '<?php //= session()->getFlashdata('error') ?>//',
//        });
//		<?php //endif; ?>
//        createCaptcha();
//    });
//
//    let code;
//
//    function createCaptcha() {
//        document.getElementById('captcha').innerHTML = '';
//
//        let charsArray =
//            '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@!#$%^&*';
//        let lengthOtp = 6;
//        let captcha = [];
//
//        for (let i = 0; i < lengthOtp; i++) {
//            let index = Math.floor(Math.random() * charsArray.length + 1);
//
//            if (captcha.indexOf(charsArray[index]) === -1) {
//                captcha.push(charsArray[index]);
//            } else {
//                i--;
//            }
//        }
//
//        let canv = document.createElement('canvas');
//
//        canv.id = 'captcha';
//        canv.width = 200;
//        canv.height = 50;
//
//        let ctx = canv.getContext('2d');
//
//        ctx.font = '25px Georgia';
//        ctx.strokeText(captcha.join(''), 0, 30);
//        code = captcha.join('');
//        document.getElementById('captcha').appendChild(canv);
//    }
//
//    function validateCaptcha() {
//        event.preventDefault();
//
//        let captchaWrapper = document.getElementById('captcha-wrapper');
//        let form = captchaWrapper.closest('form');
//
//        if (document.getElementById('captchaTextBox').value === code) {
//            // Captcha is correct, show SweetAlert before submission
//            Swal.fire({
//                title: 'Đang đăng nhập...',
//                text: 'Xin vui lòng chờ một chút.',
//                icon: 'info',
//                showConfirmButton: false,
//                timer: 1000,
//                timerProgressBar: true
//            }).then(() => {
//                document.getElementById('login-form').submit();
//            });
//        } else {
//            Swal.fire({
//                icon: 'error',
//                title: 'Thất Bại!',
//                text: 'Mã đăng nhập không chính xác!',
//            });
//            createCaptcha();
//        }
//    }
//</script>
</body>

</html>