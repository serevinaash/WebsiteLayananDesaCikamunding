<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
     <!-- PWA  -->
     <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
    <link rel="manifest" href="{{ asset('manifest.json') }}">

    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon" />

    <!-- Buat feedback -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


    <title>Desa Cikamunding @yield('title')</title>

            <style>
                * {
                    scroll-behavior: smooth;
                }

                .border-bottom-green {
                    border-bottom: 5px solid #51839C;
                }

        .weather-card {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            position: relative;
            /* To position the sun icon */
        }

        .weather-title {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .input-group-text {
            background-color: #fff;
            border: none;
        }

        .weather-icon {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .weather-info {
            font-size: 18px;
            color: #555;
            margin-bottom: 10px;
        }

        .weather-btn {
            background-color: #007bff;
            border: none;
        }

        .weather-btn:hover {
            background-color: #0056b3;
        }

        .sunny-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #ffce00;
            font-size: 48px;
        }
            </style>

    @stack('styles')
</head>

<body>

    @yield('content')

    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/inputmask/jquery.inputmask.min.js') }}"></script>
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>

    <script>
        $(function() {
            $('.select2').select2();

            $('[data-mask]').inputmask();

            $(".email").inputmask({
                alias: "email"
            });

            $(".phone-number").inputmask({
                mask: "9999-9999-9999"
            });
        });
    </script>

    @stack('scripts')
    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if ("serviceWorker" in navigator) {
            navigator.serviceWorker.register("/sw.js").then(
                (registration) => {
                    console.log("Service worker registration succeeded:", registration);
                },
                (error) => {
                    console.error(Service worker registration failed: ${error});
                },
            );
        } else {
            console.error("Service workers are not supported.");
        }
    </script>
</body>

</html>
