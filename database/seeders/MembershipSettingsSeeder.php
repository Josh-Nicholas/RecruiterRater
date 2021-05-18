<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembershipSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('membership_settings')->insert([
            'platform' => 'Android',
            'price1' => 333,
            'price3' => 555,
            'price6' => 999,
            'price12' => 1899,
            'currency' => 'EUR',
            'is_active' => true,
        ]);
        DB::table('membership_settings')->insert([
            'platform' => 'Apple iOS',
            'price1' => 333,
            'price3' => 555,
            'price6' => 999,
            'price12' => 1899,
            'currency' => 'EUR',
            'is_active' => true,
        ]);
        DB::table('membership_settings')->insert([
            'platform' => 'Android & iOS',
            'price1' => 600,
            'price3' => 1050,
            'price6' => 1850,
            'price12' => 3500,
            'currency' => 'EUR',
            'is_active' => true,
        ]);
    }
}
