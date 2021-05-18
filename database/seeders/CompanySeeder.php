<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Company sample data
        DB::table('companies')->insert([
            'company_name' => 'Starbucks LTD',
            'company_logo' => 'assets/images/starbucks.png',
            'company_image' => 'assets/images/starbucks-back.png',
            'location' => 'United States',
            'website' => 'www.starbucks.com',
        ]);
        DB::table('companies')->insert([
            'company_name' => 'Costa Coffee',
            'company_logo' => 'assets/images/costa.png',
            'company_image' => 'assets/images/costa-back.png',
            'location' => 'United Kingdom',
            'website' => 'www.starbucks.com',
        ]);
        DB::table('companies')->insert([
            'company_name' => 'Dunkin’ Donuts',
            'company_logo' => 'assets/images/dunkin.png',
            'company_image' => 'assets/images/dunkin-back.png',
            'location' => 'United States',
            'website' => 'www.starbucks.com',
        ]);
        DB::table('companies')->insert([
            'company_name' => 'Caffè Nero',
            'company_logo' => 'assets/images/nero.png',
            'company_image' => 'assets/images/nero-back.png',
            'location' => 'United Kingdom',
            'website' => 'www.starbucks.com',
        ]);
        DB::table('companies')->insert([
            'company_name' => 'Pret A Manger',
            'company_logo' => 'assets/images/pret-manger.png',
            'company_image' => 'assets/images/pret-manger-back.png',
            'location' => 'United States',
            'website' => 'www.starbucks.com',
        ]);
    }
}
