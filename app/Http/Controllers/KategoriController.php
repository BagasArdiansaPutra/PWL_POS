<?php
namespace App\Http\Controllers;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
class KategoriController extends Controller
{
    public function index()
    {
        $breadcrumb = (object)[
            'title' => 'Data Kategori',
            'list' => ['Home','Kategori']
        ];
        $page = (object)[
            'title' => 'Data kategori barang'
        ];
        $activeMenu = 'kategori';
        return view('kategori.index',[
            'breadcrumb'=>$breadcrumb,
            'page'=>$page,
            'activeMenu'=>$activeMenu
        ]);
    }
    public function list(Request $request)
    {
        $kategori = KategoriModel::select('kategori_id','kategori_nama');
        return DataTables::of($kategori)
            ->addIndexColumn()
            ->addColumn('aksi', function($kategori){
                $btn = '<button class="btn btn-sm btn-primary">Edit</button>';
                return $btn;

            })
            ->rawColumns(['aksi'])
            ->make(true);
    }

}