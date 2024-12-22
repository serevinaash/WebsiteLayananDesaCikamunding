@extends('layouts.service')

@section('title', 'Buat Aduan')

@section('judul', 'Pengaduan')

@section('content')


    <style>
        body {
            background: url('{{ asset('img/banner-user-dashboard.webp') }}') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
        }
    </style>


    <div class="p-5">

        <h4 class="text-center mb-4">"Menyuarakan Ketidakpuasan secara Anonim: Mengungkap Pengaduan yang Tersembunyi"</h4>

        <form method="POST" action="{{ route('pengaduan.store') }}">
            @csrf

            <div class="form-group">
                <label for="nama" class="mb-3">Isi Aduan</label>
                <textarea name="isi_pengaduan" id="isi_pengaduan" class="form-control form-control-lg text-md @error('isi_pengaduan') is-invalid @enderror" rows="5" placeholder="Masukkan isi pengaduan anda">{{ old('isi_pengaduan') }}</textarea>
            </div>

            <div class="d-flex w-100 justify-content-end mt-5">
                <a href="{{ route('dashboard.user') }}" class="btn btn-outline-secondary px-5 py-2 rounded-pill mr-3">Kembali</a>
                <button type="submit" class="btn btn-primary btn-green-pastel px-5 py-2 rounded-pill" onclick="return confirm('Apakah anda yakin ingin mengirim pengaduan ini?')">Kirim Aduan</button>
            </div>
        </form>
    </div>

@endsection

@push('styles')
    <style>

          #isi_pengaduan {
            background-color: #f0f0f0; 
            border: 1px solid #d0d0d0; 
            color: #333; 
            padding: 10px;
            border-radius: 8px;
        }

        #isi_pengaduan:focus {
            outline: none;
            border-color: #51839C; 
        }
        .btn-green-pastel {
            background-color: #51839C !important;
            border-color: #51839C !important;
        }

        .btn-green-pastel:hover {
            background-color: #3B6E85 !important;
            border-color: #3B6E85 !important;
        }
    </style>
@endpush
