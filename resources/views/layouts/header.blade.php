 <!--::header part start::-->
 <header class="main_menu home_menu">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-lg-12">
                 <nav class="navbar navbar-expand-lg navbar-light">
                     <a class="navbar-brand" href="index.html"> <img src="img/smpg.png" alt="logo" width="130%"> </a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse"
                         data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                         aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                     </button>

                     <div class="collapse navbar-collapse main-menu-item justify-content-end"
                         id="navbarSupportedContent">
                         <ul class="navbar-nav align-items-center">
                             <li class="nav-item active">
                                 <a class="nav-link" href="/home">Home</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="{{ route('admin-pegawai.index') }}">Data Pegawai</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="{{ route('cuti-dashboard.index') }}">Data Cuti/Izin</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="{{ route('gaji-dashboard.index') }}">Data Gaji</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="{{ route('presensi-dashboard.index') }}">Presensi</a>
                             </li>
                             @auth
                                 <li class="d-none d-lg-block">
                                     <a class="btn_1" href="/logout-action"> Logout</a>
                                 </li>
                             @else
                                 <li class="d-none d-lg-block">
                                     <a class="btn_1" href="/"> Sign In</a>
                                 </li>
                             @endauth
                         </ul>
                     </div>
                 </nav>
             </div>
         </div>
     </div>
 </header>

 <!-- Header part end-->

 {{-- <!-- ======= Header ======= -->

<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.html">Arsha</a></h1>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="/home"><b>Home</b></a></li>
                <li><a class="nav-link scrollto" href="{{ route('admin-pegawai.index') }}"><b>Data Pegawai</b></a></li>
                <li><a class="nav-link scrollto" href="{{ route('cuti-dashboard.index') }}"><b>Data Cuti</b></a></li>
                <li><a class="nav-link scrollto" href="{{ route('gaji-dashboard.index') }}"><b>Data Gaji</b></a></li>
                <li><a class="nav-link scrollto" href="{{ route('presensi-dashboard.index') }}"><b>Presensi</b></a>
                </li>
                @auth
                    <li><a class="getstarted scrollto" href="/logout-action">LOGOUT</a></li>
                @else
                    <li><a class="getstarted scrollto" href="/">Sign Up</a></li>
                @endauth
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>

<!-- End Header --> --}}
