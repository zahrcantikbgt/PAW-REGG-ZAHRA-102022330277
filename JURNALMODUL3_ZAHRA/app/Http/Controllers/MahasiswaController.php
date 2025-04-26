<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'

        $mahasiswa = [
            'nama' => 'Zahra Annisa Inayah',
            'nim' => '102022330277',
            'email' => 'zahrannisayh28@gmail.com',
            'jurusan' => 'Sistem Informasi',
            'fakultas' => 'Fakultas Rekayasa Industri',
            'foto' => 'images/ara.jpg' 
        ];

        return view('profil', ['mahasiswa' => $mahasiswa]);
    }
}
