<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::withTranslation(App()->getLocale())->get();
        
        return View('welcome',compact('posts'));
    }

    public function detailsPost($id)
    {
        $post = Post::withTranslation(App()->getLocale())->findOrFail($id);
        $post = $post->translate(App()->getLocale());

        return View('details',compact('post'));
    }
}
