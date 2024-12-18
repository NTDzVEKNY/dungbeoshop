<?= $this->extend('layouts/_main') ?>

<?= $this->section('content') ?>
<style>
    .hidden {
        display: none !important;
    }
</style>
<div class="row">
	<div class="col-lg-8">
		<div class="card bg-white border-0 rounded-10 mb-4">
			<div class="card-body p-4">
				<h3 class="fs-18 mb-4 border-bottom pb-20 mb-20">Change Password</h3>
				<form method="post" enctype="multipart/form-data" >
					<?= csrf_field() ?>
					<div class="row">

						<div class="form-group mb-4">
							<label class="label"
								   for="new-password">Mật
								Khẩu Mới<span class="text-danger">*</span></label>
							<div
								class="form-group position-relative mb-4">
								<input type="password" name="new_password"
									   id="new-password"
									   class="form-control h-58 text-dark"
									   placeholder="Nhập mật khẩu"
									   required>
								<i id="new-password-toggle"
								   onclick="passwordToggle(this.id)"
								   style="color: #757fef; font-size: 16px; right: 15px !important; cursor: pointer;"
								   class="ri-eye-off-line password-toggle translate-middle-y top-50 end-0 position-absolute"
								   aria-hidden="true"></i>
							</div>
							<label class="label"
								   for="confirm-new-password">Xác
								Nhận Mật Khẩu<span class="text-danger">*</span></label>
							<div
								class="form-group position-relative">
								<input type="password" name="confirm_password"
									   id="confirm-new-password"
									   class="form-control h-58 text-dark"
									   placeholder="Xác nhận mật khẩu"
									   required>
								<i id="confirm-new-password-toggle"
								   onclick="passwordToggle(this.id)"
								   style="color: #757fef; font-size: 16px; right: 15px !important; cursor: pointer;"
								   class="ri-eye-off-line password-toggle translate-middle-y top-50 end-0 position-absolute"
								   aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<button type="submit" class="btn btn-primary py-3 px-5 fw-semibold text-white">Xác Nhận
								</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script defer>
    function passwordToggle(id) {
        let passwordInput = document.getElementById(id.replace('-toggle', ''));
        let inputType = passwordInput.getAttribute('type');
        // change toggle icon
        let toggleclass = document.getElementById(id);
        if (toggleclass.classList.contains("ri-eye-off-line")) {
            toggleclass.classList.remove("ri-eye-off-line");
            toggleclass.classList.add("ri-eye-line");
        } else {
            toggleclass.classList.remove("ri-eye-line");
            toggleclass.classList.add("ri-eye-off-line");
        }
        //toggle password visible
        if (inputType === 'password') {
            passwordInput.setAttribute('type', 'text');
        } else {
            passwordInput.setAttribute('type', 'password');
        }
    }
</script>
<?= $this->endSection() ?>
