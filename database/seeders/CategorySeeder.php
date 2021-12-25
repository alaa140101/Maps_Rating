<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('categories')->truncate();
        $category  = new Category();
        $category->title='فنادق';
        $category->slug='فنادق';
        $category->save();
        $category  = new Category();
        $category->title='مطاعم';
        $category->slug='مطاعم';
        $category->save();
        $category  = new Category();
        $category->title='تسوق';
        $category->slug='تسوق';
        $category->save();
        $category  = new Category();
        $category->title='مدارس وجامعات';
        $category->slug='مدارس وجامعات';
        $category->save();
        $category  = new Category();
        $category->title='مستشفيات';
        $category->slug='مستشفيات';
        $category->save();
        $category  = new Category();
        $category->title='صيدليات';
        $category->slug='صيدليات';
        $category->save();
    }
}
