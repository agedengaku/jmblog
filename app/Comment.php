<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
	protected $fillable = [
		'post_id',
		'user_id,',
		'body'
	];
    public function post() 
    {
    	return $this->belongsTo(Post::class);
    }

    public function replies()
    {
    	return $this->hasMany(Reply::class);
    }
}
