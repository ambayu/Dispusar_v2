<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Redirect;

class ParibanController extends Controller
{
    //
    public function index(Request  $request)
    {

        if ($request->id == 'puisi') {
            $category = 1;
        } elseif ($request->id == 'cerpen') {
            $category = 2;
        } elseif ($request->id == 'all') {
            $category = 0;
        } elseif ($request->id == 'lukisan') {
            $category = 3;
        } elseif ($request->id == 'vidio') {
            $category = 4;
        }
        elseif ($request->id == 'pantun') {
            $category = 5;
        }
        elseif ($request->id == 'motivasi') {
            $category = 6;
        }
        else {
            return Redirect::route('error');
        }
        $currentPage = $request->current_page ?? 1; // Get current page from the request, default to 1 if not provided

        $serverConfig = config('servers');
        $dispusarEndpoint = $serverConfig['dispusar'] . '/api/formulir/pariban?current_page=' . $currentPage . '&category=' . $category;
        $response = Http::get($dispusarEndpoint);

        if ($response->successful()) {
            $data_pariban = $response->json()['data']; // Assuming the paginated data is in 'data' key
        //    return $data_pariban;
            $pagination = $response->json();

            // Iterasi setiap item di $data_pariban['data'] dan format updated_at
            foreach ($data_pariban['data'] as &$item) {
                if (isset($item['updated_at'])) {
                    $item['updated_at'] = Carbon::parse($item['updated_at']); // Format sesuai kebutuhan
                    $item['created_at'] = Carbon::parse($item['created_at']); // Format sesuai kebutuhan
                }
            }
        } else {
            $data_pariban = [];
            $pagination = [];
        }
        // return $data_pariban;
        return view('user.fitur.pariban', [
            'data_pariban' => $data_pariban,
            'link' => 'pariban_puisi',
            'title' => $request->id,
            'pagination' => $pagination
        ]);
    }


    public function  show($id)
    {

        $serverConfig = config('servers');
        $dispusarEndpoint = $serverConfig['dispusar'] . '/api/formulir/pariban_detail?id=' . $id;
        $response = Http::get($dispusarEndpoint);
        if ($response->successful()) {
            $data_pariban = $response->json(); // Assuming the paginated data is in 'data' key
            $data_pariban['data']['updated_at'] = Carbon::parse($data_pariban['data']['updated_at']);
            $data_pariban['data']['created_at'] = Carbon::parse($data_pariban['data']['created_at']);
        } else {
            $data_pariban = [];
        }

        return view('user.fitur.pariban_detail', ['data_pariban' => $data_pariban['data']]);
    }
}
