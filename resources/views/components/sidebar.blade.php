<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Klinik KU_</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-home"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard-general-dashboard') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ url('dashboard-general-dashboard') }}">General Dashboard</a>
                    </li>

                </ul>
                <a href="{{ route('users.index') }}" class="nav-link"><i class="fas fa-fire"></i><span>Users</span></a>

                <a href="{{ route('doctors.index') }}" class="nav-link"><i class="fas fa-user"></i><span>Doctors</span></a>
                {{-- <ul class="dropdown-menu">
                    <li class=''>
                        <a class="nav-link" href="{{ route('doctors.index') }}">Doctors</a>
                    </li>

                </ul> --}}
            </li>

    </aside>
</div>
