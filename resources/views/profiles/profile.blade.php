<x-login-layout>
  <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="profile-edit">
    @csrf
    @method('PUT')

    <div class="profile-container">
      <div class="user-icon">
        @if(Auth::user()->icon_image)
        <img src="{{ asset('images/' . Auth::user()->icon_image) }}" alt="現在のアイコン">
        @endif
      </div>

      <div class="profile-fields">
        <div class="profile-row">
          <label for="username">ユーザー名</label>
          <div class="input-area">
            <input type="text" name="username" id="username"
              value="{{ old('username', Auth::user()->username) }}">
            @error('username')
            <span class="error">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div class="profile-row">
          <label for="email">メールアドレス</label>
          <div class="input-area">
            <input type="email" name="email" id="email"
              value="{{ old('email', Auth::user()->email) }}">
            @error('email')
            <span class="error">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div class="profile-row">
          <label for="password">パスワード</label>
          <div class="input-area">
            <input type="password" name="password" id="password"
              placeholder="入力してください">
            @error('password')
            <span class="error">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div class="profile-row">
          <label for="password_confirmation">パスワード（確認）</label>
          <div class="input-area">
            <input type="password" name="password_confirmation" id="password_confirmation">
            @error('password_confirmation')
            <span class="error">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div class="profile-row">
          <label for="bio">自己紹介</label>
          <div class="input-area">
            <textarea name="bio" id="bio" rows="1">{{ old('bio', Auth::user()->bio) }}</textarea>
            @error('bio')
            <span class="error">{{ $message }}</span>
            @enderror
          </div>
        </div>

        <div class="profile-row">
          <label for="icon_image">アイコン画像</label>
          <div class="input-area">
            <div class="icon-upload">
              <label for="icon_image" class="file-btn">ファイルを選択</label>
              <input type="file" name="icon_image" id="icon_image" accept=".jpg,.jpeg,.png,.bmp,.gif,.svg">
              @error('icon_image')
              <span class="error">{{ $message }}</span>
              @enderror
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- 更新ボタン --}}
    <div class="update-btn">
      <button type="submit" class="btn btn-danger px-5">更新</button>
    </div>
  </form>

</x-login-layout>
