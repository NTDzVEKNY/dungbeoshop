<div class="sidebar-area" id="sidebar-area">
	<div class="logo position-relative">
		<a href="<?= base_url() ?>dashboard" class="d-block text-decoration-none">
			<img src="<?= base_url() ?>assets/images/logo-icon.png"
				 alt="logo-icon" width="50px" height="50px">
			<span class="logo-text fw-bolder fs-2"
				  style="margin-left: 5px; color: #262276;">DBS<span
					class="text-primary fw-normal fs-14">version <?= PARAMS['app_version'] ?></span></span>
		</a>
		<button
			class="sidebar-burger-menu bg-transparent p-0 border-0 opacity-0 z-n1 position-absolute top-50 end-0 translate-middle-y"
			id="sidebar-burger-menu">
			<i data-feather="x"></i>
		</button>
	</div>
	<aside id="layout-menu" class="layout-menu menu-vertical menu active"
		   data-simplebar>
		<ul class="menu-inner">
			<?php
			    echo $this->include('layouts/menu');
            ?>
		</ul>
	</aside>
	<div class="bg-white z-1 admin">
		<div class="d-flex align-items-center admin-info border-top">
			<div class="flex-shrink-0">
				<a href="#" class="d-block">
					<img src="<?= base_url() ?>assets/images/uploads/adminavatar.jpg"
						 class="rounded-circle wh-54" alt="user">
				</a>
			</div>
			<div class="flex-grow-1 ms-3 info">
				<a href="" class="d-block name">NTDzVEKNY</a>
				<a href="<?= site_url('/logout') ?>">Đăng Xuất</a>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="version-modal" tabindex="-1"
	 aria-labelledby="version-modal-label" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title fs-5" id="version-modal-label"><?= PARAMS['app_name'] ?></h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal"
						aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<?= PARAMS['app_version'] ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary text-white"
						data-bs-dismiss="modal">Đóng
				</button>
			</div>
		</div>
	</div>
</div>