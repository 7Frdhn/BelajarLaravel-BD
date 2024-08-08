<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="{{ asset('img/logo2.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beranda | Manajemen-BD</title>
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=fallback">

    <style>
        @media (max-width: 350px) {
            .btn {
                font-size: 12px;
                padding: 0.25rem 0.5rem;
            }
        }

        /* Adjust sidebar-logout for better positioning */
        .sidebar-logout {
            position: absolute;
            bottom: 0;
            width: calc(100% - 20px);
            left: 10px;
            background-color: #343a40;
            padding: 10px 0;
            border-top: 1px solid #dee2e6;
        }

        .sidebar-logout .nav-link {
            color: white;
            text-align: center;
            padding: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #dc3545;
            border-radius: 5px;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .sidebar-logout .nav-link i {
            margin-right: 10px;
            font-size: 14px;
        }

        .sidebar-logout .nav-link:hover {
            background-color: #c82333;
        }

        /* Navbar brand link style */
        .navbar-nav.ml-auto .brand-link {
            display: flex;
            align-items: center;
            background-color: transparent;
        }

        .navbar-nav.ml-auto .brand-link .brand-image {
            margin-right: 10px;
        }

        .navbar-nav.ml-auto .brand-link .brand-image img {
            display: block;
            height: 40px;
            width: auto;
        }

        /* Loading Screen Styles */
        #loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.3s ease;
        }

        .loading-content {
            text-align: center;
        }

        .loading-content img {
            animation: spin 1s linear infinite;
            height: 40px;
            width: 40px;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        .d-none {
            display: none;
        }

        /* Form Styles */
        .form-group {
            margin-bottom: 0.75rem;
        }

        .form-control-lg {
            font-size: 0.875rem;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
        }

        .input-group {
            display: flex;
            align-items: center;
            width: 100%;
        }

        .input-group .form-control {
            border-radius: 0.25rem 0 0 0.25rem;
        }

        .input-group .btn {
            border-radius: 0 0.25rem 0.25rem 0;
            font-size: 0.875rem;
        }

        .small-box {
            border-radius: 0.25rem;
            padding: 1rem;
            color: #fff;
            position: relative;
            overflow: hidden;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        .small-box .inner {
            padding: 1.5rem;
        }

        .small-box .icon {
            top: 0.5rem;
            right: 0.5rem;
            color: rgba(0, 0, 0, 0.15);
        }

        .card {
            border-radius: 0.25rem;
            overflow: hidden;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #f4f6f9;
            border-bottom: 1px solid #dee2e6;
            padding: 0.5rem 1rem;
        }

        .card-body {
            padding: 1rem;
        }

        /* Adjustments for table */
        .table thead th {
            background-color: #f8f9fa;
        }

        .table td, .table th {
            vertical-align: middle;
            font-size: 0.875rem;
        }

        .btn-sm {
            font-size: 0.75rem;
            padding: 0.25rem 0.5rem;
        }

        /* Adjust width of select and search box */
        .form-group .form-control-sm {
            max-width: 200px; /* Adjust width as needed */
            margin-right: 10px; /* Add space between select and search box */
        }

        .input-group-sm .form-control {
            max-width: 150px; /* Adjust width as needed */
        }

        .input-group-sm .btn {
            max-width: 50px; /* Adjust width as needed */
        }

        /* Center-align text in content header */
        .content-header .content-title {
            text-align: center;
            width: 100%;
        }

        

    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Loading Screen -->
        <div id="loading-screen" class="d-none">
            <div class="loading-content">
                <img src="{{ asset('img/logo2.png') }}" alt="Loading">
                <p>Loading...</p>
            </div>
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../index3.html" class="nav-link">BERANDA</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Brand Logo -->
                <li class="nav-item">
                    <a href="#" class="brand-link">
                        <img src="{{ asset('img/logo2.jpeg') }}" alt="SMK Telkom" class="brand-image img-circle elevation-0">
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('img/user.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Hi!, Admin</a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>Beranda</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('guru.tampil') }}" class="nav-link">
                                <i class="nav-icon 	fas fa-chalkboard-teacher"></i>
                                <p>Data Guru</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon 	far fa-id-card"></i>
                                <p>Data Siswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('prodi.index')}}" class="nav-link">
                                <i class="nav-icon far fa-address-card"></i>
                                <p>Data Prodi</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- /.sidebar -->
            <!-- Sidebar Logout -->
            <div class="sidebar-logout">
                <a href="/logout" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </div>
            <!-- /.sidebar-logout -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-12">
                            <h3 class="m-0 content-title">DATA SEKOLAH SMK TELKOM</h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
         
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var loadingScreen = document.getElementById('loading-screen');

            function showLoadingScreen() {
                loadingScreen.classList.remove('d-none');
            }

            function hideLoadingScreen() {
                loadingScreen.classList.add('d-none');
            }
            // Show loading screen on page load
            window.addEventListener('load', function() {
                hideLoadingScreen();
            });
            // Show loading screen on page transition
            window.addEventListener('beforeunload', function() {
                showLoadingScreen();
            });
            // Optional: if you want to handle clicks on anchor tags
            document.addEventListener('click', function(event) {
                var target = event.target.closest('a');
                if (target && !target.classList.contains('nav-link') && !target.closest('.sidebar')) {
                    showLoadingScreen();
                }
            });
        });
    </script>
</body>

</html>
