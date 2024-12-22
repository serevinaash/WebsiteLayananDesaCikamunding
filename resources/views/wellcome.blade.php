@extends('layouts.guest')


@section('content')

    <style>
        body {
            background-size: cover;
            min-height: 100vh;
        }
    </style>

    @stack('styles') <!-- Tempat untuk menambahkan style tambahan -->

@include('layouts.navbar')
<div class="home" style="overflow:hidden;">
     <!-- Bagian Latar Belakang Video -->
     <div class="w-screen h-screen my-0 video-bg position-relative">
        <video autoplay muted loop class="w-100 h-100" style="object-fit: cover;">
    <source src="{{ asset('img/vid.mp4') }}" type="video/mp4">
         Your browser does not support the video tag.
        </video>
        <div class="d-flex justify-content-center align-items-center position-absolute top-0 start-0 w-100 h-100">
    <div class="text-center" style="max-width: 800px; margin-top: -100px;">
        <!-- Judul -->
        <h1 class="text-bold" style="
            font-size: 60px;
            line-height: 1.3;
            color: white;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);">
            Selamat Datang di Layanan<br />Desa Cikamunding
        </h1>

        <!-- Deskripsi dengan Card -->
        <div class="card mt-5 mx-auto" style="
            margin-top: 20px;
            padding: 20px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 15px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);">
            <p style="
                font-size: 20px;
                line-height: 1.6;
                color: #444444;
                margin: 0;">
                Kini lebih mudah! Kelola urusan administrasi dan pelayanan desa dengan pengalaman digital terbaik untuk warga dan pemerintah desa.
            </p>
        </div>

        <!-- Tombol -->
        <div style="margin-top: 50px;">
            <a href="#struktur-organisasi" class="btn btn-primary px-4 py-2" style="
                font-size: 18px;
                border-radius: 50px;
                background-color: #51839C; /* Warna biru seperti tombol Login */
                border: none;
                box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);">
                Lihat Struktur Organisasi
            </a>
        </div>
    </div>
