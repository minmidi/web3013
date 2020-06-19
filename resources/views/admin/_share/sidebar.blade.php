<nav id="sidebar">
    <div class="sidebar-header">
        <div class="pull-left image">
            <img src="{{ asset('Dashboard/images/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>

        <div class="pull-left info">
            <p>Alexander</p>
            <a href="#"><i class="fa fa-circle text-success fa-xs"></i> Online</a>
        </div>
    </div>

    <ul class="list-unstyled components">
        <li>
            <a href="#"><i class="fas fa-tachometer-alt"></i> Trang chủ</a>
        </li>
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-chart-pie"></i> Sản phẩm</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="{{ route('products') }}"><i class="fas fa-list"></i> Danh sách sản phẩm</a>
                </li>
                <li>
                    <a href="{{ route('products_add') }}"><i class="fas fa-plus-circle"></i> Thêm sản phẩm</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
        </li>
    </ul>
</nav>
