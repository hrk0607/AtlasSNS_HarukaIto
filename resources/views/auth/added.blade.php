<x-logout-layout>
  <link rel="stylesheet" href="{{ asset('css/logout.css') }}">

  <div class="login-box">
    <div class="welcome">
      <p>{{ session ('username') }}さん</p>
      <p>ようこそ！AtlasSNSへ！</p>
    </div>
    <div class="added-completed">
      <p>ユーザー登録が完了しました。</p>
      <p>早速ログインをしてみましょう。</p>
    </div>

    {!! Form::button('ログイン画面へ', ['class' => 'btn btn-danger btn-lg', 'onclick' => "location.href='" . url('login') . "'"]) !!}
  </div>
</x-logout-layout>
