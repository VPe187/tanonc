<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettlementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Settlement::create([ 'irsz' => '8800', 'telepules' => 'Nagykanizsa']);
        \App\Models\Settlement::create([ 'irsz' => '1036', 'telepules' => 'Budapest III.']);
    }
}
