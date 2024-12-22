<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Notifikasi;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    // Menampilkan form feedback dan daftar kritik dan saran
    public function index()
    {
        // Mengambil semua data dari tabel feedback
        $feedbacks = Feedback::orderBy('created_at', 'desc')->get();

        // Hitung jumlah notifikasi (misalnya, jumlah feedback yang belum dibaca)
        $jumlah_notifikasi = Notifikasi::where('status_notifikasi', false)->count();

        // Mengirim data ke view
        return view('feedback', compact('feedbacks', 'jumlah_notifikasi'));
    }

    // Menampilkan daftar kritik dan saran untuk admin
    public function adminIndex()
    {
        // Mengambil semua data dari tabel feedback
        $feedbacks = Feedback::orderBy('created_at', 'desc')->get();

        // Hitung jumlah notifikasi (misalnya, jumlah feedback yang belum dibaca)
        $jumlah_feedback = Feedback::count();

        // Mengirim data ke view
        return view('admin.layanan.feedback.index', compact('feedbacks', 'jumlah_feedback'));
    }

    // Menyimpan kritik dan saran
    public function store(Request $request)
    {
        // Validasi input form
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'email' => 'nullable|email',
            'message' => 'required|string|max:1000',
        ]);

        // Menyimpan data ke database
        Feedback::create([
            'name' => auth()->check() ? auth()->user()->name : $request->name,
            'email' => auth()->check() ? auth()->user()->email : $request->email,
            'message' => $request->message,
        ]);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('feedback')->with('success', 'Kritik dan saran berhasil dikirim.');
    }
}
