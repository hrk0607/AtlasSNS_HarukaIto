<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function index(){
        return view('users.search');
    }

    public function search(Request $request)
{
    $keyword = $request->input('keyword');

    // 自分以外のユーザーをベースにする
    $query = User::where('id', '!=', auth()->id());

    if (!empty($keyword)) {
        $query->where('username', 'like', "%{$keyword}%");
    }

    $users = $query->get();

    return view('users.search', compact('users', 'keyword'));
}
}
