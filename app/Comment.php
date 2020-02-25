<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post() { //โพสต์เดียวเป็นเอกพจน์
        return $this->belongsTo(Post::class);
    }
}
