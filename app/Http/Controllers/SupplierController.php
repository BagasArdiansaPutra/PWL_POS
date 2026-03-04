<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SupplierModel;
use Yajra\DataTables\Facades\DataTables;

class SupplierController extends Controller
{

public function index()
{

$breadcrumb = (object)[
'title'=>'Data Supplier',
'list'=>['Home','Supplier']
];

$page = (object)[
'title'=>'Data supplier'
];

$activeMenu='supplier';

return view('supplier.index',[
'breadcrumb'=>$breadcrumb,
'page'=>$page,
'activeMenu'=>$activeMenu
]);

}

public function list(Request $request)
{

$supplier = SupplierModel::select('supplier_id','supplier_nama');

return DataTables::of($supplier)
->addIndexColumn()
->addColumn('aksi',function($supplier){

return '<button class="btn btn-primary btn-sm">Edit</button>';

})
->rawColumns(['aksi'])
->make(true);

}

}