<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
</head>
<body>
    <h1>User Register</h1>
    <form method="POST" action="">
        @csrf
        <div>
            <label for="name">Username</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}"  autofocus>
            @error('name')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" >
            @error('email')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="password">Mật khẩu</label>
            <input id="password" type="password" name="password" >
            @error('password')
                <span>{{ $message }}</span>
            @enderror
        </div>
        <div>
            <label for="password_confirmation">Xác nhận mật khẩu</label>
            <input id="password_confirmation" type="password" name="password_confirmation" >
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
</body>
</html>