</div>
    </div>

    <!-- sejarah -->
    <div class="sejarah-desa container py-5" style="position: relative; overflow: hidden; margin-top:30px;">
        <h3 class="text-bold text-center mb-4" style="font-size: 2rem; color:#51839C;">Sejarah Desa</h3>
        <div class="d-flex flex-column align-items-center gap-4">
            <!-- Bagian Atas -->
            <div class="top-content d-flex align-items-center gap-4" style="width: 100%; margin:40px;">
                <!-- Teks -->
                <div class="sejarah" style="flex: 1;">
                    <p style="text-align: justify; font-size: 1.5rem;">
                        Tidak ada bukti yang otentik menyangkut pemberian nama Desa, yaitu Desa Cikamunding, namun menurut cerita masyarakat terdahulu bahwa Cikamunding berasal dari nama sebuah pohon Kamuning yang berada di hulu mata air Ciodeng. Sebelum terjadi pemekaran dari Cisungsang, seyogyanya Cikamunding merupakan bagian dari daerah otoritas Desa Cisungsang Kecamatan Bayah. Cikamunding dulunya hanyalah kemandoran, kemudian berubah menjadi Perwakilan Desa Cisungsang pada tahun 1953 yang membawahi beberapa kemandoran yaitu, yang berkembang pesat hingga saat ini:
                    </p>
                </div>
               <!-- Gambar -->
                <div style="flex: 1; display: flex; justify-content: center;">
                    <img src="https://asset-2.tstatic.net/banten/foto/bank/images/wisata-alam-situ-cikamunding-jd.jpg"
                        alt="Gambar Sejarah 2"
                        class="rounded-image mx-auto d-block"
                        style="width: 100%; max-width: 500px; height: auto; border-radius: 10px;">
                </div>

            </div>

            <!-- Bagian Bawah -->
            <div class="bottom-content d-flex align-items-center gap-4" style="width: 100%; max-width: 900px; margin:40px;">
                <!-- Teks -->
                <div style="flex: 1;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdL8p231JL3ExZ-I1D7whiP98ShBdhNH6EhQ&s"
                        alt="Gambar Sejarah 1"
                        class="rounded-image mx-auto d-block"
                        style="width: 100%; max-width: 400px; height: auto; border-radius: 10px;">
                </div>
                <!-- Gambar -->
                <div style="flex: 1;">
                    <ul style="margin-top: 20px; font-size: 1.5rem;">
                        <li>Kemandoran Cikamunding</li>
                        <li>Kemandoran Ciawi</li>
                        <li>Kemandoran Cijengkol</li>
                        <li>Kemandoran Cibeber</li>
                        <li>Kemandoran Kalideres</li>
                        <li>Kemandoran Ciciarang</li>
                        <li>Kemandoran Cileungsir</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Bagian Wisata Alam -->
        <div class="container py-5" style="margin-top:60px;">
            <h3 class="text-bold text-center mb-5" style="font-size: 2rem; color:#51839C;">Wisata Alam</h3>
            <div class="d-flex flex-wrap justify-content-center"  style="margin:40px 0;">
                <!-- Foto 1 -->
                <div class="photo-item" style="margin: 30px;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdL8p231JL3ExZ-I1D7whiP98ShBdhNH6EhQ&s"
                        alt="Wisata Alam 1" class="rounded-circle" style="width: 230px; height: 230px; object-fit: cover; margin-bottom: 20px;">
                    <h5 class="text-bold text-center" style="font-size: 1.2rem; color:#51839C;">Kemah Situ Cikamunding</h5>
                </div>
                <!-- Foto 2 -->
                <div class="photo-item" style="margin: 30px;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdL8p231JL3ExZ-I1D7whiP98ShBdhNH6EhQ&s"
                        alt="Wisata Alam 2" class="rounded-circle" style="width: 230px; height: 230px; object-fit: cover; margin-bottom: 20px;">
                    <h5 class="text-bold text-center" style="font-size: 1.2rem; color:#51839C;">Situ Cikamunding</h5>
                </div>
                <!-- Foto 3 -->
                <div class="photo-item" style="margin: 30px;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdL8p231JL3ExZ-I1D7whiP98ShBdhNH6EhQ&s"
                        alt="Wisata Alam 3" class="rounded-circle" style="width: 230px; height: 230px; object-fit: cover; margin-bottom: 20px;">
                    <h5 class="text-bold text-center" style="font-size: 1.2rem; color:#51839C;">Lapangan BIP</h5>
                </div>
                <!-- Foto 4 -->
                <div class="photo-item" style="margin: 30px;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdL8p231JL3ExZ-I1D7whiP98ShBdhNH6EhQ&s"
                        alt="Wisata Alam 4" class="rounded-circle" style="width: 230px; height: 230px; object-fit: cover; margin-bottom: 20px;">
                    <h5 class="text-bold text-center" style="font-size: 1.2rem; color:#51839C;">View Lain Situ Cikamunding</h5>
                </div>
                <!-- Foto 5 -->
                <div class="photo-item" style="margin: 30px;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdL8p231JL3ExZ-I1D7whiP98ShBdhNH6EhQ&s"
                        alt="Wisata Alam 5" class="rounded-circle" style="width: 230px; height: 230px; object-fit: cover; margin-bottom: 20px;">
                    <h5 class="text-bold text-center" style="font-size: 1.2rem; color:#51839C;">Situ Cikamunding All View</h5>
                </div>
            </div>
        </div>
    </div>

    <div class="half-circle-kiri"></div>
    <div class="half-circle-kanan"></div>


    <!-- VISI MISI -->

    <div class="w-screen py-5" style="background-color: #FFFFFF" id="profile">
        <div class="container mx-auto" style="max-width: 1200px;">
            <div class="grid-container" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 10px;">
                <div class="text-center">
                    <img src="{{ asset('img/logo.png') }}" alt="Visi Misi" class="w-50 mx-auto">
                    <h1 class="text-bold title-heading" style="color: #51839C;">Desa Cikamunding</h1>
                </div>
                <div>
                    <h1 class="text-bold text-center title-heading" style="color: #51839C;">Visi & Misi</h1>
                    <div class="container my-5 px-5">
                        <div class="visi d-flex flex-column align-items-center justify-content-center">
                            <h2 class="d-inline-block text-center text-bold"
                                style="color: #51839C; border-bottom: 1px solid #51839C;">VISI</h2>
                                <p class="paragraph-lead text-bold text-center">“ CIKAMUNDING,BAROKAH,PROGRESIF DAN BERKEADILAN
                                “
                            </p>
                        </div>
                        <div class="misi d-flex flex-column align-items-center justify-content-center">
                            <h2 class="d-inline-block text-center text-bold mt-4"
                                style="color: #51839C; border-bottom: 1px solid #51839C;">MISI</h2>
                            <p class="paragraph-lead text-bold text-center">“ TERPENUHINYA HAK-HAK DASAR WARGA SEBAGAI
                                KEWAJIBAN
                                PEMERINTAH DESA YANG AKAN DISELENGGARAKAN SELAMA KURUN WAKTU 8 (Delapan) TAHUN “</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Untuk mencapai Visi -->

    <div class="w-screen" style="background-color: #FFFFFF" id="profile">
        <div class="container px-5">
            <p class="paragraph-lead" style="text-align: justify; font-size: 1.3rem;">Untuk mencapai visi Cikamunding Barokah, Progresif dan Berkeadilan
                tersebut
                diatas, Desa Cikamunding telah menetapkan 7 (tujuh) Program sebagai berikut :</p>
        </div>
        <div class="container px-5">
            <div style="display: grid; grid-template-columns: 1fr auto 1fr; gap: 20px; align-items: center;">
                <div>
                    <h3 class="list-item text-justify">1. Mewujudkan Pemerintahan Desa yang jujur dan berkeadilan
                        dengan
                        pengambilan keputusan yang tepat dan cepat.</h3>
                    <h3 class="list-item text-justify">2. Mewujudkan program pertanian berkelanjutan.</h3>
                    <h3 class="list-item text-justify">3. Mengedepankan kejujuran dan musyawarah mufakat dalam berbagai
                        persoalan dimasyarakat.</h3>
                    <h3 class="list-item text-justify">4. Meningkatkan pelayanan publik dan keterbukaan informasi   (Transparansi).</h3>
                </div>
                <div style="border-left: 3px solid #51839C; height: 100%;"></div>
                <div>
                    <h3 class="list-item text-justify">5. Menanamkan nilai-nilai religius dan kearifan lokal melaui
                        program
                        pengembangan nilai-nilai spiritual dan adat-istiadat.</h3>
                    <h3 class="list-item text-justify">6. Mendorong seluruh potensi sumber daya Desa secara progresif
                        dan
                        berkemajuan.</h3>
                    <h3 class="list-item text-justify">7. Meningkat perekonomian dan kesejahteraan warga Desa melaui
                        pelatihan.</h3>
                </div>
            </div>
        </div>
    </div>
