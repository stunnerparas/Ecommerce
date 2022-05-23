<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a target="_blank" href="/">Kanchan Cashmere</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ Request::segment(2) == 'dashboard' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-fire"></i>
                    <span>Dashboard</span></a>
            </li>

            <li
                class="dropdown {{ Request::segment(2) == 'sliders' || Request::segment(2) == 'company' || Request::segment(2) == 'pages' || Request::segment(2) == 'faqs' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Settings</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::segment(2) == 'sliders' ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.sliders.index') }}">Sliders</a></li>
                    <li class="{{ Request::segment(2) == 'company' ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.company.index') }}">Company Details</a></li>
                    <li class="{{ Request::segment(2) == 'pages' ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.pages.index') }}">Pages</a></li>
                    <li class="{{ Request::segment(2) == 'faqs' ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.faqs.index') }}">FAQ</a></li>
                </ul>
            </li>

            <li
                class="dropdown {{ Request::segment(2) == 'categories' || Request::segment(2) == 'products' || Request::segment(2) == 'attributes' ? 'active' : '' }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Products</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::segment(2) == 'categories' ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.categories.index') }}">Categories</a></li>
                    <li class="{{ Request::segment(2) == 'products' ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.products.index') }}">Products</a></li>
                    {{-- <li><a class="nav-link" href="layout-top-navigation.html">Orders</a></li> --}}
                    <li class="{{ Request::segment(2) == 'attributes' ? 'active' : '' }}"><a class="nav-link"
                            href="{{ route('admin.attributes.index') }}">Attributes</a></li>
                </ul>
            </li>

            <li class="{{ Request::segment(2) == 'users' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.users.index') }}"><i class="fas fa-fire"></i>
                    <span>Users</span></a>
            </li>

        </ul>

    </aside>
</div>
