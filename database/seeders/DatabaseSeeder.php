<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(PublicAreaTypeSeeder::class);
        $this->command->info('Közterületek betöltve!');
        $this->call(SettlementSeeder::class);
        $this->command->info('Települések betöltve!');
        $this->call(CountrySeeder::class);
        $this->command->info('Országok betöltve!');
    }
}
