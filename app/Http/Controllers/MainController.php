<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Pekerjaan;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function index() {
        // Data gender pegawai
        $genderData = Pegawai::select('gender', DB::raw('count(*) as total'))
            ->groupBy('gender')
            ->get();
        
        $maleCount = $genderData->where('gender', 'male')->first()->total ?? 0;
        $femaleCount = $genderData->where('gender', 'female')->first()->total ?? 0;
        
        // Top 5 pekerjaan dengan jumlah pegawai terbanyak
        $topPekerjaan = Pekerjaan::withCount('pegawai')
            ->orderBy('pegawai_count', 'desc')
            ->limit(5)
            ->get();
        
        return view('index', compact('maleCount', 'femaleCount', 'topPekerjaan'));
    }
}
