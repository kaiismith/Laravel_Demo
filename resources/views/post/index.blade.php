<?php

    echo "Index Function! <br>";
    print_r($posts);    
    echo "<br>";

    $id = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('post.delete', [$id])}}" class="button">Delete</a>
</body>
</html>