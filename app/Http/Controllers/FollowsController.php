<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Post;

class FollowsController extends Controller
{
    //
    public function followlist(){
        return view('follows.followlist');
    }
    public function followerlist(){
        return view('follows.followerlist');
    }

    // ログイン中のユーザーが誰かをフォローする処理
    public function follow(User $user)
    {
        // 二重フォロー防止
        if (!auth()->user()->followings()->where('followed_id', $user->id)->exists()) {
            auth()->user()->followings()->attach($user->id);
        }

        return back();
    }

    // フォロー解除
    public function unfollow(User $user)
    {
        // フォローしているときだけ解除
        if (auth()->user()->followings()->where('followed_id', $user->id)->exists()) {
            auth()->user()->followings()->detach($user->id);
        }

        return back();
    }

    public function follows()
{
    // 自分がフォローしているユーザー一覧を取得
    $followings = Auth::user()->followings;

    // フォローしているユーザーのIDだけ取得
    $followingIds = Auth::user()
        ->followings()
        ->pluck('followed_id'); // ←カラム名はDBに合わせてね

    // フォローしてる人の投稿だけ取得（自分のは除外）
    $followingPosts = Post::whereIn('user_id', $followingIds)
        ->latest()
        ->get();

    return view('follows.followList', compact('followings', 'followingPosts'));
}

    public function followers()
{
    // 自分がフォローしているユーザー一覧を取得
    $followers = Auth::user()->followers;

    // フォローしているユーザーのIDだけ取得
    $followerIds = Auth::user()
        ->followers()
        ->pluck('following_id'); // ←カラム名はDBに合わせてね

    // フォローしてる人の投稿だけ取得（自分のは除外）
    $followerPosts = Post::whereIn('user_id', $followerIds)
        ->latest()
        ->get();

    return view('follows.followerList', compact('followers', 'followerPosts'));

}
}
