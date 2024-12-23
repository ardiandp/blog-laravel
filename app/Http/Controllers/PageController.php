<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PageController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function blog()
    {
        $categories = Category::all();
        $posts = Post::latest()->whereHas('category', function($query) use ($categories) {
            $query->whereIn('id', $categories->pluck('id'));
        })->paginate(10);
        
        return view('frontend.blog', compact('posts'));
       
    }

    public function blogShow($slug)
    {
        $article = Post::where('slug', $slug)->firstOrFail();
        return view('frontend.blog-show', compact('article'));
       
    }
}
