<!-- sidebar @s -->
<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{ route('home') }}" class="logo-link nk-sidebar-logo">
                <h5 class="logo-small logo-img-small">OP</h5>
            </a>
        </div>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Main Menu</h6>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item @yield('home')">
                        <a href="{{ route('home') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item @yield('perancangan')">
                        <a href="{{ route('admin.perancangan.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
                            <span class="nk-menu-text">Perancangan Jadwal</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Master</h6>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item @yield('mahasiswa')">
                        <a href="{{ route('admin.mahasiswa.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
                            <span class="nk-menu-text">Mahasiswa</span>
                        </a>
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-item @yield('dosen')">
                        <a href="{{ route('admin.dosen.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
                            <span class="nk-menu-text">Dosen</span>
                        </a>
                    </li><!-- .nk-menu-item -->

                    {{--
                    <li class="nk-menu-item @yield('akun')">
                        <a href="{{ route('akun.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
                            <span class="nk-menu-text">Ruangan</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    --}}
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Pengaturan</h6>
                    </li><!-- .nk-menu-heading -->
                    <li class="nk-menu-item has-sub">
                        <li class="nk-menu-item @yield('akun')">
                            <a href="{{ route('akun.index') }}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
                                <span class="nk-menu-text">Akun</span>
                            </a>
                        </li><!-- .nk-menu-item -->
                    </li><!-- .nk-menu-item -->

                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Tentang</h6>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item @yield('akun')">
                        <a href="{{ route('akun.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
                            <span class="nk-menu-text">Tentang</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item @yield('akun')">
                        <a href="{{ route('akun.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
                            <span class="nk-menu-text">Bantuan</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
<!-- sidebar @e -->
