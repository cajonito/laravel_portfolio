<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function create(Request $request)
    {
        $this->validate($request, Post::$rules);
        $post = new Post;
        $form = $request->all();
        unset($form['_token']);
        $post->fill($form)->save();

        return redirect('/');
    }
}
