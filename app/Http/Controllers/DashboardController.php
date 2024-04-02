<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index()
    {
        $serverConfig = config('servers');
        $dispusarEndpoint = $serverConfig['dispusar'] . '/api/formulir';

        $response = Http::get($dispusarEndpoint);

        if ($response->successful()) {
            $data = $response->json();
        } else {
            $data = 0;

        }

        $chunks_pp = array_chunk($data['pariban_puisi'], 3);
        $chunks_pc = array_chunk($data['pariban_cerpen'], 3);
        $chunks_pl = array_chunk($data['pariban_lukisan'], 3);
        $chunks_pv = array_chunk($data['pariban_vidio'], 3);

        return view('user.index', [
            'data_buletin' => $data['data'],
            'data_slider' => $data['slider'],
            'data_pameran' => $data['pameran'],
            'chunks_pp' => $chunks_pp,
            'chunks_pc' => $chunks_pc,
            'chunks_pl' => $chunks_pl,
            'chunks_pv' => $chunks_pv,
        ]);
    }
}
