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
      <div class="d-flex align-items-center">
      <p style="width:100px;">フォロー数</p>
      <p><span class="ms-4">{{ auth()->user()->followings->count() }}</span>人</p>
</div>
    </div>
    <div class="text-end mb-3">
    {{ Form::button('フォローリスト', ['class' => 'btn btn-primary btn-fixed', 'onclick' => "location.href='" . url('followlist') . "'"]) }}
</div>

    <div>
      <div class="d-flex align-items-center">
      <p style="width:100px;">フォロワー数</p>
      <p><span class="ms-4">{{ auth()->user()->followers->count() }}</span>人</p>
    </div>
</div>
    <div class="text-end">
    {{ Form::button('フォロワーリスト', ['class' => 'btn btn-primary btn-fixed', 'onclick' => "location.href='" . url('followerlist') . "'"]) }}
</div>
<div style="margin: 20px 0;"></div>

<hr>

<div style="margin: 20px 0;"></div>

  </div>
  <div class="text-center">
  {{ Form::button('ユーザー検索', ['class' => 'btn btn-primary w-75', 'onclick' => "location.href='" . url('search') . "'"]) }}
</div>
</div>
  <footer>
  </footer>
<script src="{{ asset('js/app.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="JavaScriptファイルのURL"></script>
@stack('scripts')
</body>
</html>
