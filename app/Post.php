<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['user_id', 'photo_id', 'category_id', 'title', 'body'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function photo(){
        return $this->belongsTo(Photo::class);
    }

    public function Category(){
        return $this->belongsTo(Category::class);
    }
}
