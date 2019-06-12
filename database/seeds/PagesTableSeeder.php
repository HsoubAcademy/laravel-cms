<?php

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'slug' => "about-us",
            'title' => "نبذة عنا",
            'content' => "<p><span style='font-size: 14.4px;'></span></p><p><span style='font-size: 14.4px;'>تطبيق إدارة محتوى من أكاديمية حسوب.<br></span><br></p>",
        ]);
    }
}
