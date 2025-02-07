<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'user1',
                'email' =>'user@gmail.com',
                'role' => 'user',
                'password' => bcrypt('user1'),
                
            ],
            [
                'name' => 'admin1',
                'email' =>'admin@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('admin1'),
            ],
            ]);
        User::factory(50)->create();
    }
}
