<x-login-layout>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<h2>投稿フォーム</h2>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <input type="text" name="post" placeholder="投稿内容を入力" required>
    <button type="submit">投稿</button>
</form>

<hr>

<div>
  <ul>
    @foreach($posts as $value)
      <li class="post-block">
        <figure>
          <img src="https://placehold.jp/50x50.png" alt="{{ $value->user->name ?? 'User' }}">
        </figure>
        <div class="post-content">
          <div>
            <div class="post-name">{{ $value->user->name ?? 'User' }}</div>
            <div>{{ $value->created_at->format('Y-m-d') }}</div>
          </div>
          <div>{{ $value->post }}</div>
        </div>
      </li>
    @endforeach
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
          </ul>
    </div>
</x-login-layout>
