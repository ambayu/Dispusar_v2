<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BuletinController extends Controller
{

    public function index(Request $request)
    {
        $currentPage = $request->current_page ?? 1; // Get current page from the request, default to 1 if not provided

        $serverConfig = config('servers');
        $dispusarEndpoint = $serverConfig['dispusar'] . '/api/formulir/buletin?current_page=' . $currentPage;

        $response = Http::get($dispusarEndpoint);

        if ($response->successful()) {
            $data_buletin = $response->json()['data']; // Assuming the paginated data is in 'data' key
            $pagination = $response->json();
        } else {
            $data_buletin = [];
            $pagination = [];
        }

        return view('user.fitur.buletin', [
            'data_buletin' => $data_buletin,
            'pagination' => $pagination
        ]);
    }

    public function  show($id)
    {
        $serverConfig = config('servers');
        $dispusarEndpoint = $serverConfig['dispusar'] . '/api/formulir/buletin_detail?id=' . $id;
        $response = Http::get($dispusarEndpoint);
        if ($response->successful()) {
            $data_buletin = $response->json(); // Assuming the paginated data is in 'data' key
            $data_buletin['data']['updated_at'] = Carbon::parse($data_buletin['data']['updated_at']);
            $data_buletin['data']['created_at'] = Carbon::parse($data_buletin['data']['created_at']);
        } else {
            $data_buletin = [];

        }

        return view('user.fitur.buletin_detail',['data_buletin' => $data_buletin['data']]);
    }
}
