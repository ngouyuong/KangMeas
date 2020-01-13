
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{ asset('img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href='{{ route('dashboard') }}'
                       class="nav-link  {{ (request()->is('/')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview @if(request()->is('users') || request()->is('users/create') ||request()->is('users/edit') || request()->is('roles') ||request()->is('roles/create') || request()->is('permissions')) menu-open @else menu-close @endif">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>
                            User Management
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href='{{ route('users') }}'
                               class="nav-link {{ (request()->is('users')) || request()->is('users/create')|| request()->is('users/edit')  ? 'active' : '' }}">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Users
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href='{{ route('roles') }}'
                               class="nav-link {{ (request()->is('roles')) || request()->is('roles/create')  ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user-tag"></i>
                                <p>
                                    Roles
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href='{{ route('permissions') }}'
                               class="nav-link  {{ (request()->is('permissions')) ? 'active' : '' }}">
                                <i class="nav-icon far fa-user"></i>
                                <p>
                                    Permissions
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
