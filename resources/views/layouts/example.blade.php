<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('user.create')}}" method="post">
        @csrf
        Name: <input type="text" name="name"><br>
        Email: <input type="text" name="email"><br>
        Password: <input type="text" name="password"><br>
        Remember_token: <input type="remember_token"><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php

    print_r($posts);
    echo "<br>";

?>