<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create([
            'name'=>'News'
        ]);

        $category2 = Category::create([
           'name'=>'Marketing'
       ]);

       $category3 = Category::create([
           'name'=>'Partnership'
       ]);
    }
}
