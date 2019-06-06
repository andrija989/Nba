<?php

namespace App;

use App\Tag;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
