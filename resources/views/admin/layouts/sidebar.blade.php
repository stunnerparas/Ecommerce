<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a target="_blank" href="/">Kanchan Cashmere</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">KC</a>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ Request::segment(2) == 'dashboard' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="fas fa-fire"></i>
                    <span>Dashboard</span></a>
            </li>

            @can('View Reports')
                <li class="{{ Request::segment(2) == 'reports' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.reports.index') }}"><i class="fas fa-fire"></i>
                        <span>Reports</span></a>
                </li>
            @endcan

            @canany([
                'View Banner',
                'View Deal Of The Week',
                'View Company Details',
                'View Page',
                'View Faq',
                'View
                Currency',
                'View Coupon',
                ])
                <li
                    class="dropdown {{ Request::segment(2) == 'sliders' || Request::segment(2) == 'coupon' || Request::segment(2) == 'currency' || Request::segment(2) == 'deals' || Request::segment(2) == 'company' || Request::segment(2) == 'pages' || Request::segment(2) == 'faqs' ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cog"></i>
                        <span>Settings</span></a>
                    <ul class="dropdown-menu">
                        @can('View Banner')
                            <li class="{{ Request::segment(2) == 'sliders' ? 'active' : '' }}"><a class="nav-link"
                                    href="{{ route('admin.sliders.index') }}">Banners</a></li>
                        @endcan

                        @can('View Deal Of The Week')
                            <li class="{{ Request::segment(2) == 'deals' ? 'active' : '' }}"><a class="nav-link"
                                    href="{{ route('admin.deals.index') }}">Deal of the week</a></li>
                        @endcan

                        @can('View Company Details')
                            <li class="{{ Request::segment(2) == 'company' ? 'active' : '' }}"><a class="nav-link"
                                    href="{{ route('admin.company.index') }}">Company Details</a></li>
                        @endcan

                        @can('View Page')
                            <li class="{{ Request::segment(2) == 'pages' ? 'active' : '' }}"><a class="nav-link"
                                    href="{{ route('admin.pages.index') }}">Pages</a></li>
                        @endcan

                        @can('View Faq')
                            <li class="{{ Request::segment(2) == 'faqs' ? 'active' : '' }}"><a class="nav-link"
                                    href="{{ route('admin.faqs.index') }}">FAQ</a></li>
                        @endcan

                        @can('View Currency')
                            <li class="{{ Request::segment(2) == 'currency' ? 'active' : '' }}"><a class="nav-link"
                                    href="{{ route('admin.currency.index') }}">Currencies</a></li>
                        @endcan

                        @can('View Coupon')
                            <li class="{{ Request::segment(2) == 'coupon' ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('admin.coupon.index') }}">Coupons</a>
                            @endcan
                        </li>
                    </ul>
                </li>
            @endcan

            @canany(['View Category', 'View Product', 'View Attribute', 'View Collection'])
                <li
                    class="dropdown {{ Request::segment(2) == 'categories' || Request::segment(2) == 'types' || Request::segment(2) == 'products' || Request::segment(2) == 'attributes' ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-tags"></i>
                        <span>Products</span></a>
                    <ul class="dropdown-menu">
                        @can('View Category')
                            <li class="{{ Request::segment(2) == 'categories' ? 'active' : '' }}"><a class="nav-link"
                                    href="{{ route('admin.categories.index') }}">Categories</a></li>
                        @endcan

                        @can('View Product')
                            <li class="{{ Request::segment(2) == 'products' ? 'active' : '' }}"><a class="nav-link"
                                    href="{{ route('admin.products.index') }}">Products</a></li>
                        @endcan

                        @can('View Attribute')
                            <li class="{{ Request::segment(2) == 'attributes' ? 'active' : '' }}"><a class="nav-link"
                                    href="{{ route('admin.attributes.index') }}">Attributes</a></li>
                        @endcan

                        @can('View Collection')
                            <li class="{{ Request::segment(2) == 'types' ? 'active' : '' }}"><a class="nav-link"
                                    href="{{ route('admin.types.index') }}">Collections</a></li>
                        @endcan
                    </ul>
                </li>
            @endcan

            @canany(['View Customers', 'View Business Customers'])
                <li
                    class="dropdown {{ Request::segment(2) == 'users' || Request::segment(2) == 'business-users' ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-tags"></i>
                        <span>Customers</span></a>
                    <ul class="dropdown-menu">
                        @can('View Customers')
                            <li class="{{ Request::segment(2) == 'users' ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('admin.users.index') }}">Normal Customers</a>
                            </li>
                        @endcan

                        @can('View Business Customers')
                            <li class="{{ Request::segment(2) == 'business-users' ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('admin.business.users') }}">Business Customers</a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan

            @can('View Order')
                <li class="{{ Request::segment(2) == 'orders' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.orders.index') }}"><i class="fas fa-cart-arrow-down"></i>
                        <span>Orders</span></a>
                </li>
            @endcan

            @can('View Activity Log')
                <li class="{{ Request::segment(2) == 'logs' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.logs.index') }}"><i class="fas fa-file-alt"></i>
                        <span>Activity Logs</span></a>
                </li>
            @endcan

            @can('View Newsletter')
                <li class="{{ Request::segment(2) == 'newsletter' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.newsletter.index') }}"><i class="fas fa-envelope"></i>
                        <span>Newsletters</span></a>
                </li>
            @endcan

            @can('View Blog')
                <li class="{{ Request::segment(2) == 'blogs' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.blogs.index') }}"><i class="fas fa-envelope"></i>
                        <span>Blogs</span></a>
                </li>
            @endcan

            @can('View Ticket')
                <li class="{{ Request::segment(2) == 'tickets' ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('admin.tickets.index') }}"><i class="fas fa-envelope"></i>
                        <span>Tickets</span></a>
                </li>
            @endcan

            {{-- @can('View Ticket') --}}
            <li class="{{ Request::segment(2) == 'manageshipping' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.manageshipping.index') }}"><i class="fas fa-envelope"></i>
                    <span>Manage Shippings</span></a>
            </li>
            {{-- @endcan --}}

            @if (Auth::user()->hasAnyRole('super admin'))
                <li
                    class="dropdown {{ Request::segment(2) == 'admins' || Request::segment(2) == 'roles' ? 'active' : '' }}">
                    <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-cog"></i>
                        <span>User Management</span></a>
                    <ul class="dropdown-menu">
                        <li class="{{ Request::segment(2) == 'admins' ? 'active' : '' }}"><a class="nav-link"
                                href="{{ route('admin.admins.index') }}">Admins</a></li>
                        <li class="{{ Request::segment(2) == 'roles' ? 'active' : '' }}"><a class="nav-link"
                                href="{{ route('admin.roles.index') }}">Roles</a></li>
                    </ul>
                </li>
            @endif

        </ul>

    </aside>
</div>
