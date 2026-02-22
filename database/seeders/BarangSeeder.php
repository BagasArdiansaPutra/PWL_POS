<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        for ($i=1; $i<=10; $i++) {
            $data[] = [
                'barang_id' => $i,
                'kategori_id' => rand(1,5),
                'barang_kode' => 'BRG'.$i,
                'barang_nama' => 'Barang '.$i,
                'harga_beli' => rand(5000,15000),
                'harga_jual' => rand(16000,25000),
            ];
        }
        DB::table('m_barang')->insert($data);
    }
}