<header class="py-3 border shadow">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h1>Trang chủ</h1>
            </div>
            <div class="col-8 d-flex justify-content-end align-items-center">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('post.index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('post.info', [$id])}}">Info</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('post.update', [$id])}}">Update</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="{{route('post.delete', [$id])}}">Delete</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('post.list')}}">List</a>
                    </li>
                  </ul>
            </div>
        </div>
    </div>
</header>
