<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**v
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'johndoe@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // DB::table('packages')->insert([
        //     [
        //         'name' => 'Basic Content Creation',
        //         'description' => 'Package includes basic content creation services such as social media posts and blog writing.',
        //         'price' => 50.00,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Advanced Content Marketing',
        //         'description' => 'This package covers content marketing strategies including SEO optimization and long-form articles.',
        //         'price' => 150.00,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Social Media Campaign',
        //         'description' => 'Full social media campaign management with daily content creation and engagement.',
        //         'price' => 250.00,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [
        //         'name' => 'Video Content Production',
        //         'description' => 'Package includes video scriptwriting, shooting, and editing for marketing purposes.',
        //         'price' => 500.00,
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ]);
    }
}
