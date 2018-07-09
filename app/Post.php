<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
//    protected $fillable = ['title', 'body'];
//    protected  $guarded = [];

    public function comments()
    {
        // return $this->hasMany('App\Comment');

        return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
//        Comment::create([
//            'body' => $body,
//            'post_id' => $this->id
//        ]);

//        $this->comments()->create(['body' => $body]);

        $this->comments()->create(compact('body'));
    }
}
