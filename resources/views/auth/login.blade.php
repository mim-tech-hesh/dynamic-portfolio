<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login-admin</title>
</head>
<body>

    <form action="{{ route('login') }}" method="post">
        @csrf
        <input type="email" placeholder="Enter email" name="email"> <br>
        <input type="password" name="password" placeholder="Enter password"> <br>
        <button type="submit">Login</button>
    </form>

</body>
</html>
