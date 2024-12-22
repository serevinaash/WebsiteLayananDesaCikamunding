<nav class="navbar navbar-expand-lg navbar-light bg-light py-0" style="z-index: 2;">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('wellcome') }}">
            <img src="{{ asset('img/logo.png') }}" class="d-inline-block" width="50" height="50" alt="">
            <div class="d-flex flex-column ml-3">
                <span class="text-sm">DESA</span>
                <span class="text-bold text-sm">CIKAMUNDING</span>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="color: #000000;">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-4">
                    <a class="nav-link font-weight-bold" href="{{ route('wellcome') }}#profile">Profile Desa</a>
                </li>

            <!-- Berita -->
                <li class="nav-item mr-4">
                <a class="nav-link font-weight-bold" href="{{ route('berita') }}">Laman Berita</a>
                </li>

                <li class="nav-item dropdown mr-4">
                    <a class="nav-link font-weight-bold dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Layanan
                    </a>
                    <div class="dropdown-menu">
                        <!-- <a class="dropdown-item" href="{{ route('antrian') }}">Pengambilan Antrian</a> -->
                        <a class="dropdown-item" href="{{ route('pengajuan') }}">Pengajuan Surat Pengantar</a>
                        <a class="dropdown-item" href="{{ route('pengaduan') }}">Aduan Masyarakat</a>
                    </div>
                </li>

                <li class="nav-item mr-4">
                    <a class="nav-link font-weight-bold" href="{{ route('feedback') }}#kontak">Kritik dan Saran</a>
                </li>

        
                <li class="nav-item mr-4">
                    <a class="nav-link font-weight-bold" href="{{ route('wellcome') }}#kontak">Kontak</a>
                </li>
             
                @if (Auth::check())
                    <li class="nav-item dropdown mr-4">
                        <a class="nav-link font-weight-bold dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name }}
                            @if (Auth::user()->user_type != 1)
                                <span class="badge badge-danger">{{ $jumlah_notifikasi }}</span>
                            @endif
                        </a>
                        <div class="dropdown-menu">
                            @if (Request::is('dashboard'))
                                <a class="dropdown-item" href="{{ route('notifikasi') }}">Notifikasi <span class="badge badge-danger">{{ $jumlah_notifikasi }}</span></a>
                            @else
                                @if (Auth::user()->user_type != 1)
                                    <a class="dropdown-item" href="{{ route('notifikasi') }}">Notifikasi <span class="badge badge-danger">{{ $jumlah_notifikasi }}</span></a>
                                @endif
                                <a class="dropdown-item" href="{{ route('dashboard.user') }}">Dashboard</a>
                            @endif
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item" onclick="return confirm('Apakah anda yakin ingin keluar?')">Logout</button>
                            </form>
                        </div>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold btn rounded-pill" href="{{ route('login') }}" style="background-color: #51839C; color: #FFFFFF; padding: 8px 42px;">Login</a>
                    </li>
                @endif
            </ul>
        </div>
</nav>


@push('styles')
    <style>
        .navbar {
            margin-bottom: 0;
            padding-top: 5px;  /* Sesuaikan padding atas */
            padding-bottom: 5px;  /* Sesuaikan padding bawah */
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999;
            padding-top: 0px;  /* Sesuaikan padding atas */
            padding-bottom: 0px;  /* Sesuaikan padding bawah */
        }

     

        .navbar-nav .nav-link {
            padding-top: 5px;  /* Sesuaikan padding atas */
            padding-bottom: 5px;  /* Sesuaikan padding bawah */
            font-size: 14px;  /* Menurunkan ukuran font untuk navbar */
        }

        .navbar-toggler {
            padding: 5px 10px;  /* Kurangi ukuran tombol navbar */
        }

        body {
            padding-top: 60px;  /* Pastikan ada ruang di bawah navbar */
        }
    </style>
@endpush
