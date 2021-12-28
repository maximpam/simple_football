<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsPost extends Model
{
    protected $fillable = ['slug', 'title', 'description', 'content', 'user_id', 'cover_url'];
}
