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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"></head>
<body>
    @include('post.header')
    <main>
        <h1 class="text-center">Trang chủ</h1>
    </main>
    @include('post.footer')

{{--
    <a href="{{route('post.info', [$id])}}" class="button">Info</a><br>
    <a href="{{route('post.update', [$id])}}" class="button">Update</a><br>
    <a href="{{route('post.delete', [$id])}}" class="button">Delete</a><br>
 --}}
</body>
</html>
