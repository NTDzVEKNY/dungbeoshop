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
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/flaticon.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/sidebar-menu.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/simplebar.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/apexcharts.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/prism.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/rangeslider.css">
	<link rel="stylesheet"
		  href="<?= base_url() ?>assets/css/sweetalert.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/quill.snow.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
	<title><?= isset($title) ? $title . ' | ' : '' ?><?= PARAMS['app_name'] ?></title>
</head>

<body>

<?= $this->include('layouts/preloader') ?>

<?= $this->include('layouts/sidebar') ?>

<div class="container-fluid">
	<div class="main-content d-flex flex-column">

		<?= $this->include('layouts/header') ?>

		<?= $this->include('layouts/breadcrumb') ?>

		<?= $this->renderSection('content') ?>

		<?= $this->include('layouts/footer') ?>
	</div>
</div>
<script defer>
    document.addEventListener('DOMContentLoaded', function() {
		<?php if (session()->getFlashdata('error')): ?>
        Swal.fire({
            icon: 'error',
            title: 'Thất Bại!',
            text: '<?= session()->getFlashdata('error') ?>',
        });
        <?php elseif (session()->getFlashdata('success')): ?>
        Swal.fire({
            icon: 'success',
            title: 'Thành Công!',
            text: '<?= session()->getFlashdata('success') ?>',
        });
		<?php endif; ?>
    });
</script>
<script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js" defer></script>
<script src="<?= base_url() ?>assets/js/sidebar-menu.js" defer></script>
<script src="<?= base_url() ?>assets/js/dragdrop.js" defer></script>
<script src="<?= base_url() ?>assets/js/rangeslider.min.js" defer></script>
<script src="<?= base_url() ?>assets/js/sweetalert.js" defer></script>
<script src="<?= base_url() ?>assets/js/quill.min.js" defer></script>
<script src="<?= base_url() ?>assets/js/data-table.js" defer></script>
<script src="<?= base_url() ?>assets/js/prism.js" defer></script>
<script src="<?= base_url() ?>assets/js/clipboard.min.js" defer></script>
<script src="<?= base_url() ?>assets/js/feather.min.js" defer></script>
<script src="<?= base_url() ?>assets/js/simplebar.min.js" defer></script>
<script src="<?= base_url() ?>assets/js/apexcharts.min.js" defer></script>
<script src="<?= base_url() ?>assets/js/amcharts.js" defer></script>
<script src="<?= base_url() ?>assets/js/custom/ecommerce-chart.js"
		defer></script>
<script src="<?= base_url() ?>assets/js/custom/custom.js" defer></script>
</body>

</html>
