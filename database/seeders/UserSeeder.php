<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678'),
                'is_admin' => 1,
            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => bcrypt('12345678'),
                'is_admin' => 0,
            ],
            [
                'name' => 'Mentor',
                'email' => 'mentor@gmail.com',
                'password' => bcrypt('12345678'),
                'is_admin' => 0,
            ],
            [
                'name' => 'Mentor 2',
                'email' => 'mentor2@gmail.com',
                'password' => bcrypt('12345678'),
                'is_admin' => 0,
            ]
        ];

        $mentor = [
            [
                'user_id' => 3,
                'slug' => 'mentor',
                'uuid' => '123456789',
                'description' => 'Mentor is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.',
                'image' => 'mentor.png',
                'status' => 'active',
                'created_by' => 'admin',
                'updated_by' => 'admin',
                'profession' => 'Mentor',
            ],
            [
                'user_id' => 4,
                'slug' => 'mentor2',
                'uuid' => '12344314121',
                'description' => 'Mentor is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.',
                'image' => 'mentor.png',
                'status' => 'active',
                'created_by' => 'admin',
                'updated_by' => 'admin',
                'profession' => 'Mentor',
            ]
        ];

        foreach ($users as $user) {
            \App\Models\User::create($user);
        }

        foreach ($mentor as $mentors) {
            \App\Models\Mentor::create($mentors);
        }
    }
}
