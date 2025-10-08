<x-logout-layout>
    <link rel="stylesheet" href="{{ asset('css/logout.css') }}">

    <!-- 適切なURLを入力してください -->
    <div class="login-box">
        {!! Form::open(['url' => 'register']) !!}

        <p>新規ユーザー登録</p>

        {{ Form::label('username', 'ユーザー名', ['class' => 'form-label']) }}
        {{ Form::text('username', null, ['class' => 'form-input']) }}
        @error('username')
        <div class="text-danger small">{{ $message }}</div>
        @enderror

        {{ Form::label('email', 'メールアドレス', ['class' => 'form-label']) }}
        {{ Form::email('email', null, ['class' => 'form-input']) }}
        @error('email')
        <div class="text-danger small">{{ $message }}</div>
        @enderror

        {{ Form::label('password', 'パスワード', ['class' => 'form-label']) }}
        {{ Form::password('password', ['class' => 'form-input']) }}
        @error('password')
        <div class="text-danger small">{{ $message }}</div>
        @enderror

        {{ Form::label('password_confirmation', 'パスワード確認', ['class' => 'form-label']) }}
        {{ Form::password('password_confirmation', ['class' => 'form-input']) }}

        <div class="text-end">
            {{ Form::submit('新規登録', ['class' => 'btn btn-danger btn-lg']) }}
        </div>

        <p><a class="login-link" href="login">ログイン画面へ戻る</a></p>

        {!! Form::close() !!}
    </div>

</x-logout-layout>
