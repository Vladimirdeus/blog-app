<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $user = new User();
        $user->name = "Vladimir";
        $user->email = "vladimir@asdasdas.com";
        $user->password = "1233";
        $user->save();
    
        // \App\Models\User::factory(10)->create();

        User::factory(100)->create();
    }
}
