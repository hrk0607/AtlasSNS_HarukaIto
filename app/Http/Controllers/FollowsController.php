<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class FollowsController extends Controller
{
    //
    public function followList(){
        return view('follows.followList');
    }
    public function followerList(){
        return view('follows.followerList');
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

    public function index()
    {
        // 自分がフォローしているユーザー一覧を取得
        $followings = Auth::user()->followings;
        // ↑Eloquentのリレーションを使う（Userモデルに定義してあることが前提）

        return view('follows.followList', compact('followings'));
    }
}
