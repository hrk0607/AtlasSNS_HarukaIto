<x-login-layout>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

                @if(Auth::user()->icon_image)
                <div class="user-icon">
                <img src="{{ asset('images/' . Auth::user()->icon_image) }}" alt="ユーザーアイコン">
                </div>
                @endif

<div class="container mt-3">
  <div class="post-form-area d-flex justify-content-center">
    <form action="{{ route('posts.store') }}" method="POST" class="d-flex align-items-center w-75">
      @csrf
      <div class="flex-grow-1 me-2">
        <input
          type="text"
          name="content"
          class="form-control post-input"
          placeholder="投稿内容を入力してください。"
          maxlength="150"
          required
        >
      </div>
      <button type="submit" class="post-btn">
        <img src="{{ asset('images/post.png') }}" alt="投稿" class="post-icon">
      </button>
    </form>
  </div>
</div>
                <hr>

<div>
  <ul class="post-list">
    @foreach($posts as $value)
      <li class="post-block">
        <figure>
          <img src="https://placehold.jp/50x50.png" alt="{{ $value->user->name ?? 'User' }}">
        </figure>
        <div class="post-content">
          <div class="post-header">
            <div class="post-name">{{ $value->user->name ?? 'User' }}</div>
            <div class="post-date">{{ $value->created_at->format('Y-m-d') }}</div>
          </div>
          <div class="post-text">{{ $value->post }}</div>
        </div>
      </li>
    @endforeach
  </ul>
</div>

<!-- 編集用モーダルは ul の外 -->
<div class="modal js-modal">
    <div class="modal__bg js-modal-close"></div>
    <div class="modal__content">
        <form action="" method="">
            <textarea name="" class="modal_post"></textarea>
            <input type="hidden" name="" class="modal_id" value="">
            <input type="submit" value="更新">
            {{ csrf_field() }}
        </form>
        <a class="js-modal-close" href="">閉じる</a>
    </div>
</div>

</x-login-layout>
