<li id="home" class="menu-item">
    <a href="<?= base_url() ?>dashboard" class="menu-link active">
        <i data-feather="home" class="menu-icon tf-icons"></i>
        <span class="title">Trang Chủ</span>
    </a>
</li>
<?php if (auth()->user()->inGroup('admin', 'superadmin')): ?>
    <li id="account" class="menu-item">
        <a href="<?= base_url() ?>dashboard/accounts" class="menu-link active">
            <i data-feather="user" class="menu-icon tf-icons"></i>
            <span class="title">Tài Khoản</span>
        </a>
    </li>
<?php endif; ?>

<li id="product" class="menu-item">
    <a href="<?= base_url() ?>dashboard/products" class="menu-link active">
        <i data-feather="box" class="menu-icon tf-icons"></i>
        <span class="title">Sản Phẩm</span>
    </a>
</li>
<li id="order" class="menu-item">
    <a href="<?= base_url() ?>dashboard/orders" class="menu-link active">
        <i data-feather="check-square" class="menu-icon tf-icons"></i>
        <span class="title">Đơn Hàng</span>
    </a>
</li>

<script defer>
    let url = '<?= current_url() ?>';

    if (url.search('accounts') >= 0) {
        let element = document.getElementById("account");
        element.classList.add("open");
    } else if (url.search('products') >= 0) {
        let element = document.getElementById("product");
        element.classList.add("open");
    } else if (url.search('orders') >= 0) {
        let element = document.getElementById("order");
        element.classList.add("open");
    } else {
        let element = document.getElementById("home");
        element.classList.add("open");
    }
</script>