<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentReply extends Model
{
    public function comment()
    {
        return $this->belongTo('App\Comment');
    }
}
