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
        ]);
        DB::table('informations')->insert([
            'type' => 'CONTACT',
            'label' => 'company_name_jp',
            'value' => 'Nippon Sanyo lift associate co.,Ltd.'
        ]);
        DB::table('informations')->insert([
            'type' => 'CONTACT',
            'label' => 'phone',
            'value' => '+81-8031215817'
        ]);
        DB::table('informations')->insert([
            'type' => 'CONTACT',
            'label' => 'hotline',
            'value' => '+81-8031215817'
        ]);
        DB::table('informations')->insert([
            'type' => 'CONTACT',
            'label' => 'address_en',
            'value' => '736 Takahitsuki, Funamachi, Toyama City, Toyama Prefecture, 939-2613'
        ]);
        DB::table('informations')->insert([
            'type' => 'CONTACT',
            'label' => 'address_jp',
            'value' => '〒939-2613富山県富山市婦中町高日附736'
        ]);
        DB::table('informations')->insert([
            'type' => 'CONTACT',
            'label' => 'google_map',
            'value' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3201.6048559509654!2d137.137263!3d36.635897!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff78f1fc9d91c6d%3A0x1c933bf39740d086!2z44CSOTM5LTI2MTMg5a-M5bGx55yM5a-M5bGx5biC5amm5Lit55S66auY5pel6ZmE77yX77yT77yW!5e0!3m2!1sja!2sjp!4v1725384199203!5m2!1sja!2sjp'
        ]);
        DB::table('informations')->insert([
            'type' => 'CONTACT',
            'label' => 'email',
            'value' => 'info@nippon-sanyo.com'
        ]);
        DB::table('informations')->insert([
            'type' => 'CONTACT',
            'label' => 'representative_en',
            'value' => 'Hiroyuki Hirata'
        ]);
        DB::table('informations')->insert([
            'type' => 'CONTACT',
            'label' => 'representative_jp',
            'value' => '平田洋介'
        ]);
        DB::table('informations')->insert([
            'type' => 'CONTACT',
            'label' => 'established_date_en',
            'value' => 'October 25, 2019'
        ]);
        DB::table('informations')->insert([
            'type' => 'CONTACT',
            'label' => 'established_date_jp',
            'value' => '令和1年10月25日'
        ]);
        DB::table('informations')->insert([
            'type' => 'CONTACT',
            'label' => 'business_contents_en',
            'value' => 'Export and sale of elevators'
        ]);
        DB::table('informations')->insert([
            'type' => 'CONTACT',
            'label' => 'business_contents_jp',
            'value' => 'エレベーターの輸出販売'
        ]);
        DB::table('informations')->insert([
            'type' => 'CONTACT',
            'label' => 'site_url',
            'value' => 'https://nippon-sanyo.com/'
        ]);
        
        DB::table('informations')->insert([
            'type' => 'ABOUT',
            'label' => 'text_en',
            'value' => ''
        ]);
        DB::table('informations')->insert([
            'type' => 'ABOUT',
            'label' => 'text_jp',
            'value' => ''
        ]);
        DB::table('informations')->insert([
            'type' => 'ABOUT',
            'label' => 'home_text_en',
            'value' => ''
        ]);
        DB::table('informations')->insert([
            'type' => 'ABOUT',
            'label' => 'home_text_jp',
            'value' => ''
        ]);
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
