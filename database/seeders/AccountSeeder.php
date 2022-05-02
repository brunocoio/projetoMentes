<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Account;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            'category_id' => 1,
            'user_id' => 1,
            'value' => 100
        ]);
        DB::table('accounts')->insert([
            'category_id' => 2,
            'user_id' => 1,
            'value' => 200
        ]);
        DB::table('accounts')->insert([
            'category_id' => 3,
            'user_id' => 1,
            'value' => 300
        ]);
        DB::table('accounts')->insert([
            'category_id' => 4,
            'user_id' => 1,
            'value' => 400
        ]);
        DB::table('accounts')->insert([
            'category_id' => 5,
            'user_id' => 1,
            'value' => 500
        ]);
        DB::table('accounts')->insert([
            'category_id' => 6,
            'user_id' => 1,
            'value' => 600
        ]);
    }
}
