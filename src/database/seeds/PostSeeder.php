<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->delete();
        DB::table('posts')->insert([
            'title' => 'チワワ',
            'image_url' => 'https://portfolio-laravel-ap-northeast-1-877070015178.s3.ap-northeast-1.amazonaws.com/images/Ol6TkvP0Wq8h66das0fl1ShjYCtdyZY4qVOJ8V2E.jpeg',
            'created_at' => new \DateTime(),
        ]);
        DB::table('posts')->insert([
            'title' => '海辺',
            'image_url' => 'https://portfolio-laravel-ap-northeast-1-877070015178.s3.ap-northeast-1.amazonaws.com/images/69wJNX0310D51OWxd7ItvYTHvMmUn3aAXeMVl0nL.jpeg',
            'created_at' => new \DateTime(),
        ]);
        DB::table('posts')->insert([
            'title' => 'くしゃみ',
            'image_url' => 'https://portfolio-laravel-ap-northeast-1-877070015178.s3.ap-northeast-1.amazonaws.com/images/SV47lj0Cl4ByiPngkcQrb62NSawx3wxbZJAMXHiq.jpeg',
            'created_at' => new \DateTime(),
        ]);
        DB::table('posts')->insert([
            'title' => '眠そう',
            'image_url' => 'https://portfolio-laravel-ap-northeast-1-877070015178.s3.ap-northeast-1.amazonaws.com/images/U6XCSqpUkPeLsQwnVNFNuFMzpJaBqoKxEOxkuKYu.jpeg',
            'created_at' => new \DateTime(),
        ]);
        DB::table('posts')->insert([
            'title' => 'トイプードル',
            'image_url' => 'https://portfolio-laravel-ap-northeast-1-877070015178.s3.ap-northeast-1.amazonaws.com/images/dzFFet6Wut5QvL9YJYdeyYU56n2zytwTOkTShW8P.jpeg',
            'created_at' => new \DateTime(),
        ]);
        DB::table('posts')->insert([
            'title' => 'コーギー',
            'image_url' => 'https://portfolio-laravel-ap-northeast-1-877070015178.s3.ap-northeast-1.amazonaws.com/images/SkxAx0kIga8VUuLjjt88IIUNbPJJheUs6dpBJsBj.jpeg',
            'created_at' => new \DateTime(),
        ]);
        DB::table('posts')->insert([
            'title' => 'あくび',
            'image_url' => 'https://portfolio-laravel-ap-northeast-1-877070015178.s3.ap-northeast-1.amazonaws.com/images/avf8Ym4492gXbsJLHQSeplH1BWiypQTcmp6Lklpg.jpeg',
            'created_at' => new \DateTime(),
        ]);
    }
}
