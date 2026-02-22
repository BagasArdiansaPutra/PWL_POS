<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $data=[];
        for ($i=1;$i<=10;$i++){
            $data[]=[
                'penjualan_id'=>$i,
                'user_id'=>rand(1,3),
                'pembeli'=>'Pembeli '.$i,
                'penjualan_kode'=>'PJ'.$i,
                'penjualan_tanggal'=>now(),
            ];
        }
        DB::table('t_penjualan')->insert($data);
    }
}