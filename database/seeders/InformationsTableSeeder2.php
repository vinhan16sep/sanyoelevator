<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformationsTableSeeder2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('informations')->insert([
            'type' => 'ABOUT',
            'label' => 'privacy_policy_en',
            'value' => ''
        ]);
        DB::table('informations')->insert([
            'type' => 'ABOUT',
            'label' => 'privacy_policy_jp',
            'value' => ''
        ]);
    }
}
