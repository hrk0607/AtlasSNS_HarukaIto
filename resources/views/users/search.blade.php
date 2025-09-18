<x-login-layout>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

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

<hr class="custom-hr">

@if(isset($users))
  <ul class="search-results">
    @forelse($users as $user)
      <li>
        <div class="user-icon">
          <img src="{{ asset('images/' . $user->icon_image) }}" alt="{{ $user->username }}">
        </div>
        <div class="user-name">{{ $user->username }}</div>
      </li>
    @empty
      <li>該当するユーザーはいませんでした。</li>
    @endforelse
  </ul>
@endif
</x-login-layout>
