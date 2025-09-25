<x-login-layout>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <div class="top-area">
    <div class="list-bar">
      <p>フォローリスト</p>
      <div class="follow-list">
        @foreach($followings as $user)
          <a href="{{ route('profile.show', $user->id) }}" class="follow-icon">
            <img src="{{ asset('images/' . $user->icon_image) }}" alt="{{ $user->username }}" class="user-icon-img">
          </a>
        @endforeach
      </div>
    </div>
  </div>

<hr class="custom-hr">

<div>
  <ul class="post-list">
    @foreach($posts as $value)
      <li class="post-block">
        <figure>
          <div class="user-icon">
            <img src="{{ asset('images/' . $value->user->icon_image) }}" alt="{{ $value->user->name ?? 'User' }}">
          </div>
        </figure>
        <div class="post-content">
          <div class="post-header">
            <div class="post-name">{{ $value->user->username }}</div>
            <div class="post-date">{{ $value->created_at->format('Y-m-d H:i') }}</div>
          </div>
          <div class="post-text">{{ $value->post }}</div>
        </div>
      </li>
      <hr class="post-divider">
    @endforeach
  </ul>

</x-login-layout>
