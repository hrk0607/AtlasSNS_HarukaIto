        <div id="head">
            <h1><a href ="{{ url('/top') }}"><img src="images/atlas.png"></a></h1>
            <div id="">
                <div id="">
                    <p>{{ session ('username') }}さん</p>
                </div>
                <div class="accordion">
                    <button class="menu-btn"></button>
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
        </div>
