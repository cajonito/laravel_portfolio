<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
}
