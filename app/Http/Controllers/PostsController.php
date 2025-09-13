<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    // 投稿を保存する処理
    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'content' => 'required|string|max:150',
        ]);

        // 投稿を作成
        Post::create([
            'post' => $request->content,
            'user_id' => auth()->id(),
        ]);

        // 一覧ページへリダイレクト
        return redirect()->route('posts.index');
    }
}
