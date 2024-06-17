<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('user.fitur.laporan', [
            // 'data_buletin' => $data_buletin,
            // 'pagination' => $pagination
        ]);
    }
}
