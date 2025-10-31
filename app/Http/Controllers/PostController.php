<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Team;
use App\Models\Players;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(Request $request)
    {
        // Загружаем справочные данные
        $users = User::all();
        $categories = Category::all();
        $teams = Team::all();
        $players = Team::all();


        // Валидация фильтров
        $request->validate([
            'q' => ['nullable', 'string'],
            'categoryId' => ['nullable', 'integer', 'min:1'],
            'user' => ['nullable', 'string'],
        ]);

        $f_q = $request->q;
        $f_category = $request->categoryId;
        $f_title = $request->title;
        $f_user = $request->user;
        $f_description = $request->description;

        // Основной запрос (оптимизирован)
        $posts = Post::with(['category', 'user'])
            ->when($f_q, function ($query) use ($f_q) {
                $query->where(function ($q) use ($f_q) {
                    $q->where('title', 'like', "%{$f_q}%");
                })->orWhereHas('user', function ($q) use ($f_q) {
                    $q->where('username', 'like', "%{$f_q}%");
                });
            })
            ->when($f_title, fn($q) => $q->where('title', $f_title))
            ->when($f_description, fn($q) => $q->where('description', 'like', "%{$f_description}%"))
            ->when($f_category, fn($q) => $q->where('category_id', $f_category))
            ->orderByDesc('created_at')
            ->paginate(10);

        // Возврат представления
        return view('posts.index', [
            'users' => $users,
            'categories' => $categories,
            'posts' => $posts,
            'teams' => $teams,
            'players' => $players,
            'f_description' => $f_description,
            'f_user' => $f_user,
            'f_q' => $f_q,
            'f_category' => $f_category,
            'f_title' => $f_title
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required'
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        Post::create($data);

        return redirect()->route('posts.index')->with([
            'success' => 'Täzelik goşuldy!'
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category_id' => 'required'
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $post->update($data);

        return redirect()->route('posts.index')->with([
            'success' => 'Täzelik täzelendi!'
        ]);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with([
            'success' => 'Täzelik pozuldy.'
        ]);
    }
}
