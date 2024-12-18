<?php
/**
 * @project dungbeoshop
 * @author NTDzVEKNY
 * @email ntdgdeptrai@gmail.com
 * @date 18-Dec-24
 */
?>
<?= $this->extend('layouts/_main') ?>

<?= $this->section('content') ?>
    <div class="card bg-white border-0 rounded-10 mb-4">
        <div class="card-body p-4">
            <div class="d-sm-flex justify-content-between align-items-center border-bottom pb-20 mb-20">
                <h4 class="fw-bold fs-18 mb-0 text-center">Accounts</h4>
                <div class="d-sm-flex align-items-center gap-3 mt-3 mt-sm-0 justify-content-center">
                    <a href="create_account"
                       class="btn btn-primary text-white fw-semibold py-2 px-3 w-sm-100 mt-3 mt-sm-0">
                        <span class="py-1 d-block"><i class="ri-add-line"></i>Create New</span>
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
                                    <span class="ms-4">ID</span>
                                </div>
                            </th>
                            <th scope="col">Tên tài khoản</th>
                            <th scope="col">Email</th>
                            <th scope="col">Cấp bậc</th>
                            <th scope="col">Tình trạng</th>
                            <th scope="col">Ngày khởi tạo</th>
                            <th scope="col">Ngày cập nhật</th>
                            <th scope="col">Lựa chọn</th>
                        </tr>
                        </thead>
                        <tbody>
						<?php foreach ($users as $user): ?>
                            <?php if ($user->inGroup('superadmin')) continue; ?>
                            <tr>
                                <td>
                                    <div class="form-check p-0 d-flex align-items-center">
                                        <a class="d-flex align-items-center ms-4">
                                            <h6><?= $user->id ?></h6>
                                        </a>
                                    </div>
                                </td>
                                <td> <?= $user->username ?></td>
                                <td> <?= $user->getEmail() ?></td>
                                <td><?php if ($user->inGroup('admin')): ?>
                                        MANAGER
									<?php else: ?>
                                        USER
									<?php endif; ?>
                                </td>
                                <td> <?php if ($user->active == 1) : ?>
                                        <div style="padding: 10px; text-align: center; bottom: -7px"
                                             class="alert alert-success bg-success text-white" role="alert">
                                            ACTIVE
                                        </div>
									<?php else : ?>
                                        <div style="padding: 10px; text-align: center; bottom: -7px"
                                             class="alert alert-danger bg-danger text-white" role="alert">
                                            INACTIVE
                                        </div>
									<?php endif; ?>
                                </td>
                                <td><?= $user->created_at ?></td>
                                <td><?= $user->updated_at ?></td>
                                <td>
                                    <div class="dropdown action-opt">
                                        <button class="btn bg p-0" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                            <i data-feather="more-horizontal"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-menu-end bg-white border box-shadow">
											<?php if ($user->active == 1): ?>
                                                <li>
                                                    <form method="post" style="display: inline" id="user-block-form-<?= $user->id ?>">
                                                        <input type="hidden" value="<?= $user->id ?>" name="block_id">
                                                        <a class="dropdown-item" title="Chặn <?= $user->id ?>" onclick="confirmBlock(<?= $user->id ?>)"
                                                           href="javascript:;">
                                                            <i data-feather="slash"></i>
                                                            Chặn
                                                        </a>
                                                        <noscript>
                                                            <input type="submit" value="Submit form!" />
                                                        </noscript>
                                                    </form>
                                                </li>
											<?php elseif ($user->active != 1): ?>
                                                <li>
                                                    <form method="post" style="display: inline" id="user-unblock-form-<?= $user->id ?>">
                                                        <input type="hidden" value="<?= $user->id ?>" name="unblock_id">
                                                        <a class="dropdown-item" title="Bỏ chặn <?= $user->id ?>" onclick="confirmUnBlock(<?= $user->id ?>)"
                                                           href="javascript:;">
                                                            <i data-feather="check-circle"></i>
                                                            Kích hoạt
                                                        </a>
                                                        <noscript>
                                                            <input type="submit" value="Submit form!" />
                                                        </noscript>
                                                    </form>
                                                </li>
											<?php endif ?>
                                            <li>
                                                <a class="dropdown-item" href="edit_account/<?= $user->id ?>">
                                                    <i data-feather="edit-3"></i>
                                                    Sửa thông tin
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="change_password/<?= $user->id ?>">
                                                    <i data-feather="edit"></i>
                                                    Đổi mật khẩu
                                                </a>
                                            </li>
                                            <li>
                                                <form method="post">
                                                    <input type="hidden" name="delete_id"
                                                           value="<?php echo $user->id ?>">
                                                    <button class="dropdown-item" href="javascript:;">
                                                        <i data-feather="trash-2"></i>
                                                        Xoá
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
						<?php endforeach; ?>
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

    <div class="flex-grow-1"></div>
<script defer>
    function confirmBlock(userId) {
        //alert box
        let confirmation = confirm("Bạn có chắc chắn muốn Chặn người dùng này không?");

        // if user confirm to delete -> post
        if (confirmation) {
            document.getElementById('user-block-form-' + userId).submit();
        }
    }

    function confirmUnBlock(userId) {
        //alert box
        let confirmation = confirm("Bạn có chắc chắn muốn Kích Hoạt người dùng này không?");

        // if user confirm to delete -> post
        if (confirmation) {
            document.getElementById('user-unblock-form-' + userId).submit();
        }
    }
</script>
<?= $this->endSection() ?>