<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class PegawaiController extends Controller
{
    public function index()
    {
        $nama = "Rhapsody";
        $tgl_lahir = Carbon::createFromDate(2006, 11, 23);
        $umur = $tgl_lahir->age;

        $tgl_harus_wisuda = Carbon::create(2028, 7, 11);
        $hari_ini = Carbon::now();
        $sisa_hari = $hari_ini->diffInDays($tgl_harus_wisuda, false);

        $current_semester = 3;
        $motivasi = $current_semester < 3
            ? "Masih awal, kejar TAK!"
            : "Jangan main-main, kurang-kurangi main game!";

        $data = [
            'name' => $nama,
            'my_age' => $umur,
            'hobbies' => ['Membaca Buku, Memasak, Eksploitasi SDA, Korupsi'],
            'tgl_harus_wisuda' => $tgl_harus_wisuda->toFormattedDateString(),
            'time_to_study_left' => $sisa_hari . ' hari lagi',
            'current_semester' => $current_semester,
            'motivasi' => $motivasi,
            'future_goal' => 'Menjadi Orang Kaya'
        ];

        return view('pegawai', $data);
    }
}