<!-- STRUKTUR ORGANISASI -->
<div class="w-screen" style="background-color: #FFFFFF" id="struktur-organisasi">
    <div class="container py-5 px-5">
        <h3 class="text-bold text-center mx-auto title-heading"
            style="color: #51839C; border: 2px solid #51839C; padding: 10px; max-width: 500px; border-radius: 15px;">
            Struktur Organisasi Desa Cikamunding
        </h3>
    </div>
    <div class="container px-5" style="position: relative;">
        <!-- Tombol Kiri -->
        <button id="scroll-left" style="position: absolute; left: 0; top: 50%; transform: translateY(-50%); z-index: 10; background: #51839C; color: white; border: none; border-radius: 50%; width: 40px; height: 40px;">&#8249;</button>

        <!-- Kontainer Scroll -->
        <div id="scroll-container" style="overflow-x: hidden; white-space: nowrap; scroll-behavior: smooth; padding: 10px; border: 2px solid #51839C; border-radius: 15px;">
            <!-- Profile 1 -->
            <div class="profile-card" style="display: inline-block; width: 250px; margin: 10px;">
                <div style="position: relative; border: 2px solid #51839C; border-radius: 15px; overflow: hidden;">
                    <div
                        style="background: url('{{ asset('img/banner-user-dashboard.webp') }}') no-repeat center center; background-size: cover; filter: blur(10px); position: absolute; top: -10px; left: -10px; right: -10px; bottom: -10px;">
                    </div>
                    <div style="position: relative; padding: 20px; text-align: center; backdrop-filter: blur(10px); z-index: 1;">
                        <img src="{{ asset('img/logo.png') }}" alt="Profile 1"
                            style="max-height: 150px; border-radius: 50%; margin-bottom: 10px;">
                        <h3 class="text-bold" style="color: #51839C; margin-top: 10px;">YAYAN HENDAYANA, ST</h3>
                        <p class="text-lg" style="color: #51839C;">KEPALA DESA</p>
                    </div>
                </div>
            </div>

            <!-- Tambahkan lebih banyak profil -->
            <div class="profile-card" style="display: inline-block; width: 250px; margin: 10px;">
                <div style="position: relative; border: 2px solid #51839C; border-radius: 15px; overflow: hidden;">
                    <div
                        style="background: url('{{ asset('img/banner-user-dashboard.webp') }}') no-repeat center center; background-size: cover; filter: blur(10px); position: absolute; top: -10px; left: -10px; right: -10px; bottom: -10px;">
                    </div>
                    <div style="position: relative; padding: 20px; text-align: center; backdrop-filter: blur(10px); z-index: 1;">
                        <img src="{{ asset('img/logo.png') }}" alt="Profile 2"
                            style="max-height: 150px; border-radius: 50%; margin-bottom: 10px;">
                        <h3 class="text-bold" style="color: #51839C; margin-top: 10px;">AGUS KARYANA,S.Pd</h3>
                        <p class="text-lg" style="color: #51839C;">Sekretaris Desa</p>
                    </div>
                </div>
            </div>
            <!-- Tambahkan lebih banyak profil -->
              <!-- Tambahkan lebih banyak profil -->
            <div class="profile-card" style="display: inline-block; width: 250px; margin: 10px;">
                <div style="position: relative; border: 2px solid #51839C; border-radius: 15px; overflow: hidden;">
                    <div
                        style="background: url('{{ asset('img/banner-user-dashboard.webp') }}') no-repeat center center; background-size: cover; filter: blur(10px); position: absolute; top: -10px; left: -10px; right: -10px; bottom: -10px;">
                    </div>
                    <div style="position: relative; padding: 20px; text-align: center; backdrop-filter: blur(10px); z-index: 1;">
                        <img src="{{ asset('img/logo.png') }}" alt="Profile 2"
                            style="max-height: 150px; border-radius: 50%; margin-bottom: 10px;">
                        <h3 class="text-bold" style="color: #51839C; margin-top: 10px;">DEDA KOMALA,S.Pd</h3>
                        <p class="text-lg" style="color: #51839C;">Kaur Keuangan</p>
                    </div>
                </div>
            </div>
             <!-- Tambahkan lebih banyak profil -->
             <div class="profile-card" style="display: inline-block; width: 250px; margin: 10px;">
                <div style="position: relative; border: 2px solid #51839C; border-radius: 15px; overflow: hidden;">
                    <div
                        style="background: url('{{ asset('img/banner-user-dashboard.webp') }}') no-repeat center center; background-size: cover; filter: blur(10px); position: absolute; top: -10px; left: -10px; right: -10px; bottom: -10px;">
                    </div>
                    <div style="position: relative; padding: 20px; text-align: center; backdrop-filter: blur(10px); z-index: 1;">
                        <img src="{{ asset('img/logo.png') }}" alt="Profile 2"
                            style="max-height: 150px; border-radius: 50%; margin-bottom: 10px;">
                        <h3 class="text-bold" style="color: #51839C; margin-top: 10px;">SISKA D,Amd.Kom</h3>
                        <p class="text-lg" style="color: #51839C;">Kaur Umum</p>
                    </div>
                </div>
            </div>
             <!-- Tambahkan lebih banyak profil -->
             <div class="profile-card" style="display: inline-block; width: 250px; margin: 10px;">
                <div style="position: relative; border: 2px solid #51839C; border-radius: 15px; overflow: hidden;">
                    <div
                        style="background: url('{{ asset('img/banner-user-dashboard.webp') }}') no-repeat center center; background-size: cover; filter: blur(10px); position: absolute; top: -10px; left: -10px; right: -10px; bottom: -10px;">
                    </div>
                    <div style="position: relative; padding: 20px; text-align: center; backdrop-filter: blur(10px); z-index: 1;">
                        <img src="{{ asset('img/logo.png') }}" alt="Profile 2"
                            style="max-height: 150px; border-radius: 50%; margin-bottom: 10px;">
                        <h3 class="text-bold" style="color: #51839C; margin-top: 10px;">EDI A NURJAMAN,S.Pd</h3>
                        <p class="text-lg" style="color: #51839C;">Kasi Pemerintahan dan Trantib</p>
                    </div>
                </div>
            </div>
             <!-- Tambahkan lebih banyak profil -->
             <div class="profile-card" style="display: inline-block; width: 250px; margin: 10px;">
                <div style="position: relative; border: 2px solid #51839C; border-radius: 15px; overflow: hidden;">
                    <div
                        style="background: url('{{ asset('img/banner-user-dashboard.webp') }}') no-repeat center center; background-size: cover; filter: blur(10px); position: absolute; top: -10px; left: -10px; right: -10px; bottom: -10px;">
                    </div>
                    <div style="position: relative; padding: 20px; text-align: center; backdrop-filter: blur(10px); z-index: 1;">
                        <img src="{{ asset('img/logo.png') }}" alt="Profile 2"
                            style="max-height: 150px; border-radius: 50%; margin-bottom: 10px;">
                        <h3 class="text-bold" style="color: #51839C; margin-top: 10px;">DEDE KURNIAWAN</h3>
                        <p class="text-lg" style="color: #51839C;">Kasi Ekbang dan Kesra</p>
                    </div>
                </div>
            </div>
             <!-- Tambahkan lebih banyak profil -->
             <div class="profile-card" style="display: inline-block; width: 250px; margin: 10px;">
                <div style="position: relative; border: 2px solid #51839C; border-radius: 15px; overflow: hidden;">
                    <div
                        style="background: url('{{ asset('img/banner-user-dashboard.webp') }}') no-repeat center center; background-size: cover; filter: blur(10px); position: absolute; top: -10px; left: -10px; right: -10px; bottom: -10px;">
                    </div>
                    <div style="position: relative; padding: 20px; text-align: center; backdrop-filter: blur(10px); z-index: 1;">
                        <img src="{{ asset('img/logo.png') }}" alt="Profile 2"
                            style="max-height: 150px; border-radius: 50%; margin-bottom: 10px;">
                        <h3 class="text-bold" style="color: #51839C; margin-top: 10px;">SAEP ABDUROHIM</h3>
                        <p class="text-lg" style="color: #51839C;">Staf Informasi</p>
                    </div>
                </div>
            </div>
             <!-- Tambahkan lebih banyak profil -->
             <div class="profile-card" style="display: inline-block; width: 250px; margin: 10px;">
                <div style="position: relative; border: 2px solid #51839C; border-radius: 15px; overflow: hidden;">
                    <div
                        style="background: url('{{ asset('img/banner-user-dashboard.webp') }}') no-repeat center center; background-size: cover; filter: blur(10px); position: absolute; top: -10px; left: -10px; right: -10px; bottom: -10px;">
                    </div>
                    <div style="position: relative; padding: 20px; text-align: center; backdrop-filter: blur(10px); z-index: 1;">
                        <img src="{{ asset('img/logo.png') }}" alt="Profile 2"
                            style="max-height: 150px; border-radius: 50%; margin-bottom: 10px;">
                        <h3 class="text-bold" style="color: #51839C; margin-top: 10px;">Wahyu</h3>
                        <p class="text-lg" style="color: #51839C;">Staf Data</p>
                    </div>
                </div>
            </div>
            <!-- Tambahkan lebih banyak profil -->
            <div class="profile-card" style="display: inline-block; width: 250px; margin: 10px;">
                <div style="position: relative; border: 2px solid #51839C; border-radius: 15px; overflow: hidden;">
                    <div
                        style="background: url('{{ asset('img/banner-user-dashboard.webp') }}') no-repeat center center; background-size: cover; filter: blur(10px); position: absolute; top: -10px; left: -10px; right: -10px; bottom: -10px;">
                    </div>
                    <div style="position: relative; padding: 20px; text-align: center; backdrop-filter: blur(10px); z-index: 1;">
                        <img src="{{ asset('img/logo.png') }}" alt="Profile 2"
                            style="max-height: 150px; border-radius: 50%; margin-bottom: 10px;">
                        <h3 class="text-bold" style="color: #51839C; margin-top: 10px;">SUDIRA,S.Pd</h3>
                        <p class="text-lg" style="color: #51839C;">Mantri Tani Desa</p>
                    </div>
                </div>
            </div>
            <!-- Tambahkan lebih banyak profil -->
            <div class="profile-card" style="display: inline-block; width: 250px; margin: 10px;">
                <div style="position: relative; border: 2px solid #51839C; border-radius: 15px; overflow: hidden;">
                    <div
                        style="background: url('{{ asset('img/banner-user-dashboard.webp') }}') no-repeat center center; background-size: cover; filter: blur(10px); position: absolute; top: -10px; left: -10px; right: -10px; bottom: -10px;">
                    </div>
                    <div style="position: relative; padding: 20px; text-align: center; backdrop-filter: blur(10px); z-index: 1;">
                        <img src="{{ asset('img/logo.png') }}" alt="Profile 2"
                            style="max-height: 150px; border-radius: 50%; margin-bottom: 10px;">
                        <h3 class="text-bold" style="color: #51839C; margin-top: 10px;">ABANG DEDI</h3>
                        <p class="text-lg" style="color: #51839C;">Jaga Raksa</p>
                    </div>
                </div>
            </div>
             <!-- Tambahkan lebih banyak profil -->
             <div class="profile-card" style="display: inline-block; width: 250px; margin: 10px;">
                <div style="position: relative; border: 2px solid #51839C; border-radius: 15px; overflow: hidden;">
                    <div
                        style="background: url('{{ asset('img/banner-user-dashboard.webp') }}') no-repeat center center; background-size: cover; filter: blur(10px); position: absolute; top: -10px; left: -10px; right: -10px; bottom: -10px;">
                    </div>
                    <div style="position: relative; padding: 20px; text-align: center; backdrop-filter: blur(10px); z-index: 1;">
                        <img src="{{ asset('img/logo.png') }}" alt="Profile 2"
                            style="max-height: 150px; border-radius: 50%; margin-bottom: 10px;">
                        <h3 class="text-bold" style="color: #51839C; margin-top: 10px;">EDI A NURJAMAN,S.Pd</h3>
                        <p class="text-lg" style="color: #51839C;">Kasi Pemerintahan dan Trantib</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tombol Kanan -->
        <button id="scroll-right" style="position: absolute; right: 0; top: 50%; transform: translateY(-50%); z-index: 10; background: #51839C; color: white; border: none; border-radius: 50%; width: 40px; height: 40px;">&#8250;</button>
    </div>
