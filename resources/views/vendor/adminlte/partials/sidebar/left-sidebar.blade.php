<aside class="main-sidebar {{ config('adminlte.classes_sidebar', 'sidebar-dark-primary elevation-4') }}">

    {{-- Sidebar brand logo --}}
    @if (config('adminlte.logo_img_xl'))
        @include('adminlte::partials.common.brand-logo-xl')
    @else
        @include('adminlte::partials.common.brand-logo-xs')
    @endif

    {{-- Sidebar menu --}}
    <div class="sidebar">
        <nav class="pt-2">
            <ul class="nav nav-pills nav-sidebar flex-column {{ config('adminlte.classes_sidebar_nav', '') }}"
                data-widget="treeview" role="menu"
                @if (config('adminlte.sidebar_nav_animation_speed') != 300) data-animation-speed="{{ config('adminlte.sidebar_nav_animation_speed') }}" @endif
                @if (!config('adminlte.sidebar_nav_accordion')) data-accordion="false" @endif>
                {{-- Configured sidebar links --}}
                {{-- @each('adminlte::partials.sidebar.menu-item', $adminlte->menu('sidebar'), 'item') --}}
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/dashboard') ? ' active' : '' }}"
                        href="{{ route('admin.dashboard') }}">
                        <i class="far fa-fw fa-file "></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('admin/users/*') ? ' active' : '' }}"
                        href="{{ route('admin.users.index') }}">
                        <i class="far fa-fw fa-user"></i> Users
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.restaurants.index') }}">
                        <i class="far fa-fw fa-user"></i> Restaurants
                    </a>
                </li>
            </ul>
        </nav>
    </div>

</aside>
