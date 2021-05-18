<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Review sample data
        DB::table('reviews')->insert([
            'user_id' => 1,
            'team' => 'COSTA COFFEE',
            'firm' => 'Steven Gregory1',
            'employer' => 'Steven Gregory1',
            'successful' => 'successful',
            'recruitment' => 'RR',
            'regarding_data' => '2021-05-15',
            'experience_stars' => 2,
            'recommend_emoj' => 4,
            'review_title' => 'My review for RR',
            'review_content' => 'Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice.',

            'communication_stars' => 3,
            'feedback_stars' => 4,
            'efficiency_stars' => 5,
            'information_stars' => 4,
            'throughout_stars' => 2,
            'treated_stars' => 3,

            'added_value' => 'yes',
            'interview_preparation' => 'no',
            'better_support' => 'notsure',
            'review_rating' => 'Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('reviews')->insert([
            'user_id' => 1,
            'team' => 'CNN',
            'firm' => 'Steven Gregory2',
            'employer' => 'Steven Gregory2',
            'successful' => 'successful',
            'recruitment' => 'RR',
            'regarding_data' => '2021-05-15',
            'experience_stars' => 3,
            'recommend_emoj' => 4,
            'review_title' => 'My review for RR',
            'review_content' => 'Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice.',

            'communication_stars' => 3,
            'feedback_stars' => 4,
            'efficiency_stars' => 5,
            'information_stars' => 4,
            'throughout_stars' => 2,
            'treated_stars' => 3,

            'added_value' => 'yes',
            'interview_preparation' => 'no',
            'better_support' => 'notsure',
            'review_rating' => 'Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('reviews')->insert([
            'user_id' => 1,
            'team' => 'Carnegie',
            'firm' => 'Steven Gregory3',
            'employer' => 'Steven Gregory3',
            'successful' => 'successful',
            'recruitment' => 'RR',
            'regarding_data' => '2021-05-15',
            'experience_stars' => 4,
            'recommend_emoj' => 4,
            'review_title' => 'My review for RR',
            'review_content' => 'Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice.',

            'communication_stars' => 3,
            'feedback_stars' => 4,
            'efficiency_stars' => 5,
            'information_stars' => 4,
            'throughout_stars' => 2,
            'treated_stars' => 3,

            'added_value' => 'yes',
            'interview_preparation' => 'no',
            'better_support' => 'notsure',
            'review_rating' => 'Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('reviews')->insert([
            'user_id' => 1,
            'team' => 'Eyzon',
            'firm' => 'Steven Gregory4',
            'employer' => 'Steven Gregory4',
            'successful' => 'successful',
            'recruitment' => 'RR',
            'regarding_data' => '2021-05-15',
            'experience_stars' => 5,
            'recommend_emoj' => 4,
            'review_title' => 'My review for RR',
            'review_content' => 'Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice.',

            'communication_stars' => 3,
            'feedback_stars' => 4,
            'efficiency_stars' => 5,
            'information_stars' => 4,
            'throughout_stars' => 2,
            'treated_stars' => 3,

            'added_value' => 'yes',
            'interview_preparation' => 'no',
            'better_support' => 'notsure',
            'review_rating' => 'Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('reviews')->insert([
            'user_id' => 1,
            'team' => 'Oakleaf Partnership',
            'firm' => 'Steven Gregory5',
            'employer' => 'Steven Gregory5',
            'successful' => 'successful',
            'recruitment' => 'RR',
            'regarding_data' => '2021-05-15',
            'experience_stars' => 1,
            'recommend_emoj' => 4,
            'review_title' => 'My review for RR',
            'review_content' => 'Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice.',

            'communication_stars' => 3,
            'feedback_stars' => 4,
            'efficiency_stars' => 5,
            'information_stars' => 4,
            'throughout_stars' => 2,
            'treated_stars' => 3,

            'added_value' => 'yes',
            'interview_preparation' => 'no',
            'better_support' => 'notsure',
            'review_rating' => 'Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        DB::table('reviews')->insert([
            'user_id' => 1,
            'team' => 'BNP PARIBAS',
            'firm' => 'Steven Gregory6',
            'employer' => 'Steven Gregory6',
            'successful' => 'successful',
            'recruitment' => 'RR',
            'regarding_data' => '2021-05-15',
            'experience_stars' => 5,
            'recommend_emoj' => 4,
            'review_title' => 'My review for RR',
            'review_content' => 'Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice.',

            'communication_stars' => 3,
            'feedback_stars' => 4,
            'efficiency_stars' => 5,
            'information_stars' => 4,
            'throughout_stars' => 2,
            'treated_stars' => 3,

            'added_value' => 'yes',
            'interview_preparation' => 'no',
            'better_support' => 'notsure',
            'review_rating' => 'Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice. Here is my review. Best practice.',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
