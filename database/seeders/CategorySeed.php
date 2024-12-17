<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Movies'],
            ['name' => 'Animation'],
            ['name' => 'Education'],
            ['name' => 'Games'],
            ['name' => 'Blog'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
