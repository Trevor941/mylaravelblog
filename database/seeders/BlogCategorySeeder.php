<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BlogCategory;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bc1 = BlogCategory::create([
            'blog_id'=> 1,
            'category_id'=>1
        ]);
        $bc2 = BlogCategory::create([
            'blog_id'=> 2,
            'category_id'=>2
        ]);
        $bc = BlogCategory::create([
            'blog_id'=> 3,
            'category_id'=>3
        ]);
        $bc = BlogCategory::create([
            'blog_id'=> 4,
            'category_id'=>1
        ]);
        $bc = BlogCategory::create([
            'blog_id'=> 5,
            'category_id'=>2
        ]);
        $bc = BlogCategory::create([
            'blog_id'=> 6,
            'category_id'=>3
        ]);
        $bc = BlogCategory::create([
            'blog_id'=> 7,
            'category_id'=>1
        ]);
        $bc = BlogCategory::create([
            'blog_id'=> 8,
            'category_id'=>2
        ]);
        $bc = BlogCategory::create([
            'blog_id'=> 9,
            'category_id'=>3
        ]);
        $bc = BlogCategory::create([
            'blog_id'=> 10,
            'category_id'=>1
        ]);
    }
}
