<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelatih;

class DashboardController extends Controller
{
    public function index() {
        $totalPelatih = Pelatih::count();
        $pelatihAktif = Pelatih::where('status', 'Tersedia')->get();
        $totalPelatihAktif = $pelatihAktif->count();

        return view('dashboard', ['totalPelatih'=> $totalPelatih, 'pelatihAktif'=> $pelatihAktif, 'totalPelatihAktif'=> $totalPelatihAktif]);
    }
}
