<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function players() {
        return $this->hasMany(Player::class);
    }
    public function comments() {
        return $this->hasMany(Comment::class);
    }
    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }
}
