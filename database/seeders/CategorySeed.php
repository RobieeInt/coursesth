<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = [
            [
                'name' => 'Web Development',
                'slug' => 'web-development',
                'description' => 'Web Development',
                'status' => 'active',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'name' => 'Mobile Development',
                'slug' => 'mobile-development',
                'description' => 'Mobile Development',
                'status' => 'active',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'name' => 'Design',
                'slug' => 'design',
                'description' => 'Design',
                'status' => 'active',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'name' => 'Marketing',
                'slug' => 'marketing',
                'description' => 'Marketing',
                'status' => 'active',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'name' => 'Business',
                'slug' => 'business',
                'description' => 'Business',
                'status' => 'active',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'name' => 'Photography',
                'slug' => 'photography',
                'description' => 'Photography',
                'status' => 'active',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'name' => 'IT & Software',
                'slug' => 'it-software',
                'description' => 'IT & Software',
                'status' => 'active',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'name' => 'Networking',
                'slug' => 'it-Networking',
                'description' => 'IT & Networking',
                'status' => 'active',
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
        ];

        foreach ($category as $key => $value) {
            Category::create($value);
        }
    }
}
