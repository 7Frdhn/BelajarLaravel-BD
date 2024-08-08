<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Guru</title>
    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <style>
        @media (max-width: 350px) {
            .btn {
                font-size: 12px;
                padding: 0.25rem 0.5rem;
            }
        }

        .sidebar-logout {
            position: absolute;
            bottom: 0;
            width: calc(100% - 20px); /* Adjust to match padding of sidebar */
            left: 10px; /* Adjust to match padding of sidebar */
            background-color: #343a40;
            padding: 15px 0;
        }

        .sidebar-logout .nav-link {
            color: white;
            text-align: center;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #dc3545;
            border-radius: 10px;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .sidebar-logout .nav-link i {
            margin-right: 15px;
            font-size: 16px;
        }

        .sidebar-logout .nav-link:hover {
            background-color: #c82333;
        }

        .navbar-nav.ml-auto .user-panel {
            display: flex;
            align-items: center;
        }

        .navbar-nav.ml-auto .user-panel .image {
            margin-right: 10px;
        }

        .navbar-nav.ml-auto .brand-link {
            display: flex;
            align-items: center;
            background-color: transparent; /* Make background transparent to match navbar */
        }

        .navbar-nav.ml-auto .brand-link .brand-image {
            margin-right: 10px;
            border-radius: 0; /* Remove any border-radius for a clean look */
        }

        .navbar-nav.ml-auto .brand-link .brand-image img {
            display: block;
            height: auto;
            width: auto;
        }

        .main-sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh; /* Membuat sidebar setinggi layar */
            overflow-y: auto; /* Scroll di sidebar jika perlu */
            z-index: 1030; /* Pastikan sidebar tetap di atas konten utama */
        }

        .content-wrapper {
            margin-left: 250px; /* Sesuaikan dengan lebar sidebar */
            padding: 20px;
        }

        .main-footer {
            position: absolute;
            bottom: 0;
            width: 100%;
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
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        .d-none {
            display: none;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
  
            <!-- Loading Screen -->
            <div id="loading-screen" class="d-none">
                <div class="loading-content">
                    <img src="{{ asset('img/logo2.png') }}" alt="Loading" height="60" width="60">
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
                    <a href="#" class="d-block">ADMIN</a>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="{{route('home')}}" class="nav-link">
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
            <a href="#" class="nav-link">
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
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Data Guru</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Form Edit Data Mata Pelajaran</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="POST" action="{{ route('mapel.simpan_edit', $mapel->kode_mapel) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="kode_mapel">Kode Mata Pelajaran</label>
                                <input type="text" class="form-control" id="kode_mapel" name="kode_mapel" required value="{{ old('kode_mapel', $mapel->kode_mapel) }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nama_mapel">Nama Mata Pelajaran</label>
                                <input type="text" class="form-control" id="nama_mapel" name="nama_mapel" required value="{{ old('nama_mapel', $mapel->nama_mapel) }}">
                            </div>
                            @error('nama_mapel')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                            <div class="form-group">
                                <label for="singkatan">Singkatan</label>
                                <input type="text" name="singkatan" class="form-control" id="singkatan" placeholder="Masukkan Alamat" required required value="{{ old('singkatan',$mapel->singkatan) }}">
                                @error('singkatan')
                                   <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="kelas">Kelas</label>
                                <select class="form-control" id="kelas" name="kelas" required>
                                    <option value="">Pilih Terlebih Dahulu</option>
                                    <option value="X" {{ $mapel->kelas == 'X' ? 'selected' : '' }}>X</option>
                                    <option value="XI" {{ $mapel->kelas == 'XI' ? 'selected' : '' }}>XI</option>
                                    <option value="XII" {{ $mapel->kelas == 'XII' ? 'selected' : '' }}>XII</option>
                                </select>
                            </div>
                            @error('kelas')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label for="pengajar">Pengajar</label>
                            <input type="text" name="pengajar" class="form-control" id="pengajar" placeholder="Masukkan Alamat" required required value="{{ old('pengajar',$mapel->pengajar) }}">
                            @error('pengajar')
                               <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="prodi">Prodi</label>
                            <select class="form-control" id="prodi" name="prodi" required>
                                <option value="">Pilih Terlebih Dahulu</option>
                                <prodi value="TJAT" {{ $mapel->prodi == 'TJAT' ? 'selected' : '' }}>Teknik Jaringan Akses Telekomunikasi</option>
                                <option value="TKJ" {{ $mapel->prodi == 'TKJ' ? 'selected' : '' }}>Teknik Komunikasi Jaringan</option>
                                <option value="RPL" {{ $mapel->prodi == 'RPL' ? 'selected' : '' }}>Rekayasa Perangkat Lunak</option>
                                <option value="DKV" {{ $mapel->prodi == 'DKV' ? 'selected' : '' }}>Design Komunikasi Visual</option>
                                <option value="MM" {{ $mapel->prodi == 'MM' ? 'selected' : '' }}>MultiMedia</option>
                            </select>
                        </div>
                        @error('prodi')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('mapel.tampil') }}" class="btn btn-secondary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
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
