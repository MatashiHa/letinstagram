<!DOCTYPE html>
<html lang="ru_RU">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ env('APP_NAME') }}</title>
    </head>
    <body>
        <h1>{{ env('APP_NAME') }}</h1>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="text" name="name" placeholder="Name">
            <input type="date" name="birthday" placeholder="Birthday">
            <button type="submit">Register</button>
        </form>
    </body>
</html>
