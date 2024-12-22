@extends('layouts.guest')

@section('title', '| Feedback')

@section('content')

    <style>
        body {
            background: url('{{ asset('img/banner-user-dashboard.webp') }}') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
        }
    </style>

    @include('layouts.navbar')

    <div class="container mt-5">
        <h1 class="text-center" style="font-weight: bold;">Kritik dan Saran</h1>

        <!-- Menampilkan pesan sukses jika ada -->
        @if(session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <div class="row mt-5">
            <!-- Kolom Form Kritik dan Saran -->
            <div class="col-md-8">
                <form action="{{ route('feedback.store') }}" method="POST" class="w-100">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Kritik dan Saran</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required>{{ old('message') }}</textarea>
                        @error('message')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                
                </form>
            </div>

            <!-- Kolom Daftar Kritik dan Saran -->
            <div class="col-md-4">
                <div class="border p-3 rounded bg-light">
                    <h2 class="text-center">Komentar</h2>

                    @if($feedbacks->isEmpty())
                        <p class="text-center">Belum ada kritik dan saran yang dikirim.</p>
                    @else
                    <ul class="list-group">
                        @foreach ($feedbacks as $feedback)
                        <li class="list-group-item">
                            <div class="d-flex align-items-center">
                                <i class="fas fa-user mr-3" style="font-size: 1.5rem; color: #000000;"></i>
                                <div>
                                    <strong>{{ $feedback->name ?? 'Anonim' }}</strong>
                                    <p class="mb-1">{{ $feedback->message }}</p>
                                    <small class="text-muted">Dikirim pada {{ $feedback->created_at->format('d M Y, H:i') }}</small>
                                </div>
                            </div>
                         </li>
                         @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection


@push('styles')
<style>
    .form-label {
        display: inline-block;
        padding: 5px 10px;
        border: 2px solid #007bff;  
        border-radius: 4px;         
        background-color: #87CEEB;  
    }

    button[type="submit"] {
    margin-bottom: 20px; 
    }

    h1 {
    margin-top: 10px; 
    }

    input.form-control, textarea.form-control {
    background-color: transparent;  
    border: 2px solid black;       
    color: black;                 
    padding: 10px;                  
    }


</style>
@endpush
