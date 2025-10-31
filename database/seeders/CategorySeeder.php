<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = ["Top News","Leagues & Competitions","Transfers &Rumours","Results",];
        foreach ($categories as $category) {
            Category::create(["name" => $category]);
        }
    }
}
