
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>UPDATE</h1>
    <form action="{{route('post.update', [$data])}}" method="POST">
        @csrf
        <div>
            <input type="text" name="name" placeholder="NAME" value="{{$data->name}}">
            <input type="number" name="id" placeholder="id" value="{{$data->id}}">
            <input type="email" name="email" placeholder="Email" value="{{$data->email}}">

        </div>
        <button type="submit">SUBMIT</button>
    </form>

</body>
</html>
