<x-login-layout>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<form action="{{ route('posts.store') }}" method="POST">
  @csrf
<div class="post-form-area">
  <div class="user-icon">
    <img src="{{ asset('images/' . Auth::user()->icon_image) }}" alt="ユーザーアイコン">
  </div>
  <div class="post-form">
    <input
      type="text"
      name="content"
      class="post-input"
      placeholder="投稿内容を入力してください。"
      maxlength="150"
    >
@error('content')
    <div class="text-danger small">{{ $message }}</div>
@enderror
    <div class="post-bottom">
      <button type="submit" class="post-btn">
        <img src="{{ asset('images/post.png') }}" alt="投稿">
      </button>
    </div>
  </div>
</div>
</form>
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

          <!-- {{-- 自分の投稿だけ編集・削除ボタン --}} -->
@if(Auth::id() === $value->user_id)
  <div class="post-actions">
    <button
      class="js-edit-btn edit-btn"
      data-id="{{ $value->id }}"
      data-content="{{ $value->post }}">
    </button>
    <!-- {{-- ここを削除フォームからモーダル用ボタンに変更 --}} -->
    <button
      type="button"
      class="js-delete-btn trash-btn"
      data-id="{{ $value->id }}">
    </button>
  </div>
@endif
        </div>
      </li>
    @endforeach
  </ul>
</div>

<!-- 編集用モーダルは ul の外 -->
<div class="modal js-modal">
  <div class="modal__bg js-modal-close"></div>
  <div class="modal__content">
    <form id="editForm" action="" method="POST">
      @csrf
      @method('PUT')
      <textarea name="post" class="modal_post" maxlength="150" required></textarea>
      <input type="hidden" name="id" class="modal_id" value="">
      <input type="submit" value="更新">
    </form>
    <a class="js-modal-close" href="">閉じる</a>
  </div>
</div>

<!-- 削除用モーダル -->
<div class="modal js-delete-modal">
  <div class="modal__bg js-modal-close"></div>
  <div class="modal__content">
    <p>この投稿を削除します。よろしいでしょうか？</p>
    <form id="deleteForm" method="POST">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn btn-primary btn-modal">OK</button>
      <button type="button" class="btn btn-outline-secondary btn-modal js-modal-close">キャンセル</button>
    </form>
  </div>
</div>
</x-login-layout>
