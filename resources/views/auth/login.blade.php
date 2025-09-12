<x-logout-layout>
<link rel="stylesheet" href="{{ asset('css/logout.css') }}">

<section class="login-section">
    <div class="login-box">
        <p>AtlasSNSへようこそ</p>

        {!! Form::open(['url' => 'login']) !!}
            {{ Form::label('email', 'メールアドレス', ['class' => 'form-label']) }}
            {{ Form::text('email', null, ['class' => 'form-input']) }}
            @error('email')
    <div class="text-danger">{{ $message }}</div>
@enderror

            {{ Form::label('password', 'パスワード', ['class' => 'form-label']) }}
            {{ Form::password('password', ['class' => 'form-input']) }}
            @error('password')
    <div class="text-danger">{{ $message }}</div>
@enderror

            <div class="text-end">
              {{ Form::submit('ログイン', ['class' => 'btn btn-danger btn-lg']) }}
              </div>
        {!! Form::close() !!}

        <a class="register-link" href="{{ url('register') }}">新規ユーザーの方はこちら</a>
    </div>
</section>
</x-logout-layout>
