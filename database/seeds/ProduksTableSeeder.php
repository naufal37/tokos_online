<?php

use Illuminate\Database\Seeder;
use App\Produks;
class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produks::create(["nama" => "Produk A","deskripsi"=>"Deskripsi Produk A created by model"]);
    }
}
