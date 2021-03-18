<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="/small/public/home">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Trang Chủ
                </a>
                <div class="sb-sidenav-menu-heading">Core</div>
                <?php if(checkPer($_SESSION['users']['id'], 'user_view')): ?>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Người Dùng
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/small/public/home/users">Quản Lý Người Dùng </a>
                    </nav>
                </div>
                <?php endif; ?>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Pages
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <?php if(checkPer($_SESSION['users']['id'], 'post_view')): ?>
                <div class="collapse" id="collapsePages" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/small/public/admin/news">Quản Lý Bài Viết</a>
                    </nav>
                </div>
                <div class="collapse" id="collapsePages" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/small/public/admin/categories">Quản Lý Danh Mục Tin Tức</a>
                    </nav>
                </div>
                <div class="collapse" id="collapsePages" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/small/public/admin/tags">Quản Lý Tag Tin Tức</a>
                    </nav>
                </div>
                <?php endif; ?>
                <div class="sb-sidenav-menu-heading">Cấu Hình Hệ Thống</div>
                <?php if(checkPer($_SESSION['users']['id'], 'role_view')): ?>
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Phân Quyền
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapse1" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="/small/public/admin/roles">Quản lý Quyền</a>
                    </nav>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small"></div>
            <?php echo $_SESSION['users']['email'] ?>
        </div>
    </nav>
</div><?php /**PATH D:\Xamp\htdocs\small\resources\views/backend/layouts/navbarAdmin.blade.php ENDPATH**/ ?>