<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['post', 'user_id']; // ← 投稿内容のカラム名に合わせてね

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
