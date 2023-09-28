<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link " href="/dashboard">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            @if (Auth()->user()->level == 'Admin')
                <li class="nav-heading">DATA MASTER</li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('admin-pegawai.index') }}">
                        <i class="bi bi-person-vcard"></i>
                        <span>Data Pegawai</span>
                    </a>
                </li><!-- End F.A.Q Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('golongan-dashboard.index') }}">
                        <i class="bi bi-people-fill"></i>
                        <span>Golongan Pegawai</span>
                    </a>
                </li><!-- End F.A.Q Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('cuti-dashboard.index') }}">
                        <i class="bi bi-clipboard-data-fill"></i>
                        <span>Data Cuti</span>
                    </a>
                </li><!-- End F.A.Q Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('gaji-dashboard.index') }}">
                        <i class="bi bi-currency-dollar"></i>
                        <span>Data Gaji</span>
                    </a>
                </li><!-- End F.A.Q Page Nav -->


                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('presensi-dashboard.index') }}">
                        <i class="bi bi-easel-fill"></i>
                        <span>Presensi</span>
                    </a>
                </li><!-- End F.A.Q Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('laporan-gaji.index') }}">
                        <i class="bi bi-gem"></i><span>Laporan Gaji</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('laporan-cuti.index') }}">
                        <i class="bi bi-gem"></i><span>Laporan Cuti</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('laporan-presensi.index') }}">
                        <i class="bi bi-gem"></i><span>Laporan Presensi</span>
                    </a>
                </li>


                {{-- <li class="nav-item">
                    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                        <li>
                            <a href="charts-chartjs.html">
                                <i class="bi bi-circle"></i><span>Chart.js</span>
                            </a>
                        </li>
                        <li>
                            <a href="charts-apexcharts.html">
                                <i class="bi bi-circle"></i><span>ApexCharts</span>
                            </a>
                        </li>
                        <li>
                            <a href="charts-echarts.html">
                                <i class="bi bi-circle"></i><span>ECharts</span>
                            </a>
                        </li>
                    </ul>
                </li><!-- End Charts Nav --> --}}

                <li class="nav-heading">Pages</li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('user.index') }}">
                        <i class="bi bi-person-badge-fill"></i>
                        <span>Data User</span>
                    </a>
                </li><!-- End F.A.Q Page Nav -->
            @endif

            @if (Auth()->user()->level == 'WaliNagari')
                <li class="nav-heading">DATA MASTER</li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('admin-pegawai.index') }}">
                        <i class="bi bi-person-vcard"></i>
                        <span>Data Pegawai</span>
                    </a>
                </li><!-- End F.A.Q Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('golongan-dashboard.index') }}">
                        <i class="bi bi-people-fill"></i>
                        <span>Golongan Pegawai</span>
                    </a>
                </li><!-- End F.A.Q Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('walinagari-cuti.index') }}">
                        <i class="bi bi-clipboard-data-fill"></i>
                        <span>Data Cuti</span>
                    </a>
                </li><!-- End F.A.Q Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('gaji.index') }}">
                        <i class="bi bi-currency-dollar"></i>
                        <span>Data Gaji</span>
                    </a>
                </li><!-- End F.A.Q Page Nav -->


                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('presensi.index') }}">
                        <i class="bi bi-easel-fill"></i>
                        <span>Presensi</span>
                    </a>
                </li><!-- End F.A.Q Page Nav -->


                <li class="nav-heading">Pages</li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('user.index') }}">
                        <i class="bi bi-person-badge-fill"></i>
                        <span>Data User</span>
                    </a>
                </li><!-- End F.A.Q Page Nav -->
            @endif


            @if (Auth()->user()->level == 'Pegawai')
                <li class="nav-heading">DATA MASTER</li>

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('cuti.index') }}">
                        <i class="bi bi-clipboard-data-fill"></i>
                        <span>Pengajuan Cuti / Izin </span>
                    </a>
                </li><!-- End F.A.Q Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('gaji.index') }}">
                        <i class="bi bi-currency-dollar"></i>
                        <span>Gaji Pegawai</span>
                    </a>
                </li><!-- End F.A.Q Page Nav -->

                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('presensi.index') }}">
                        <i class="bi bi-easel-fill"></i>
                        <span>Presensi</span>
                    </a>
                </li><!-- End F.A.Q Page Nav -->

                <li class="nav-heading">Pages</li>
            @endif


            <li class="nav-item">
                <a class="nav-link collapsed" href="/logout-action">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span>
                </a>
            </li><!-- End F.A.Q Page Nav -->

        </ul>

    </aside><!-- End Sidebar-->
</nav>
