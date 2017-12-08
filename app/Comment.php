<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'user_id', 'comment', 'votes'
    ];
        
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    public function post(){
        return $this->belongsTo(Post::class);
    }
    
    public function responses(){
        return $this->hasMany(Response::class);
    }
}
