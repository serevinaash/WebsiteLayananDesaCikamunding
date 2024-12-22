<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use App\Services\WeatherService; // Tambahkan WeatherService

class GuestController extends Controller
{
    protected $weatherService;

    public function __construct(WeatherService $weatherService)
    {
        $this->weatherService = $weatherService;
    }

    public function wellcome()
    {
        $jumlah_notifikasi = Notifikasi::where('user_id', auth()->user()->id ?? null)
            ->where('status_notifikasi', Notifikasi::STATUS_UNREAD)
            ->count() ?? 0;

        $weatherData = $this->weatherService->getWeatherByCity('Banten');

        return view('wellcome', compact('jumlah_notifikasi', 'weatherData'));
    }

    public function informasi()
    {
        $jumlah_notifikasi = Notifikasi::where('user_id', auth()->user()->id ?? null)
            ->where('status_notifikasi', Notifikasi::STATUS_UNREAD)
            ->count() ?? 0;

        $weatherData = $this->weatherService->getWeatherByCity('Banten');

        return view('informasi', compact('jumlah_notifikasi', 'weatherData'));
    }
    public function feedback()
    {
        $jumlah_notifikasi = Notifikasi::where('user_id', auth()->user()->id ?? null)
            ->where('status_notifikasi', Notifikasi::STATUS_UNREAD)
            ->count() ?? 0;

        $weatherData = $this->weatherService->getWeatherByCity('Banten');

        return view('feedback', compact('jumlah_notifikasi', 'weatherData'));
    }

    public function berita()
    {

        $jumlah_notifikasi = Notifikasi::where('user_id', auth()->user()->id ?? null)->where('status_notifikasi', Notifikasi::STATUS_UNREAD)->count() ?? 0;
        $berita = [
        [
            'judul' => 'Dicuekin Pemerintah, Ribuan Warga Cikamunding Gotong Royong Perbaiki Jalan Rusak',
            'url' => 'https://daerah.sindonews.com/read/1451469/174/dicuekin-pemerintah-ribuan-warga-cikamunding-lebak-gotong-royong-perbaiki-jalan-rusak-1725772151',
            'thumbnail' => 'https://pict.sindonews.net/webp/732/pena/news/2024/09/08/174/1451469/dicuekin-pemerintah-ribuan-warga-cikamunding-lebak-gotong-royong-perbaiki-jalan-rusak-zum.webp', // Ganti dengan thumbnail asli jika ada
            'excerpt' => 'Ribuan warga Desa Cikamunding gotong royong memperbaiki jalan rusak akibat kurangnya perhatian pemerintah...',
        ],
        [
            'judul' => 'Indahnya Situ Cikamunding: Wisata Baru di Lebak Banten yang Instagramable',
            'url' => 'https://banten.tribunnews.com/2024/07/24/indahnya-situ-cikamuding-wisata-baru-di-lebak-banten-yang-instagramable',
            'thumbnail' => 'https://asset-2.tstatic.net/banten/foto/bank/images/situ-cikamunding-lebak-s.jpg',
            'excerpt' => 'Situ Cikamunding, destinasi wisata alam baru di Lebak Banten yang menyuguhkan keindahan dan daya tarik Instagramable...',
        ],
        [

            'judul' => 'Desa Cikamunding Porak-poranda Disapu Hujan Angin: Bangunan Ambruk hingga Listrik Lumpuh',
            'url' => 'https://dailyhits.id/desa-cikamunding-porak-poranda-disapu-hujan-angin-bangunan-ambruk-hingga-listrik-lumpuh/',
            'thumbnail' => 'https://editor.id/wp-content/uploads/2024/01/Angin-Puting.jpg',
            'excerpt' => 'Hujan disertai angin kencang menerjang wilayah Desa Cikamunding, Kecamatan Cilograng, ....',
        ],
        [
            'judul' => 'Situ Cikamunding: Danau Sejarah di Lebak Jadi Destinasi Wisata Terbaru',
            'url' => 'https://pintasan.co/situ-cikamunding-danau-sejarah-di-lebak-menjadi-destinasi-wisata-alam-terbaru-dengan-berbagai-wahana/',
            'thumbnail' => 'https://pintasan.co/wp-content/uploads/2024/09/wisata-alam-situ-cikamunding-jd.jpg',
            'excerpt' => 'Danau sejarah Situ Cikamunding di Lebak kini menjadi destinasi wisata terbaru dengan berbagai wahana menarik...',
        ],
        [
            'judul' => 'Antusias Masyarakat Desa Cikamunding Bergotong Royong',
            'url' => 'https://jaringgarudankri.com/2024/09/antusias-masyarakat-desa-cikamunding-bergotong-royong/',
            'thumbnail' => 'https://jaringgarudankri.com/wp-content/uploads/2024/09/IMG_20240907_111536.jpg',
            'excerpt' => 'Warga Desa Cikamunding kembali menunjukkan kekompakan mereka dalam bergotong royong memperbaiki fasilitas umum...',
        ],
        [
            'judul' => 'Puting Beliung Menggulung Cikamunding',
            'url' => 'https://www.radarbanten.co.id/2024/11/02/puting-beliung-menggulung-cikamunding/',
            'thumbnail' => 'https://i0.wp.com/www.radarbanten.co.id/wp-content/uploads/2024/11/IMG-20241102-WA0010-750x375.jpg',
            'excerpt' => 'Pemerintah Desa Cikamunding bersama tim relawan mulai mendata kerusakan dan kebutuhan warga yang terdampak oleh bencana...',
        ],
    ];

    foreach ($berita as &$item) {
        $item['thumbnail'] = $item['thumbnail'] ?: 'https://via.placeholder.com/150';
    }

    $weatherData = $this->weatherService->getWeatherByCity('Banten');

    return view('berita', compact('berita', 'jumlah_notifikasi', 'weatherData'));
    }



}
