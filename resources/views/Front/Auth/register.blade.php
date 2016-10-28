<html>
<head><title>Login|OTP</title></head>
<body>
<form action="{{route('auth.register')}}" method="post">
    {{csrf_field()}}
    <input type="text" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <input type="text" name="name" placeholder="name">
    <input type="submit" value="login">
</form>
</body>
</html>