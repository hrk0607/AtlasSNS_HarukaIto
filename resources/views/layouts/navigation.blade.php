        <div id="head">
            <h1><a href ="{{ url('/top') }}"><img src="images/atlas.png"></a></h1>
            <div id="sub-head">
                <div id="username">
                    <p class="white">{{ session ('username') }}さん</p>
                </div>
                <div class="accordion">
                    <div class="menu-btn">
                        <span></span><span></span>
                    </div>
                        <ul class ="menu">
                            <li><a href="/top">ホーム</a></li>
                            <li><a href="/profile">プロフィール</a></li>
                            <li><a href="/logout">ログアウト</a></li>
                        </ul>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
            <script src="js/script.js"></script>
        </div>
