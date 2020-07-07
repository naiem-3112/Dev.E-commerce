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
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Product</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('product.create')}}">Create</a></li>
                    <li><a class="nav-link" href="{{ route('product.index')}}">List</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Category</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('category.create')}}">Create</a></li>
                    <li><a class="nav-link" href="{{ route('category.index')}}">List</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Sub Category</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('subCategory.create')}}">Create</a></li>
                    <li><a class="nav-link" href="{{ route('subCategory.index')}}">List</a></li>
                </ul>
            </li>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Brand</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('brand.create')}}">Create</a></li>
                    <li><a class="nav-link" href="{{ route('brand.index')}}">List</a></li>
                </ul>
            </li>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Order</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('order.create')}}">Create</a></li>
                    <li><a class="nav-link" href="{{ route('order.index')}}">List</a></li>
                </ul>
            </li>
            </li>
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://demo.getstisla.com/index.html" target="_blank" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Demo E-commerce
            </a>
        </div>
    </aside>
</div>
