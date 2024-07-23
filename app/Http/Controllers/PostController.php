<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category');
        $sort = $request->query('sort', 'latest'); 

        $query = Post::query();

        if ($category) {
            $query->where('category', $category);
        }

        if ($sort == 'latest') {
            $query->latest();
        } else {
            $query->oldest();
        }

        $posts = $query->paginate(7);

        return view('dashboard', compact('posts', 'category', 'sort'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('detailpost', compact('post'));
    }
}
