@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <div class="row min-vh-100 align-items-center justify-content-center px-3">
        <div class="col-lg-6 col-md-8 col-sm-10">
            <div class="card shadow border-0 rounded-lg">
                <div class="card-body p-5">
                    <div class="text-center mb-4">
                        <a href="{{ route('wellcome') }}">
                            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="img-fluid mb-3" style="max-width: 150px;">
                        </a>
                        <h3 class="text-primary font-weight-bold">LOGIN</h3>
                    </div>

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('login.user') }}">
                        @csrf

                        <div class="form-group">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" class="form-control @if ($errors->has('nik')) is-invalid @endif" id="nik" name="nik" value="{{ old('nik') }}" autofocus
                                placeholder="Masukkan NIK anda" data-inputmask='"mask": "9999999999999999"' data-mask>
                            @if ($errors->has('nik'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('nik') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group position-relative">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control @if ($errors->has('password')) is-invalid @endif" id="password" name="password"
                                    placeholder="Masukkan password">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary toggle-password" type="button">
                                        <i class="fa fa-eye-slash"></i>
                                    </button>
                                </div>
                            </div>
                            @if ($errors->has('password'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                        </div>

                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <a href="{{ route('wellcome') }}" class="btn btn-outline-primary">Halaman Utama</a>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

       
    </div>
@endsection

@push('styles')
    <style>
        body {
            background: url('{{ asset('img/banner-user-dashboard.webp') }}') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
        }

        .card {
            background: #ffffff;
            border-radius: 12px;
            padding: 20px;
        }

        .text-primary {
    color: #000000 !important;
}

        .btn-primary {
            background-color: #51839C;
            border: none;
        }

        .btn-primary:hover {
            background-color: #3B6C81;
        }

        .btn-outline-primary {
            border-color: #51839C;
            color: #51839C;
        }

        .btn-outline-primary:hover {
            background-color: #51839C;
            color: #ffffff;
        }

        .form-label {
            font-weight: bold;
            color: #333;
        }

        .input-group .toggle-password {
            background: transparent;
            border: none;
        }

        .input-group .toggle-password i {
            color: #666;
        }

        .input-group .toggle-password:hover i {
            color: #000;
        }

        @media (max-width: 768px) {
            .row {
                margin-top: 20px;
            }
        }
    </style>
@endpush

@push('scripts')
    <script>
        document.querySelectorAll('.toggle-password').forEach(function (btn) {
            btn.addEventListener('click', function () {
                const passwordInput = btn.closest('.input-group').querySelector('input');
                const icon = btn.querySelector('i');

                if (passwordInput.type === 'password') {
                    passwordInput.type = 'text';
                    icon.classList.remove('fa-eye-slash');
                    icon.classList.add('fa-eye');
                } else {
                    passwordInput.type = 'password';
                    icon.classList.remove('fa-eye');
                    icon.classList.add('fa-eye-slash');
                }
            });
        });
    </script>
@endpush
