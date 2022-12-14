<!DOCTYPE html>

{{-- @extends('layouts.app') --}}
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/img/Logo.png">
    <link href="../../vendor/admin/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <link href="../../vendor/admin/chartist/css/chartist.min.css" rel="stylesheet">
    <link href="../../css/admin/style.css" rel="stylesheet">
    <!-- Datatable -->
    <link href="../../vendor/admin/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e0bbcdc900.js" crossorigin="anonymous"></script>


</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="{{ url('/DashboardAdmin') }}" class="brand-logo">
                <img class="logo-abbr" src="/img/logoaja.png" alt="">
                <img class="logo-compact" src="/img/textlogo.png" alt="">
                <img class="brand-title" src="/img/textlogo.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="search_bar dropdown">
                                <span class="search_icon p-3 c-pointer" data-toggle="dropdown">
                                    <i class="mdi mdi-magnify"></i>
                                </span>
                                <div class="dropdown-menu p-0 m-0">
                                    <form>
                                        <input class="form-control" type="search" placeholder="Search"
                                            aria-label="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <ul class="navbar-nav ms-auto">
                            <!-- Authentication Links -->

                            





                                
                            <li class="nav-item dropdown header-profile">
                                
                                @if (Route::has('login'))
                                @auth
                                <x-app-layout>
                                </x-app-layout>
                                @endauth
                                
                                @endif
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item">
                                        <i class="icon-user"></i>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item">
                                        <i class="icon-envelope-open"></i>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="./login.html" class="dropdown-item">
                                        <i class="icon-key"></i>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->


        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="quixnav">
            <div class="quixnav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label first">Main Menu</li>
                    <li><a href="{{ url('/DashboardAdmin') }}">
                            <i class="icon icon-world-2"></i><span class="nav-text">Dashboard</span></a>
                    </li>
                    <li><a href="{{ url('/DashboardWisata') }}">
                            <i class="icon icon-form"></i><span class="nav-text">Paket Wisata</span></a>
                    </li>
                    <li><a href="{{ url('/DashboardArtikel') }}">
                            <i class="icon icon-single-copy-06"></i><span class="nav-text">Artikel</span></a>
                    </li>
                    <li><a href="{{ url('/Admin') }}">
                            <i class="icon icon-single-04"></i><span class="nav-text">Admin</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        @yield('content')

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright ?? Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
                <p>Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>

    <script src="../../vendor/global/global.min.js"></script>
    <script src="../../js/admin/quixnav-init.js"></script>
    <script src="../../js/admin/custom.min.js"></script>

    <script src="../../vendor/chartist/js/chartist.min.js"></script>

    <script src="../../vendor/moment/moment.min.js"></script>
    <script src="../../vendor/pg-calendar/js/pignose.calendar.min.js"></script>


    <script src="../../js/admin/dashboard/dashboard-2.js"></script>
    
    <!-- Datatable -->
    <script src="../../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../../js/admin/plugins-init/datatables.init.js"></script>

</body>

</html>
