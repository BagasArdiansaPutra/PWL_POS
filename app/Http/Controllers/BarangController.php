<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BarangModel;
use Yajra\DataTables\Facades\DataTables;

class BarangController extends Controller
{

public function index()
{

$breadcrumb = (object)[
'title'=>'Data Barang',
'list'=>['Home','Barang']
];

$page = (object)[
'title'=>'Data barang'
];

$activeMenu='barang';

return view('barang.index',[
'breadcrumb'=>$breadcrumb,
'page'=>$page,
'activeMenu'=>$activeMenu
]);

}

public function list(Request $request)
{

$barang = BarangModel::select('barang_id','barang_nama');

return DataTables::of($barang)
->addIndexColumn()
->addColumn('aksi',function($barang){

return '<button class="btn btn-primary btn-sm">Edit</button>';

})
->rawColumns(['aksi'])
->make(true);

}

}
