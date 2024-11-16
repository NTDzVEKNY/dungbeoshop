<?= $this->extend('layouts/_main') ?>

<?= $this->section('content') ?>

<div class="row">
    <div class="col-lg-8">
        <div class="card bg-white border-0 rounded-10 mb-4">
            <div class="card-body p-4">
                <h3 class="fs-18 mb-4 border-bottom pb-20 mb-20">Create Product</h3>
                <form  method="post">
					<?= csrf_field() ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group mb-4">
                                <label class="label">Tên sản phẩm</label>
                                <div class="form-group position-relative">
                                    <input required type="text" class="form-control text-dark ps-5 h-58" placeholder="Nhập tên sản phẩm" name="name">
                                    <i class="ri-edit-2-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-4">
                                <label class="label">Mô tả sản phẩm</label>
                                <div class="form-group position-relative">
                                    <textarea name="description" class="form-control ps-5 text-dark" placeholder="Nhập mô tả" cols="30" rows="5"></textarea>
                                    <i class="ri-information-line position-absolute top-0 start-0 fs-20 text-gray-light ps-20 pt-2"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="label">Loại sản phẩm</label>
                            <div class="form-group position-relative mb-3">
                                <select value="1" name="category" class="form-select form-control text-gray-light h-58 ps-5" aria-label="Default select example">
									<?php foreach ($categories as $category): ?>
                                        <option selected value="<?= $category->id ?>"><?= $category->name ?></option>
									<?php endforeach; ?>
                                </select>
                                <i class="ri-calendar-2-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-4">
                                <label class="label">Giá</label>
                                <div class="form-group position-relative">
                                    <input required name="price" type="number" class="form-control ps-5 text-gray-light h-58" placeholder="Nhập giá">
                                    <i class="ri-money-dollar-circle-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group mb-4">
                                <label class="label">Số lượng hàng</label>
                                <div class="form-group position-relative">
                                    <input required name="stock" type="text" class="form-control ps-5 text-gray-light h-58" placeholder="Số lượng hàng">
                                    <i class="ri-checkbox-circle-line position-absolute top-50 start-0 translate-middle-y fs-20 text-gray-light ps-20"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-4">
                                <label class="label">Ảnh</label>
                                <div class="form-control h-100 text-center position-relative p-4 p-lg-5">
                                    <div class="product-upload">
                                        <label for="file-upload" class="file-upload mb-0">
<span class="d-inline-block wh-110 bg-body-bg rounded-10 position-relative ">
<i class="ri-camera-line wh-38 bg-gray-div7 d-inline-block text-gray-light rounded-circle position-absolute bottom-0 end-0" style="right: -10px !important; bottom: -10px !important;"></i>
</span>
                                        </label>
                                        <input name="image" id="file-upload" type="file">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary py-3 px-5 fw-semibold text-white">Thêm sản phẩm</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>