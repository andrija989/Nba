<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'content','user_id' 
    ];
}
