<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments() { //มีหลายคอมเมนต์ชื่อฟังกก์ชันเป็นพูพจน์
        return $this->hasMany(Comment::class);
    }
}
