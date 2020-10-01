<?php

namespace App;

class Post extends Model
{
    protected $fillable = ['user_id', 'title', 'body'];
    // protected $guarded = [];

    public function comments() 
    {
        return $this->hasMany(Comment::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function addComment($body, $user_id)
    {
        // its to related to the -> comments elquent model->create 
        $this->comments()->create(compact(['body', 'user_id']));
    }

    // its not changed
    public static function archives()
    {
        return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
            ->groupBy('year', 'month')
            ->get()
            ->toArray();
        
    }

}
