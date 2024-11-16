<?= display_menu([
	'area'    => 'other',
	'content' => '
    <li class="menu-item">
        <a href="#" class="menu-link active">
            <i data-feather="users" class="menu-icon tf-icons"></i>
            <span class="title">Quản Lý Team</span>
        </a>
    </li>
    <li class="menu-item">
        <a href="#" class="menu-link active">
            <i data-feather="grid" class="menu-icon tf-icons"></i>
            <span class="title">Tài Nguyên</span>
        </a>
    </li>
    <li class="menu-item">
        <a href="javascript:void(0);"
            class="menu-link menu-toggle active">
            <i data-feather="mail"
                class="menu-icon tf-icons"></i>
            <span class="title">Mail Box</span>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="#" class="menu-link">
                    Tất cả
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link">
                    Hộp thư đến
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link">
                    Thư đã gửi
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link">
                    Spam
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link">
                    Thùng rác
                </a>
            </li>
            <li class="menu-item">
                <a href="#" class="menu-link">
                    Email template
                </a>
            </li>
        </ul>
    </li>
    ',
	'status' => 'pending',
]) ?>

<?= display_menu([
	'area'    => 'support',
	'content' => '
    <li class="menu-item">
        <a href="' . base_url() . 'tutorial/" class="menu-link active">
            <i data-feather="help-circle" class="menu-icon tf-icons"></i>
            <span class="title">Hướng Dẫn</span>
        </a>
    </li>
    <li class="menu-item">
        <a href="mailto:' . PARAMS['email']['support_email'] . '"
        class="menu-link active">
            <i data-feather="alert-triangle"
            class="menu-icon tf-icons"></i>
            <span class="title">Báo Lỗi</span>
        </a>
    </li>
    <li class="menu-item">
        <a href="mailto:' . PARAMS['email']['support_email'] . '"
        class="menu-link active">
            <i data-feather="phone" class="menu-icon tf-icons"></i>
            <span class="title">Hỗ Trợ Kỹ Thuật</span>
        </a>
    </li>
    <li class="menu-item">
        <a href="#" class="menu-link active" data-bs-toggle="modal" data-bs-target="#version-modal">
            <i data-feather="info" class="menu-icon tf-icons"></i>
            <span class="title">Thông Tin Phiên Bản</span>
        </a>
    </li>
    ',
]) ?>