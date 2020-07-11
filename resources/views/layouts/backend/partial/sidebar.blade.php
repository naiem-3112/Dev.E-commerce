<!-- Main Sidebar Container -->
<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard')}}">Dev E-commerce</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.dashboard')}}">DE</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Modules</li>
            <li class="nav-item">
                <a href="{{ route('product.index')}}"><i class="fab fa-product-hunt"></i>Product</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('category.index')}}"><i class="fas fa-columns"></i>Category</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('subCategory.index')}}"><i class="fas fa-columns"></i>Sub Category</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('brand.index')}}"><i class="fas fa-columns"></i>Brand</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('vendor.index')}}"><i class="fas fa-columns"></i>Vendor</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('currency.index')}}"><i class="fas fa-money-bill-alt"></i>Currency</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('language.index')}}"><i class="fas fa-money-bill-alt"></i>Language</a>
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://demo.getstisla.com/index.html" target="_blank"
                class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Demo E-commerce
            </a>
        </div>
    </aside>
</div>
