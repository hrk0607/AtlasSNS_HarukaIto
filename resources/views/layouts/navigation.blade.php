<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
            <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
            <script src="js/script.js"></script>

</head>
<body>
    <div id="nav-header">
            <h1><a href ="{{ url('/top') }}"><img src="images/atlas.png"></a></h1>
            <div id="sub-head">
                <div id="username">
                    <p class="white">{{ Auth::user()->username }}さん</p>
                </div>
                <div class="accordion">
                    <div class="menu-btn">
                        <span></span><span></span>
                    </div>
                    <ul class ="menu">
                        <li><a href="/top">ホーム</a></li>
                        <li><a href="/profile">プロフィール</a></li>
                        <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        ログアウト
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                        </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
</body>
</html>
