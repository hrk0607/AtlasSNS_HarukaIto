<x-login-layout>
<div class="profile-edit">
  <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    {{-- ユーザー名 --}}
    <div class="form-group">
      <label for="username">ユーザー名</label>
      <input type="text" name="username" id="username"
        value="{{ old('username', Auth::user()->username) }}">
      @error('username')
        <span class="error">{{ $message }}</span>
      @enderror
    </div>

    {{-- メールアドレス --}}
    <div class="form-group">
      <label for="email">メールアドレス</label>
      <input type="email" name="email" id="email"
        value="{{ old('email', Auth::user()->email) }}">
      @error('email')
        <span class="error">{{ $message }}</span>
      @enderror
    </div>

    {{-- パスワード --}}
    <div class="form-group">
      <label for="password">パスワード</label>
      <input type="password" name="password" id="password" placeholder="変更しない場合は空欄">
      @error('password')
        <span class="error">{{ $message }}</span>
      @enderror
    </div>

    {{-- パスワード確認 --}}
    <div class="form-group">
      <label for="password_confirmation">パスワード（確認）</label>
      <input type="password" name="password_confirmation" id="password_confirmation">
      @error('password_confirmation')
        <span class="error">{{ $message }}</span>
      @enderror
    </div>

    {{-- 自己紹介 --}}
    <div class="form-group">
      <label for="bio">自己紹介</label>
      <textarea name="bio" id="bio" rows="3">{{ old('bio', Auth::user()->bio) }}</textarea>
      @error('bio')
        <span class="error">{{ $message }}</span>
      @enderror
    </div>

    {{-- アイコン画像 --}}
    <div class="form-group">
      <label for="icon_image">アイコン画像</label>
      <input type="file" name="icon_image" id="icon_image" accept=".jpg,.jpeg,.png,.bmp,.gif,.svg">
      @error('icon_image')
        <span class="error">{{ $message }}</span>
      @enderror
      @if(Auth::user()->icon_image)
        <div class="current-icon">
          <img src="{{ asset('images/' . Auth::user()->icon_image) }}" alt="現在のアイコン">
        </div>
      @endif
    </div>

    <button type="submit">更新する</button>
  </form>
</div>

</x-login-layout>
