<x-login-layout>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <div class="top-area">
    <div class="list-bar">
      <p>フォロワーリスト</p>
      <div class="follower-list">
        @foreach($followers as $user)
        <a href="{{ route('profile.show', $user->id) }}" class="follower-icon">
          <img src="{{ asset('images/' . $user->icon_image) }}" alt="{{ $user->username }}" class="user-icon-img">
        </a>
        @endforeach
      </div>
    </div>
  </div>

  <hr class="custom-hr">

  <ul class="post-list">
    @foreach($followerPosts as $value)
    <li class="post-block">
      <figure>
        <div class="user-icon">
          <a href="{{ route('profile.show', $value->user->id) }}" class="follower-icon">
            <img src="{{ asset('images/' . $value->user->icon_image) }}" alt="{{ $value->user->name ?? 'User' }}">
          </a>
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
