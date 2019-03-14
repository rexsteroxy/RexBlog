<?php

namespace App;


class Post extends Model
{
    public function comments()
    {
       return $this->hasMany(Comment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function addComments($body)
    {
        $this->comments()->create(compact('body'));
        // Comment::create([
        //     "body"=> $body,
        //     "post_id"=>$this->id
        // ]);
    }
    public static function archives(){
         return static::selectRaw('year(created_at)year,monthname(created_at)month,count(*
         )published ')
         
         ->groupBy('year','month')
 
         ->orderByRaw('min(created_at) desc')
         ->get()
         ->toArray();
    }
}
