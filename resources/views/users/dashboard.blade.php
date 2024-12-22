@extends('layouts.guest')

@section('title', '| Dashboard')

@section('content')
    <div class="h-screen">

        @include('layouts.navbar')

        <div class="w-100 h-100 backgroud-desa">
            <div class="container h-100 d-flex flex-column align-items-center justify-content-center">
                <div class="text-center mb-5">
                    <h1 class="text-bold mb-4">Selamat Datang, {{ auth()->user()->name ?? 'Pengguna' }}</h1>
                    <p class="text-lg">Butuh pelayanan apa hari ini?</p>
                </div>
                <div class="w-100 d-flex justify-content-around align-items-center mt-4">
                    <a class="layanan" href="{{ route('pengajuan') }}">
                        <i class="fa fa-file-alt fa-6x"></i>
                        <p class="text-lg mt-4">Pengajuan Surat Pengantar</p>
                    </a>
                    <a class="layanan" href="{{ route('feedback') }}">
                        <i class="fa fa-users fa-6x"></i>
                        <p class="text-lg mt-4">Berikan Kritik dan Saran</p>
                    </a>
                    <a class="layanan" href="{{ route('pengaduan') }}">
                        <i class="fa fa-chalkboard-teacher fa-6x"></i>
                        <p class="text-lg mt-4">Aduan Masyarakat Desa</p>
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection

@push('styles')
    <style>
        .border-bottom-green {
            border-bottom: 5px solid #51839C;
        }

        .h-screen {
            height: 100vh;
        }

        .backgroud-desa {
            background-image: url("{{ asset('img/banner-user-dashboard.webp') }}");
            background-size: cover;
            top: 0;
            z-index: 1;
        }

        .layanan {
            width: 300px;
            height: 300px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
            background-color: #FFFFFF;
            border-radius: 20px;
            padding: 25px;
            text-decoration: none;
            color: #000000;
        }
    </style>
@endpush
