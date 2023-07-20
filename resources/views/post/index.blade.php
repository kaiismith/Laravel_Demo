<?php

    $id = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('post.info', [$id])}}" class="button">Info</a><br>
    <a href="{{route('post.update', [$id])}}" class="button">Update</a><br>
    <a href="{{route('post.delete', [$id])}}" class="button">Delete</a><br>

</body>
</html>
