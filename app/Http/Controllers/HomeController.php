<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $users = User::get();
        $categories = Category::withCount("posts")->get();
        $posts = Post::latest()->limit(8)->get();

        return view('home.home')->with([
            'users' => $users,
            'categories' => $categories,
            'posts' => $posts
        ]);

    }

    public function locale($locale)
    {
        $locale = in_array($locale, ['tm', 'ru', 'en']) ? $locale : 'en';
        session()->put('locale', $locale);

        return redirect()->back();
    }
}


