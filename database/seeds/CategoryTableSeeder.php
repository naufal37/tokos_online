<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategori1 = new Category;
        $kategori1->name = "Celana";
        $kategori1->save();

        $kategori2 = new Category;
        $kategori2->name = "Baju";
        $kategori2->save();

        $kategori3 = new Category;
        $kategori3->name = "Tas";
        $kategori3->save();

        $kategori4 = new Category;
        $kategori4->name = "Kaos";
        $kategori4->save();

        $kategori5 = new Category;
        $kategori5->name = "Kemeja";
        $kategori5->save();

        $kategori6 = new Category;
        $kategori6->name = "Topi";
        $kategori6->save();
    }
}
