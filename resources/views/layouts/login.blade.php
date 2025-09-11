<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <!--IEブラウザ対策-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="ページの内容を表す文章" />
  <title></title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }} ">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!--スマホ,タブレット対応-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Scripts -->
  <!--サイトのアイコン指定-->
  <link rel="icon" href="画像URL" sizes="16x16" type="image/png" />
  <link rel="icon" href="画像URL" sizes="32x32" type="image/png" />
  <link rel="icon" href="画像URL" sizes="48x48" type="image/png" />
  <link rel="icon" href="画像URL" sizes="62x62" type="image/png" />
  <!--iphoneのアプリアイコン指定-->
  <link rel="apple-touch-icon-precomposed" href="画像のURL" />
  <!--OGPタグ/twitterカード-->
</head>

<body>
  <header>
    @include('layouts.navigation')
  </header>
  <!-- Page Content -->
  <div id="row">
    <div id="container">
      {{ $slot }}
    </div>
<div id="side-bar">
  <div id="confirm">
    <p>{{ Auth::user()->username }}さんの</p>
    <div>
      <p>フォロー数</p>
      <p>{{ auth()->user()->followings->count() }}名</p>
    </div>
    <div class="text-end">
    {{ Form::button('フォローリスト', ['class' => 'btn btn-primary', 'onclick' => "location.href='" . url('follow-list') . "'"]) }}
</div>

    <div>
      <p>フォロワー数</p>
      <p>{{ auth()->user()->followers->count() }}名</p>
    </div>
    <div class="text-end">
    {{ Form::button('フォロワーリスト', ['class' => 'btn btn-primary', 'onclick' => "location.href='" . url('follower-list') . "'"]) }}
</div>

  </div>

  <a href="{{ route('search') }}" class="btn btn-primary w-100">ユーザー検索</a>
</div>
  <footer>
  </footer>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="JavaScriptファイルのURL"></script>
@stack('scripts')
</body>
</html>
