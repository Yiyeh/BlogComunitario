<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'category_id', 'title', 'slug', 'file', 'body', 'votes', 'acceptedBy'
    ];
        
    public function user(){ 
        return $this->belongsTo(User::class);    
    }
    
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
}
