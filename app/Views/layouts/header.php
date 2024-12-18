<header class="header-area bg-white mb-4 rounded-bottom-10"
        id="header-area">
    <div class="row align-items-center">
        <div class="col-lg-4 col-sm-6 col-md-4">
            <div class="left-header-content">
                <ul
                        class="d-flex align-items-center ps-0 mb-0 list-unstyled justify-content-center justify-content-sm-start">
                    <li>
                        <button
                                class="header-burger-menu bg-transparent p-0 border-0"
                                id="header-burger-menu">
                            <i data-feather="menu"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-8 col-sm-6 col-md-8">
            <div class="right-header-content mt-2 mt-sm-0">
                <ul
                        class="d-flex align-items-center justify-content-center justify-content-sm-end ps-0 mb-0 list-unstyled">
                    <li class="header-right-item">
                        <div class="dropdown notifications email">
                            <button
                                    class="btn btn-secondary border-0 p-0 position-relative"
                                    type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                <i data-feather="mail"></i>
                            </button>
                            <div
                                    class="dropdown-menu dropdown-lg p-0 border-0 p-4">
                                <h5
                                        class="m-0 p-0 fw-bold d-flex justify-content-between align-items-center border-bottom pb-3 mb-4">
                                    <span>Email </span>
                                    <button
                                            class="p-0 m-0 bg-transparent border-0">
                                        Clear
                                        All
                                    </button>
                                </h5>
                                <div class="notification-menu">
                                    <a href="#"
                                       class="dropdown-item p-0">
                                        <p>Admin</p>
                                        <h4>[no-reply]: Welcome!</h4>
                                        <span class="fs-12 fw-normal"><?= date('Y-m-d H:i:s') ?></span>
                                    </a>
                                </div>
                                <a href="#"
                                   class="dropdown-item text-center text-primary d-block view-all pt-3 pb-0 fw-semibold">
                                    View All
                                    <i data-feather="chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="header-right-item">
                        <div class="dropdown notifications noti">
                            <button
                                    class="btn btn-secondary border-0 p-0 position-relative badge"
                                    type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                <i data-feather="bell"></i>
                            </button>
                            <div
                                    class="dropdown-menu dropdown-lg p-0 border-0 p-4">
                                <h5
                                        class="m-0 p-0 fw-bold d-flex justify-content-between align-items-center border-bottom pb-3 mb-4">
                                    <span>Notifications </span>
                                    <button
                                            class="p-0 m-0 bg-transparent border-0">
                                        Clear
                                        All
                                    </button>
                                </h5>
                                <div class="notification-menu">
                                    <a href="#"
                                       class="dropdown-item p-0">
                                        <h4>[no-reply]: Welcome!</h4>
                                        <p>Ngày hôm nay của bạn thế nào?</p>
                                        <span class="fs-12 fw-normal"><?= date('Y-m-d H:i:s') ?></span>
                                    </a>
                                </div>
                                <a href="#"
                                   class="dropdown-item text-center text-primary d-block view-all pt-3 pb-0 fw-semibold">
                                    View All
                                    <i data-feather="chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="header-right-item">
                        <div class="dropdown admin-profile">
                            <div
                                    class="d-xxl-flex align-items-center bg-transparent border-0 text-start p-0 cursor"
                                    data-bs-toggle="dropdown">
                                <div class="flex-shrink-0">
                                    <img class="rounded-circle wh-54"
                                         src=
										 <?php if (auth()->user()->inGroup('superadmin')): ?>
                                         "<?= base_url() ?>assets/images/uploads/adminavatar.jpg"
                                    <?php else : ?>
                                        "<?= base_url() ?>assets/images/uploads/Unknown_person.jpg"
									<?php endif; ?>
                                    alt="user">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <div
                                            class="d-flex align-items-center justify-content-between">
                                        <div class="d-none d-xxl-block">
                                            <span
                                                    class="degeneration"><?php
												$user = auth()->user();
												if ($user->inGroup('superadmin')): ?>
                                                    Super Admin
												<?php elseif ($user->inGroup('admin')): ?>
                                                    Manager
												<?php else: ?> User
												<?php endif; ?></span>
                                            <div
                                                    class="d-flex align-content-center">
                                                <h3><?php
													$user = auth()->user();
													if ($user->inGroup('superadmin')): ?>
                                                        NTDzVEKNY
													<?php else: ?>
                                                        <?=$user->username?>
													<?php endif; ?></h3>
                                                <div class="down">
                                                    <i data-feather="chevron-down"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="dropdown-menu border-0 bg-white w-100 admin-link">
                                <!--								<li>-->
                                <!--									<a-->
                                <!--										class="dropdown-item d-flex align-items-center text-body"-->
                                <!--										href="">-->
                                <!--										<i data-feather="user"></i>-->
                                <!--										<span class="ms-2">Tài Khoản</span>-->
                                <!--									</a>-->
                                <!--								</li>-->
                                <li>
                                    <a
                                            class="dropdown-item d-flex align-items-center text-body"
                                            href="<?= site_url('/logout') ?>">
                                        <i data-feather="log-out"></i>
                                        <span class="ms-2">Đăng Xuất</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>