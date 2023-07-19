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