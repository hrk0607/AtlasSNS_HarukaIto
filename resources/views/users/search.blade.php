<x-login-layout>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<div class="top-area">
  <div class="search-bar">
<form action="{{ route('users.search') }}" method="GET" class="search-form">
  <input
    type="text"
    name="keyword"
    placeholder="ユーザー名"
    class="search-input"
  >
  <button type="submit" class="search-btn">
    <img src="{{ asset('images/search.png') }}" alt="検索">
  </button>
</form>
@if(!empty($keyword))
  <p class="search-keyword">検索ワード：{{ $keyword }}</p>
@endif
</div>
</div>


<hr class="custom-hr">

@if(isset($users))
<ul class="search-results">
  @forelse($users as $user)
    <li class="search-item">
      {{-- 左側（アイコン＋名前） --}}
      <div class="user-info">
        <div class="user-icon">
          <img src="{{ asset('images/' . $user->icon_image) }}" alt="{{ $user->username }}">
        </div>
        <div class="user-name">{{ $user->username }}</div>
      </div>

      {{-- 右側（ボタン） --}}
      <div class="user-action">
        @if(Auth::user()->followings->contains($user->id))
          <form action="{{ route('users.unfollow', $user->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm follow-btn">フォロー解除</button>
          </form>
        @else
          <form action="{{ route('users.follow', $user->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-info btn-sm text-white follow-btn">フォローする</button>
          </form>
        @endif
      </div>
    </li>
  @empty
    <li>該当するユーザーはいませんでした。</li>
  @endforelse
</ul>
@endif
</x-login-layout>
