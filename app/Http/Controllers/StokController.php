<?php

namespace App\Http\Controllers;

class StokController extends Controller
{
    public function index()
    {
        $breadcrumb = (object)[
            'title' => 'Stok Barang',
            'list' => ['Home', 'Stok']
        ];

        $page = (object)[
            'title' => 'Data Stok Barang'
        ];

        $activeMenu = 'stok';

        return view('stok.index', compact('breadcrumb','page','activeMenu'));
    }
}