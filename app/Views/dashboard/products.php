<?php
use App\Models\CategoriesModel;
$model = new CategoriesModel();
?>
<?= $this->extend('layouts/_main') ?>

<?= $this->section('content') ?>
    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">
            <div class="d-sm-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                <h4 class="fw-bold fs-18 mb-0 text-center">Products</h4>
                <div class="d-sm-flex align-items-center gap-3 mt-3 mt-sm-0 justify-content-center">
<!--                    <form class="src-form position-relative">-->
<!--                        <input type="text" class="form-control h-40 bg-body-bg border-0 text-dark"-->
<!--                               placeholder="Search here..">-->
<!--                        <button type="submit"-->
<!--                                class="src-btn position-absolute top-50 end-0 translate-middle-y bg-transparent p-0 border-0 pe-3">-->
<!--                            <i data-feather="search" style="stroke: #757FEF; width: 20px; height: 20px;"></i>-->
<!--                        </button>-->
<!--                    </form>-->
                    <a href="create_product"
                       class="btn btn-primary text-white fw-semibold py-2 px-3 w-sm-100 mt-3 mt-sm-0">
<span class="py-1 d-block">
<i class="ri-add-line"></i>
Create New
</span>
                    </a>
                </div>
            </div>
            <div class="default-table-area">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                        <tr>
                            <th scope="col" class="text-primary">
                                <div class="form-check p-0 d-flex align-items-center">
                                    <input class="form-check-input m-0" type="checkbox" id="flexCheckDefault">
                                    <span class="ms-4">Product Name</span>
                                </div>
                            </th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                            <th scope="col">Orders</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                    <?php foreach ($products as $product): ?>
                        <tr>
                            <td>
                                <div class="form-check p-0 d-flex align-items-center">
                                    <input class="form-check-input m-0" type="checkbox" value
                                           id="flexCheckDefault">
                                    <a href="" class="d-flex align-items-center ms-4">
                                        <img src="<?= base_url()?>assets/images/<?= $product->image ?>"
                                             class="wh-55 rounded-3" alt="product">
                                        <h6><?= $product->name ?></h6>
                                    </a>
                                </div>
                            </td>
                            <td> <?php echo $model->findByCategoryId($product->categories_id)->name ?></td>
                            <td><?= $product->price ?></td>
                            <td><?php echo random_int(0,100) ?> </td>
                            <td><?= $product->stock ?></td>
                            <td>
                                <div class="dropdown action-opt">
                                    <button class="btn bg p-0" type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                        <i data-feather="more-horizontal"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
                                        <li>
                                            <form method="post">
                                                <?=csrf_field()?>
                                                <input type="hidden" name="change_id" value="<?php echo $product->id?>">
                                            <button class="dropdown-item" href="javascript:;">
                                                <i data-feather="edit-3"></i>
                                                Change
                                            </button>
                                            </form>
                                        </li>

                                        <li>
                                            <form method="post">
                                                <input type="hidden" name="delete_id" value="<?php echo $product->id?>">
                                            <button class="dropdown-item" href="javascript:;">
                                                <i data-feather="trash-2"></i>
                                                Remove
                                            </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>
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
                                <a class="page-link icon" href="products.html" aria-label="Previous">
                                    <i data-feather="arrow-left"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link active" href="products.html">1</a></li>

                            <li class="page-item">
                                <a class="page-link icon" href="products.html" aria-label="Next">
                                    <i data-feather="arrow-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="flex-grow-1"></div>
<?= $this->endSection() ?>