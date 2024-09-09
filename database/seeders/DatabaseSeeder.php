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
        $user->name = "vladimir";
        $user->email = "vladimir";
        $user->password = "vladimir@asdasdas.com";
        $user->save();
    
        // \App\Models\User::factory(10)->create();

        User::factory(10)->create();
    }
}
