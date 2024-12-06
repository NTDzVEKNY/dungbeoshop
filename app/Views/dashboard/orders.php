<?php
    use App\Models\ClientsModel;
    $model = new ClientsModel();
?>

<?= $this->extend('layouts/_main') ?>

<?= $this->section('content') ?>


<div class="row justify-content-center">
    <div class="col-xxl-4 col-xl-6 col-md-6">
        <div class="card bg-white border-0 rounded-10 mb-4">
            <div class="card-body p-4">
                <div class="d-flex align-items-center mb-4">
                    <div class="wh-44 bg-primary text-center position-relative rounded-circle">
                        <i class="ri-money-dollar-circle-line position-absolute top-50 start-50 translate-middle fs-20 text-white"></i>
                    </div>
                    <p class="fw-semibold fs-16 ms-3"><span class="text-success">1.3%</span> Up from past week</p>
                </div>
                <div class="d-sm-flex justify-content-between">
                    <div class="mb-3 mb-sm-0">
                        <span class="fs-14 fw-semibold text-gray-light d-block mb-1">All Orders</span>
                        <span class="fs-20 fw-semibold">18k</span>
                    </div>
                    <div class="mb-3 mb-sm-0">
                        <span class="fs-14 fw-semibold text-gray-light d-block mb-1">Pending Orders</span>
                        <span class="fs-20 fw-semibold">19k</span>
                    </div>
                    <div>
                        <span class="fs-14 fw-semibold text-gray-light d-block mb-1">Complited Orders</span>
                        <span class="fs-20 fw-semibold">22k</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-4 col-xl-6 col-md-6">
        <div class="card bg-white border-0 rounded-10 mb-4">
            <div class="card-body p-4">
                <div class="d-flex align-items-center mb-4">
                    <div class="wh-44 bg-primary text-center position-relative rounded-circle">
                        <i class="ri-bar-chart-fill position-absolute top-50 start-50 translate-middle fs-20 text-white"></i>
                    </div>
                    <p class="fw-semibold fs-16 ms-3"><span class="text-success">2.3%</span> Up from past week</p>
                </div>
                <div class="d-sm-flex justify-content-between">
                    <div class="mb-3 mb-sm-0">
                        <span class="fs-14 fw-semibold text-gray-light d-block mb-1">All Orders</span>
                        <span class="fs-20 fw-semibold">25k</span>
                    </div>
                    <div class="mb-3 mb-sm-0">
                        <span class="fs-14 fw-semibold text-gray-light d-block mb-1">Pending Orders</span>
                        <span class="fs-20 fw-semibold">30k</span>
                    </div>
                    <div>
                        <span class="fs-14 fw-semibold text-gray-light d-block mb-1">Complited Orders</span>
                        <span class="fs-20 fw-semibold">35k</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-4 col-xl-6 col-md-6">
        <div class="card bg-white border-0 rounded-10 mb-4">
            <div class="card-body p-4">
                <div class="d-flex align-items-center mb-4">
                    <div class="wh-44 bg-primary text-center position-relative rounded-circle">
                        <i class="ri-star-line position-absolute top-50 start-50 translate-middle fs-20 text-white"></i>
                    </div>
                    <p class="fw-semibold fs-16 ms-3"><span class="text-danger">-1.3%</span> Up from past week</p>
                </div>
                <div class="d-sm-flex justify-content-between">
                    <div class="mb-3 mb-sm-0">
                        <span class="fs-14 fw-semibold text-gray-light d-block mb-1">All Orders</span>
                        <span class="fs-20 fw-semibold">12k</span>
                    </div>
                    <div class="mb-3 mb-sm-0">
                        <span class="fs-14 fw-semibold text-gray-light d-block mb-1">Pending Orders</span>
                        <span class="fs-20 fw-semibold">09k</span>
                    </div>
                    <div>
                        <span class="fs-14 fw-semibold text-gray-light d-block mb-1">Complited Orders</span>
                        <span class="fs-20 fw-semibold">13k</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card bg-white border-0 rounded-10 mb-4">
    <div class="card-body p-4">
        <div class="d-sm-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
            <h4 class="fw-bold fs-18 mb-0 text-center">Recent Orders</h4>
            <div class="d-sm-flex align-items-center gap-3 mt-3 mt-sm-0 justify-content-center">
<!--                <form class="src-form position-relative">-->
<!--                    <input type="text" class="form-control h-40 bg-body-bg border-0 text-dark" placeholder="Search here..">-->
<!--                    <button type="submit" class="src-btn position-absolute top-50 end-0 translate-middle-y bg-transparent p-0 border-0 pe-3">-->
<!--                        <i data-feather="search" style="stroke: #757FEF; width: 20px; height: 20px;"></i>-->
<!--                    </button>-->
<!--                </form>-->
            </div>
        </div>
        <div class="default-table-area">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                    <tr>
                        <th scope="col" class="text-primary">ID </th>
                        <th scope="col">Người mua</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Ghi chú</th>
                        <th scope="col">Địa chỉ nhận hàng</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($orders as $order): ?>
                    <tr>
                        <td class="fs-15 fw-semibold"><?= $order->id ?></td>

                        <td><?= $model->findByClientId($order->client_id)->name?></td>
                        <td><?= $order->total?></td>
                        <td>
                            <span class="badge bg-primary text-primary bg-opacity-10 fw-semibold fs-13 py-2 px-3"><?=$order->status?>Pending</span>
                        </td>
                        <td><?=$order->note?></td>
                        <td><?=$order->shipping_address ?></td>
                    </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
            <div class="d-sm-flex justify-content-between align-items-center text-center">
                <span class="fs-14">Showing All Entries</span>
                <nav aria-label="Page navigation example">
                    <ul class="pagination mb-0 mt-3 mt-sm-0 justify-content-center">
                        <li class="page-item">
                            <a class="page-link icon" href="#" aria-label="Previous">
                                <i data-feather="arrow-left"></i>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                        <li class="page-item">
                            <a class="page-link icon" href="#" aria-label="Next">
                                <i data-feather="arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>