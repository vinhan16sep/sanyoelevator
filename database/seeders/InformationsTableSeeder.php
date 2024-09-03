<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('informations')->insert([
            'type' => 'CONTACT',
            'label' => 'company_name_en',
            'value' => 'Nippon Sanyo lift associate co., Ltd.'
        ],[
            'type' => 'CONTACT',
            'label' => 'company_name_jp',
            'value' => 'Nippon Sanyo lift associate co.,Ltd.'
        ],[
            'type' => 'CONTACT',
            'label' => 'representative_en',
            'value' => 'Hiroyuki Hirata'
        ],[
            'type' => 'CONTACT',
            'label' => 'representative_jp',
            'value' => '平田洋介'
        ],[
            'type' => 'CONTACT',
            'label' => 'established_date_en',
            'value' => 'October 25, 2019'
        ],[
            'type' => 'CONTACT',
            'label' => 'established_date_jp',
            'value' => '令和1年10月25日'
        ],[
            'type' => 'CONTACT',
            'label' => 'business_contents_en',
            'value' => 'Export and sale of elevators'
        ],[
            'type' => 'CONTACT',
            'label' => 'business_contents_jp',
            'value' => 'エレベーターの輸出販売'
        ],[
            'type' => 'CONTACT',
            'label' => 'url_en',
            'value' => 'https://nippon-sanyo.com/'
        ],[
            'type' => 'CONTACT',
            'label' => 'url_jp',
            'value' => 'https://nippon-sanyo.com/'
        ]);
    }
}