</div>

<!-- JavaScript -->
<script>
    const scrollContainer = document.getElementById('scroll-container');
    const scrollLeft = document.getElementById('scroll-left');
    const scrollRight = document.getElementById('scroll-right');

    scrollLeft.addEventListener('click', () => {
        scrollContainer.scrollBy({ left: -300, behavior: 'smooth' });
    });

    scrollRight.addEventListener('click', () => {
        scrollContainer.scrollBy({ left: 300, behavior: 'smooth' });
    });

    document.getElementById('scroll-left').addEventListener('click', function() {
    document.getElementById('scroll-container').scrollBy({ left: -250, behavior: 'smooth' });
});

document.getElementById('scroll-right').addEventListener('click', function() {
    document.getElementById('scroll-container').scrollBy({ left: 250, behavior: 'smooth' });
});

</script>


  <!-- CONTACT US -->

  <div class="w-screen mt-5 py-5 bg-green-pastel text-white" id="kontak">
    <h3 class="px-5 text-bold text-center">Kontak</h3>
        <div class="w-50 d-flex flex-column justify-content-center align-items-center mx-auto text-md">
            <p class="text-center my-3">Untuk informasi lebih lanjut terkait pelayanan Desa Cikamunding <br> dapat menghubungi kontak dibawah ini :</p>
            <p><i class="fa fa-phone-alt"></i> : (0252)5570973</p>
            <p><i class="fa fa-envelope"></i> : desacikamunding@gmail.com</p>
        </div>
    </div>
