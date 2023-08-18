<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create(['id' => '1','name' => 'Dicky Darmawan','email' => 'darmawandicky59@gmail.com','password' => '$2y$10$frRP3u2X4Rl2kMBAXpnE/OyNM.ueqZFbtLWLvBqdfLHmEQdP1AcNO']);
    }
}
