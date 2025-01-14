<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
   <form action="/login" method="POST">
    @csrf
    <input type="email" name="email" placeholder="Email">
    <button type="submit">Login</button>
</form>

</body>
</html>