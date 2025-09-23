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

</x-login-layout>