</div>

@endsection

@push('styles')
    <style>
        .bg-green-pastel {
            background-color: #51839C;
        }
    </style>
@endpush


@push('styles')
<style>

        .home {
            overflow: hidden; /* Agar elemen yang meluap seperti .half-circle tidak merubah lebar halaman */
            position: relative;
        }

        h3 {
    font-size: 20px;
}


        .half-circle-kiri {
            position: absolute;
                top: 770px; /* Posisi vertikal */
                left: -350px; /* Posisi horizontal, disesuaikan dengan keinginan */
                width: 700px; /* Lebar lingkaran */
                height: 700px; /* Tinggi lingkaran, harus sama dengan lebar */
                background-color: #51839C; /* Warna latar belakang lingkaran */
                border-radius: 50%; /* Membuat bentuk lingkaran */
                z-index: -1; /* Di belakang konten */
        }

        .half-circle-kanan {
            position: absolute;
            top: 1100px; /* Posisi vertikal */
            right: -300px; /* Posisi horizontal, disesuaikan dengan keinginan */
            width: 700px; /* Lebar lingkaran */
            height: 700px; /* Tinggi lingkaran, harus sama dengan lebar */
            background-color: #51839C; /* Warna latar belakang lingkaran */
            border-radius: 50%; /* Membuat bentuk lingkaran */
            z-index: -1; /* Di belakang konten */
        }

        .list-item {
            font-size: 20px;
        }


        .video-bg {
            position: relative;
            width: 100%;
            height: 100vh; /* Mengatur tinggi video untuk memenuhi layar penuh */
        }

        .video-bg video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1; /* Agar video berada di bawah konten */
        }

        .text-overlay {
            position: relative;
            z-index: 1; /* Memastikan teks berada di atas video */
            color: white; /* Warna teks putih agar kontras dengan latar belakang video */
        }

        .container {
            position: relative;
            z-index: 1;
            padding-top: 1vh; /* Memberikan jarak dari atas agar teks tidak berada terlalu dekat dengan bagian atas layar */
        }

        .sejarah-desa ul {
            padding-left: 20px;
            list-style-type: decimal;
        }

        .sejarah-desa img {
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        .rounded-image {
            width: 250px; /* Set width to make it square */
            height: 250px; /* Same height for a square shape */
            border-radius: 15px; /* Adjust the radius for rounded edges */
            object-fit: cover; /* Ensures image is centered and covers the space */
        }

        @media (max-width: 768px) {

            .welcome-heading {
                font-size: 30px;
            }

            .welcome-paragraph {
                font-size: 18px;
            }

            .half-circle-kiri {
            position: absolute;
                top: 950px; /* Posisi vertikal */
                left: -300px; /* Posisi horizontal, disesuaikan dengan keinginan */
                width: 500px; /* Lebar lingkaran */
                height: 600px; /* Tinggi lingkaran, harus sama dengan lebar */
                background-color: #51839C; /* Warna latar belakang lingkaran */
                border-radius: 60%; /* Membuat bentuk lingkaran */
                z-index: -1; /* Di belakang konten */
        }

        .half-circle-kanan {
            position: absolute;
            top: 1450px; /* Posisi vertikal */
            right: -300px; /* Posisi horizontal, disesuaikan dengan keinginan */
            width: 500px; /* Lebar lingkaran */
            height: 600px; /* Tinggi lingkaran, harus sama dengan lebar */
            background-color: #51839C; /* Warna latar belakang lingkaran */
            border-radius: 60%; /* Membuat bentuk lingkaran */
            z-index: -1; /* Di belakang konten */
        }


            .list-item {
                font-size: 18px;
            }



            .grid-container {
                grid-template-columns: 1fr !important;
                gap: 0px !important;
            }
        }



    </style>
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

@endpush
