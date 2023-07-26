<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $var = [
        'id', 'title', 'description', 'type', 'image', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
