<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

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
            if (!empty($data['pariban_puisi'])) {
                $data['pariban_puisi'][0]['updated_at'] = Carbon::parse($data['pariban_puisi'][0]['updated_at']);
                $data['pariban_puisi'][0]['created_at'] = Carbon::parse($data['pariban_puisi'][0]['created_at']);
            }

            if (!empty($data['pariban_cerpen'])) {
                $data['pariban_cerpen'][0]['updated_at'] = Carbon::parse($data['pariban_cerpen'][0]['updated_at']);
                $data['pariban_cerpen'][0]['created_at'] = Carbon::parse($data['pariban_cerpen'][0]['created_at']);
            }

            if (!empty($data['pariban_lukisan'])) {
                $data['pariban_lukisan'][0]['updated_at'] = Carbon::parse($data['pariban_lukisan'][0]['updated_at']);
                $data['pariban_lukisan'][0]['created_at'] = Carbon::parse($data['pariban_lukisan'][0]['created_at']);
            }

            if (!empty($data['pariban_vidio'])) {
                $data['pariban_vidio'][0]['updated_at'] = Carbon::parse($data['pariban_vidio'][0]['updated_at']);
                $data['pariban_vidio'][0]['created_at'] = Carbon::parse($data['pariban_vidio'][0]['created_at']);
            }
        } else {
            $data = 0;
        }

        $chunks_pp = array_chunk($data['pariban_puisi'], 3);
        $chunks_pc = array_chunk($data['pariban_cerpen'], 3);
        $chunks_pl = array_chunk($data['pariban_lukisan'], 3);
        $chunks_pv = array_chunk($data['pariban_vidio'], 3);
        $combined_data = array_merge($data['pariban_puisi'], $data['pariban_cerpen'], $data['pariban_lukisan'], $data['pariban_vidio']);
        // return $combined_data;

        return view('user.index', [
            'data_buletin' => $data['data'],
            'data_slider' => $data['slider'],
            'data_pameran' => $data['pameran'],
            'chunks_pp' => $chunks_pp,
            'chunks_pc' => $chunks_pc,
            'chunks_pl' => $chunks_pl,
            'chunks_pv' => $chunks_pv,
            'all_pariban' => $combined_data,
        ]);
    }
}
