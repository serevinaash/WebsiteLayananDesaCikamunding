@extends('layouts.guest')

@section('title', '| Berita')

@section('content')
    @include('layouts.navbar')

    <div class="container mt-5">
        <!-- Section Title -->
        <div class="text-center mb-5">
            <h1 style="font-weight: bold; font-size: 2.5rem; color: #51839C;">
                Update Terkini Seputar Desa Cikamunding
            </h1>
            <p style="font-size: 1.2rem; color: #777;">
                Temukan informasi terbaru, kegiatan, dan pengumuman penting seputar Desa Cikamunding di sini.
            </p>
        </div>

        <!-- Berita Cards -->
        <div class="row">
            @foreach ($berita as $item)
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm" style="border: none; border-radius: 15px; overflow: hidden;">
                        <img src="{{ $item['thumbnail'] }}" class="card-img-top" alt="Thumbnail">

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title" style="color: #333; font-size: 1.2rem;">
                                {{ $item['judul'] }}
                            </h5>
                            <p class="card-text" style="font-size: 0.95rem; color: #666;">
                                {{ $item['excerpt'] }}
                            </p>
                            <div class="mt-auto">
                                <a href="{{ $item['url'] }}" target="_blank" class="btn btn-primary btn-sm w-100" style="border-radius: 30px;">
                                    Baca Selengkapnya
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('styles')
<style>
    body {
        background-color: #f8f9fa;
    }

    .card-img-top {
        object-fit: cover;
        width: 100%;
        height: 200px;
    }

    .card {
        transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
    }

    .btn-primary {
        background-color: #51839C;
        border: none;
    }

    .btn-primary:hover {
        background-color: #3a6173;
    }
</style>
@endpush
