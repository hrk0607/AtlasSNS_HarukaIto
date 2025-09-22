<x-login-layout>
  <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="profile-edit">
    @csrf
    @method('PUT')

    <div class="profile-col1">
              @if(Auth::user()->icon_image)
        <div class="current-icon">
          <img src="{{ asset('images/' . Auth::user()->icon_image) }}" alt="現在のアイコン">
        </div>
      @endif
</div>

  <div class="profile-col3">
      <label for="username">ユーザー名</label>
      <label for="email">メールアドレス</label>
      <label for="password">パスワード</label>
      <label for="password_confirmation">パスワード（確認）</label>
      <label for="bio">自己紹介</label>
      <label for="icon_image">アイコン画像</label>
</div>

 <div class="profile-col5">
      <input type="text" name="username" id="username"
        value="{{ old('username', Auth::user()->username) }}">
      @error('username')
        <span class="error">{{ $message }}</span>
      @enderror
      <input type="email" name="email" id="email"
        value="{{ old('email', Auth::user()->email) }}">
      @error('email')
        <span class="error">{{ $message }}</span>
      @enderror
      <input type="password" name="password" id="password" placeholder="変更しない場合は空欄">
      @error('password')
        <span class="error">{{ $message }}</span>
      @enderror
      <input type="password" name="password_confirmation" id="password_confirmation">
      @error('password_confirmation')
        <span class="error">{{ $message }}</span>
      @enderror
      <textarea name="bio" id="bio" rows="3">{{ old('bio', Auth::user()->bio) }}</textarea>
      @error('bio')
        <span class="error">{{ $message }}</span>
      @enderror
      <input type="file" name="icon_image" id="icon_image" accept=".jpg,.jpeg,.png,.bmp,.gif,.svg">
      @error('icon_image')
        <span class="error">{{ $message }}</span>
      @enderror
    </div>

    {{-- 更新ボタン --}}
    <div class="update-btn">
      <button type="submit" class="btn btn-danger px-5">更新する</button>
</div>
  </form>

</x-login-layout>
