<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // Other User model code...

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}


?>
