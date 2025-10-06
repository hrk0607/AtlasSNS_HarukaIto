<x-login-layout>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <div class="profile-show">
    <div class="top-area">
      <div class="user-icon">
        <img src="{{ asset('images/' . $user->icon_image) }}" alt="{{ $user->username }}のアイコン">
      </div>
      <div class="user-info">
        <h2>{{ $user->username }}</h2>
        <p>{{ $user->bio ?? '自己紹介はまだありません。' }}</p>
      </div>
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

    </div>
  </div>

<hr class="custom-hr">

  <ul class="post-list">
    @foreach($userPosts as $post)
      <li class="post-block">
        <figure>
          <div class="user-icon">
            <img src="{{ asset('images/' . $post->user->icon_image) }}" alt="{{ $post->user->username }}のアイコン">
          </div>
        </figure>
        <div class="post-content">
          <div class="post-header">
            <div class="post-name">{{ $post->user->username }}</div>
            <div class="post-date">{{ $post->created_at->format('Y-m-d H:i') }}</div>
          </div>
          <div class="post-text">{{ $post->post }}</div>
        </div>
      </li>
      <hr class="post-divider">
    @endforeach
  </ul>

</x-login-layout>
