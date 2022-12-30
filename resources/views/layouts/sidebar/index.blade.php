<!-- sidebar @s -->
<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{ route('home') }}" class="logo-link nk-sidebar-logo">
                <h5 class="logo-small logo-img-small">PM</h5>
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
                    <li class="nk-menu-item @yield('pencarian')">
                        <a href="{{ route('mahasiswa.pencarian.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
                            <span class="nk-menu-text">Pencarian Dosen Pembimbing</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item @yield('historypencarian')">
                        <a href="{{ route('mahasiswa.pencarian.historypencarian') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
                            <span class="nk-menu-text">Dosen Tersimpan</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    @if(Auth::user()->role_id == 3)
                    <li class="nk-menu-item @yield('dosbing')">
                        <a href="{{ route('mahasiswa.dosbing.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
                            <span class="nk-menu-text">List Dosen Pembimbing</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    @endif
                    @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                        <li class="nk-menu-heading">
                            <h6 class="overline-title text-primary-alt">Master</h6>
                        </li><!-- .nk-menu-item -->
                        <li class="nk-menu-item @yield('dosen')">
                            <a href="{{ route('admin.dosen.index') }}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
                                <span class="nk-menu-text">Manajemen Data Dosen</span>
                            </a>
                        </li><!-- .nk-menu-item -->
                        <li class="nk-menu-item @yield('bidang_keahlian')">
                            <a href="{{ route('admin.bidang-keahlian.index') }}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
                                <span class="nk-menu-text">Bidang Keahlian</span>
                            </a>
                        </li><!-- .nk-menu-item -->
                        <li class="nk-menu-item @yield('ideal_master')">
                            <a href="{{ route('admin.ideal-master.index') }}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
                                <span class="nk-menu-text">Nilai Ideal</span>
                            </a>
                        </li><!-- .nk-menu-item -->
                        <li class="nk-menu-item @yield('gap_master')">
                            <a href="{{ route('admin.gap-master.index') }}" class="nk-menu-link">
                                <span class="nk-menu-icon"><em class="icon ni ni-activity-round-fill"></em></span>
                                <span class="nk-menu-text">Nilai Gap</span>
                            </a>
                        </li><!-- .nk-menu-item -->
                    @endif
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
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
<!-- sidebar @e -->
