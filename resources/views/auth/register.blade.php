<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    @if ($errors->any())
    <ul>
        {!! implode('',$errors->all('<li>:message</li>'))!!}
    </ul>
        
    @endif
    <form method="POST" action="/store">
        <h1><?=session('message')?><br>Register Form</h1>
        <label>Fullname
        <input type="text" name="name"></label>
        <label>Username
        <input type="text" name="User_name"></label>
        <label>Email</label>
        <input type="email" name="Email">
        <label>Password
        <input type="password" name="password" id=""></label>
        <label>Confirm Password
        <input type="password" name="password_confirmation" id=""></label>
        <button>Register</button>
        @csrf
    </form>
</body>
</html>