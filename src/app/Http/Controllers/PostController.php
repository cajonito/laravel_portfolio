<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;

// use Intervention\Image\ImageManagerStatic as Image;
use App\Post;

class PostController extends Controller
{
    public function create(Request $request)
    {
        $this->validate($request, Post::$rules);
        $post = new Post;
        $form = $request->all();
        unset($form['_token']);
        $image = $request->file('image');
        // $image = Image::make($image)->orientate();
        unset($form['image']);
        $path = Storage::disk('s3')->putFile('images', $image, 'public');
        $url = Storage::disk('s3')->url($path);
        $form['image_url'] = $url;
        $post->fill($form)->save();

        return redirect('/');
    }

    public function reset()
    {
        DB::table('posts')->delete();
        DB::table('posts')->insert([
            'title' => '凛々しいチワワさん',
            'image_url' => 'https://portfolio-laravel-ap-northeast-1-877070015178.s3.ap-northeast-1.amazonaws.com/images/Ol6TkvP0Wq8h66das0fl1ShjYCtdyZY4qVOJ8V2E.jpeg',
            'created_at' => new \DateTime(),
        ]);
        DB::table('posts')->insert([
            'title' => '海辺でまったり',
            'image_url' => 'https://portfolio-laravel-ap-northeast-1-877070015178.s3.ap-northeast-1.amazonaws.com/images/69wJNX0310D51OWxd7ItvYTHvMmUn3aAXeMVl0nL.jpeg',
            'created_at' => new \DateTime(),
        ]);
        DB::table('posts')->insert([
            'title' => 'へっぷしっ！！',
            'image_url' => 'https://portfolio-laravel-ap-northeast-1-877070015178.s3.ap-northeast-1.amazonaws.com/images/SV47lj0Cl4ByiPngkcQrb62NSawx3wxbZJAMXHiq.jpeg',
            'created_at' => new \DateTime(),
        ]);
        DB::table('posts')->insert([
            'title' => 'ウトウト…',
            'image_url' => 'https://portfolio-laravel-ap-northeast-1-877070015178.s3.ap-northeast-1.amazonaws.com/images/U6XCSqpUkPeLsQwnVNFNuFMzpJaBqoKxEOxkuKYu.jpeg',
            'created_at' => new \DateTime(),
        ]);
        DB::table('posts')->insert([
            'title' => '切ない顔のトイプーちゃん',
            'image_url' => 'https://portfolio-laravel-ap-northeast-1-877070015178.s3.ap-northeast-1.amazonaws.com/images/dzFFet6Wut5QvL9YJYdeyYU56n2zytwTOkTShW8P.jpeg',
            'created_at' => new \DateTime(),
        ]);
        DB::table('posts')->insert([
            'title' => 'お散歩中のコーギー',
            'image_url' => 'https://portfolio-laravel-ap-northeast-1-877070015178.s3.ap-northeast-1.amazonaws.com/images/SkxAx0kIga8VUuLjjt88IIUNbPJJheUs6dpBJsBj.jpeg',
            'created_at' => new \DateTime(),
        ]);
        DB::table('posts')->insert([
            'title' => 'ふわぁ〜',
            'image_url' => 'https://portfolio-laravel-ap-northeast-1-877070015178.s3.ap-northeast-1.amazonaws.com/images/avf8Ym4492gXbsJLHQSeplH1BWiypQTcmp6Lklpg.jpeg',
            'created_at' => new \DateTime(),
        ]);
        return redirect('/');
    }
}
