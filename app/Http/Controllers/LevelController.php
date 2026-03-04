<?php
namespace App\Http\Controllers;
use App\Models\LevelModel;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;
class LevelController extends Controller
{
    public function index()
    {
        $breadcrumb = (object)[
            'title' => 'Data Level',
            'list' => ['Home','Level']
        ];
        $page = (object)[
            'title' => 'Data level pengguna'
        ];
        $activeMenu = 'level';
        return view('level.index', compact('breadcrumb','page','activeMenu'));
    }
    public function list()
    {
        $level = LevelModel::select('level_id','level_nama');
        return DataTables::of($level)
            ->addIndexColumn()
            ->addColumn('aksi', function ($level) {
                return '<button class="btn btn-sm btn-primary">Edit</button>';
            })
            ->rawColumns(['aksi'])
            ->make(true);
    }
}