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
                <h3 class="fs-18 mb-4 border-bottom pb-20 mb-20">Edit Account</h3>
                <form method="post" enctype="multipart/form-data">
					<?= csrf_field() ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mb-4">
                                <label class="label">Tên tài khoản<span class="text-danger">*</span></label>
                                <div class="form-group position-relative">
                                    <input required type="text" class="form-control text-dark ps-5 h-58"
                                           placeholder="Nhập tên tài khoản" name="name" value="<?= $user->username ?>">
                                    <i class="ri-edit-2-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-4">
                                <label class="label">Email<span class="text-danger">*</span></label>
                                <div class="form-group position-relative">
                                    <input required type="email" class="form-control text-dark ps-5 h-58"
                                           placeholder="Nhập Email" name="email" value="<?= $user->getEmail() ?>">
									<i class=" ri-edit-2-line position-absolute top-50 start-0 translate-middle-y fs-20
                                           text-gray-light ps-20"></i>
                                </div>
                            </div>
                        </div>
						<?php if (auth()->user()->inGroup('superadmin')): ?>
                            <div class="form-group">
                                <label class="label">Cấp bậc<span class="text-danger">*</span></label>
                                <div class="form-group position-relative mb-3">
                                    <select name="group"
                                            class="form-select form-control text-gray-light h-58 ps-5"
                                            aria-label="Default select example">
                                        <option <?php if($user->inGroup('user')): ?>selected <?php endif; ?> value="1">Người Dùng</option>
                                        <option <?php if($user->inGroup('admin')): ?>selected <?php endif; ?> value="2">Quản trị viên</option>
                                    </select>
                                    <i class="ri-calendar-2-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                </div>
                            </div>
						<?php endif ?>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary py-3 px-5 fw-semibold text-white">Sửa
                                    Tài Khoản
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
