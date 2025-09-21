<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{

    public function profile(){
        return view('profiles.profile');
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        // バリデーション
        $validated = $request->validate([
            'username' => ['required','string','min:2','max:12'],
            'email' => [
                'required','string','email','min:5','max:40',
                Rule::unique('users','email')->ignore($user->id)
            ],
            'password' => [
                'nullable','regex:/^[a-zA-Z0-9]+$/','min:8','max:20','confirmed'
            ],
            'bio' => ['nullable','string','max:150'],
            'icon_image' => ['nullable','image','mimes:jpg,jpeg,png,bmp,gif,svg'],
        ]);

        // 更新処理
        $user->username = $validated['username'];
        $user->email = $validated['email'];
        $user->bio = $validated['bio'] ?? $user->bio;

        // パスワード変更があれば更新
        if (!empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }

        // アイコン画像のアップロード
        if ($request->hasFile('icon_image')) {
            $imageName = time().'.'.$request->icon_image->extension();
            $request->icon_image->move(public_path('images'), $imageName);
            $user->icon_image = $imageName;
        }

        $user->save();

        return redirect()->route('posts.index');
}
}
