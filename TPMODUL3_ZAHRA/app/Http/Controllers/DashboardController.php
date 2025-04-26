<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Set timezone ke Asia/Jakarta
        // - Buat variabel nama, jam, waktu
        // - Tentukan $salam berdasarkan jam (pagi, siang, sore, malam)
        // - Panggil fungsi getTanggal()
        // - Kirim data ke view 'dashboard' 
        $Nama = "Zahra";
        $Jam = date('H');
        $salam = match(true) {
            $Jam >= 5 && $Jam < 12 => "Selamat Pagi",
            $Jam >= 12 && $Jam < 15 => "Selamat Siang",
            $Jam >= 15 && $Jam < 18 => "Selamat Sore",
            default => "Selamat Malam",
        };
        $Waktu = date('H:i:s');
        $tanggal = $this->getTanggal();
        return view('dashboard', compact('Nama', 'salam', 'tanggal', 'Waktu'));
    }

    private function getTanggal()
    {
        // ==================3==================
        // - Kembalikan tanggal sekarang dalam format dd-mm-yyyy
        return date('d-m-Y');
    }
}
