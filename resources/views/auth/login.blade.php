<x-logout-layout>
<link rel="stylesheet" href="{{ asset('css/logout.css') }}">

<section class="login-section">
    <div class="login-box">
        <p>AtlasSNSへようこそ</p>

        {!! Form::open(['url' => 'login']) !!}
            {{ Form::label('email', 'メールアドレス') }}
            {{ Form::text('email', null, ['class' => 'input']) }}

            {{ Form::label('password', 'パスワード') }}
            {{ Form::password('password', ['class' => 'input']) }}

            {{ Form::submit('ログイン') }}
        {!! Form::close() !!}

        <a class="register-link" href="{{ url('register') }}">新規ユーザーの方はこちら</a>
    </div>
</section>
</x-logout-layout>
