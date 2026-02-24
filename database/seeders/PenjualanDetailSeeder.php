<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data=[];
        $id=1;
        for ($pj=1;$pj<=10;$pj++){
            for ($i=1;$i<=3;$i++){
                $data[]=[
                    'detail_id'=>$id++,
                    'penjualan_id'=>$pj,
                    'barang_id'=>rand(1,10),
                    'harga'=>rand(16000,25000),
                    'jumlah'=>rand(1,5),
                ];
            }
        }
        DB::table('t_penjualan_detail')->insert($data);
    }
}