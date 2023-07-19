<h1>CREATE</h1>
<form action="<?php echo route('post.create')?>" method="POST">
    @csrf
    <div>
        <input type="text" name="name" placeholder="NAME">
    </div>
    <button type="submit">SUBMIT</button>
</form>