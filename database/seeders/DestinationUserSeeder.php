<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DestinationUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        $destinations = Destination::all();

        foreach ($users as $user) {
            DB::table('destination_users')->insert([
                'user_id' => $user->id,
                'destination_id' => $destinations->random()->id,
            ]);
            DB::table('destination_users')->insert([
                'user_id' => $user->id,
                'destination_id' => $destinations->random()->id,
            ]);
            DB::table('destination_users')->insert([
                'user_id' => $user->id,
                'destination_id' => $destinations->random()->id,
            ]);
        }

    }
}
